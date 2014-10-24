<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2013 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
// {{{ requires
require_once realpath(dirname(__FILE__)) . '/include.php';
require_once realpath(dirname(__FILE__)) . '/SC_Helper_Paypal.php';
/**
 * PayPalExpressCheckout Plug-in.
 *
 * @package Plugin
 * @author LOCKON CO.,LTD.
 * @version $Id:LC_Page_Abouts.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class PayPalExpressCheckout extends SC_Plugin_Base {

    /**
     * コンストラクタ
     */
    public function __construct(array $arrSelfInfo) {
        parent::__construct($arrSelfInfo);
    }

    /**
     * インストール
     * installはプラグインのインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin plugin_infoを元にDBに登録されたプラグイン情報(dtb_plugin)
     * @return void
     */
    function install($arrPlugin) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $module_id = $objQuery->getOne("select max(module_id) + 1 as module_id_max from dtb_module");
        $arrModule = array();
        $arrModule['module_id']   = $module_id;
        $arrModule['module_code'] = PLG_PAYPAL_EXPRESS_CODE;
        $arrModule['module_name'] = 'PayPal Express Checkout plug-in';
        $arrModule['sub_data']    = array('use_express_btn' => 1); // checkout with paypal button
        $arrModule['auto_update_flg'] = 0;
        $arrModule['del_flg']         = 0;
        $arrModule['create_date'] = 'CURRENT_TIMESTAMP';
        $arrModule['update_date'] = 'CURRENT_TIMESTAMP';
        $objQuery->insert('dtb_module', $arrModule);
        copy(PLUGIN_UPLOAD_REALDIR . PLG_PAYPAL_EXPRESS_CODE . "/logo.png",
             PLUGIN_HTML_REALDIR . PLG_PAYPAL_EXPRESS_CODE . "/logo.png");
    }

    /**
     * アンインストール
     * uninstallはアンインストール時に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function uninstall($arrPlugin) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objQuery->query("DELETE FROM dtb_module WHERE module_code = ?", array(PLG_PAYPAL_EXPRESS_CODE));
        $objQuery->query("DELETE FROM dtb_payment WHERE memo03 = ?", array(PLG_PAYPAL_EXPRESS_CODE));
    }

    /**
     * 停止
     * disableはプラグインを無効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function disable($arrPlugin) {
        // nop
    }

    /**
     * 稼働
     * enableはプラグインを有効にした際に実行されます.
     * 引数にはdtb_pluginのプラグイン情報が渡されます.
     *
     * @param array $arrPlugin プラグイン情報の連想配列(dtb_plugin)
     * @return void
     */
    function enable($arrPlugin) {
        // nop
    }

    /**
     * カートページに 「PayPal でお支払い」ボタンを表示させる
     */
    function process($objPage) {
        if (!SC_Helper_Paypal::useExpressBtn()) {
            return;
        }
        $class_name = get_class($objPage);

        switch ($class_name) {
            case 'LC_Page_Cart_Ex':
                $objPage->action();

                $objCartSess = new SC_CartSession_Ex();
                // カートページを書きかえる
                $objPage->include_mainpage = $objPage->tpl_mainpage;
                $objPage->tpl_mainpage = SC_Helper_Paypal::getPluginDir() . 'cart.tpl';

                switch ($objPage->getMode()) {
                case 'do_express':
                    $objCustomer = new SC_Customer_Ex();

                    $objSiteSess = new SC_SiteSession_Ex();
                    $objPurchase = new SC_Helper_Purchase_Ex();

                    if (in_array($_POST['cartKey'], $objCartSess->getKeys())) {
                        $cartKey = $_POST['cartKey'];
                        $objPage->cartKey = $cartKey;
                    } else {
                        break;
                    }

                    $arrDelivSelect = SC_Helper_Paypal::getAvailableDeliv($cartKey);
                    // 配送業者未割り当ての場合はエラー表示
                    if (SC_Utils_Ex::isBlank($arrDelivSelect)) {
                        $objPage->tpl_message = t('pp1'); //「PayPal でチェックアウト」ボタンは、現在ご利用になることができません。恐れ入りますがお問い合わせページよりお問い合わせください。';
                        break;
                    }
                    // 配送業者選択画面表示
                    elseif (SC_Utils_Ex::isBlank($_POST['deliv_id'])
                            && count($arrDelivSelect) > 1) {
                        $objPage->tpl_title = t('pp2');
                        $objPage->tpl_mainpage = SC_Helper_Paypal::getDelivSelectTplPath();
                        $objPage->arrDelivSelect = $arrDelivSelect;
                        if ($_POST['retry'] == 1) {
                            $objPage->arrErr['deliv_id'] = t('pp3');
                        }

                        break;
                    } else {
                        // 配送業者選択後
                        if (!SC_Utils_Ex::isBlank($_POST['deliv_id'])) {
                            $deliv_id = intval($_POST['deliv_id']);
                        }
                        // 配送業者が1件のみの場合
                        else {
                            $deliv_id = $arrDelivSelect[0]['deliv_id'];
                        }
                    }

                    // カート内集計
                    $arrParams = $objCartSess->calculate($cartKey, $objCustomer);

                    // カート を購入モードに設定
                    $cartList = $objCartSess->getCartList($cartKey);
                    if(count($cartList) > 0) {
                        $objPage->lfSetCurrentCart($objSiteSess, $objCartSess, $cartKey);
                    } else {
                        break;
                    }

                    // 一旦受注を完了させる
                    $objQuery =& SC_Query_Ex::getSingletonInstance();
                    $arrParams['order_id'] = $objQuery->nextval("dtb_order_order_id");
                    $_SESSION['order_id'] = $arrParams['order_id'];
                    $arrParams['deliv_id'] = $deliv_id;
                    $arrPayments = $objQuery->getRow('payment_id, charge', 'dtb_payment', 'memo03 = ?',
                                                     array(PLG_PAYPAL_EXPRESS_CODE));
                    $arrParams['payment_id'] = $arrPayments['payment_id'];
                    $arrParams['charge'] = $arrPayments['charge'];

                    // ログイン時は会員情報を受注データに反映
                    if ($objCustomer->isLoginSuccess()) {
                        $objPurchase->copyFromCustomer($arrParams, $objCustomer, 'shipping');
                                                $objPurchase->copyFromCustomer($arrParams, $objCustomer, 'shipping');
                        // ログインしていた場合はPayPal会員登録の初期値を設定
                        $arrRequest['ADDROVERRIDE'] = '1';
                        $arrRequest['PAYMENTREQUEST_0_SHIPTONAME'] = $objCustomer->getValue('name01') . ' ' . $objCustomer->getValue('name02');
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOZIP'] = $objCustomer->getValue('zipcode');
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOSTATE'] = $objCustomer->getValue('addr02');
                        $arrAddr01 = explode(',', $objCustomer->getValue('addr01'));
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOCITY'] = trim($arrAddr01[1]);
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOSTREET'] = trim($arrAddr01[0]);
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOSTREET2'] = '';
                        $arrRequest['EMAIL'] = $objCustomer->getValue('email');
                        $arrRequest['PAYMENTREQUEST_0_SHIPTOPHONENUM'] = $objCustomer->getValue('tel01') . '-'
                                                                         . $objCustomer->getValue('tel02') . '-'
                                                                         . $objCustomer->getValue('tel03');
                    }
                    // 非会員の場合はダミーデータを登録しておく
                    else {
                        $arrParams['order_name01'] = t('pp4');
                        $arrParams['customer_id'] = 0;
                        $arrParams['update_date'] = 'Now()';
                    }

                    $objPurchase->saveShippingTemp($arrParams);
                    $objPurchase->saveOrderTemp($objSiteSess->getUniqId(), $arrParams, $objCustomer);
                    $objSiteSess->setRegistFlag();
                    $objPurchase->completeOrder(ORDER_PENDING);

                    // PayPal API から token を取得
                    $arrRequest['PAYMENTREQUEST_0_SHIPPINGAMT'] = $arrParams['deliv_fee'];
                    $arrParams['payment_total'] += $arrParams['charge'];
                    $arrRequest['PAYMENTREQUEST_0_AMT'] = $arrParams['payment_total'];
                    $arrOrder = $objPurchase->getOrder($_SESSION['order_id']);
                    $arrDetails = $objPurchase->getOrderDetail($_SESSION['order_id'], false);
                    // ダウンロード商品の場合は配送先を表示しない
                    $hasDownload = SC_Helper_Paypal::hasDownload($_SESSION['order_id']);
                    if ($hasDownload) {
                        $arrRequest['NOSHIPPING'] = 1;
                    }
                    $arrRequest = array_merge($arrRequest, SC_Helper_Paypal::createItemRequests($arrDetails, $arrOrder));
                    $arrResponse = SC_Helper_Paypal::sendNVPRequest('SetExpressCheckout', $arrRequest, true);
                    if (SC_Helper_Paypal::isError($arrResponse)) {
                        $objPurchase->rollbackOrder($_SESSION['order_id'], ORDER_CANCEL, false);
                        $objPage->tpl_message = SC_Helper_Paypal::getErrorMessage($arrResponse);
                        break;
                    }
                    $_SESSION['token'] = $arrResponse['TOKEN'];

                    $link_url = SC_Helper_Paypal::getLinkURL();

                    header('Location: ' . $link_url . '&token=' . $_SESSION['token']);
                    exit;
                    break;
                default:
                }

                // 商品種別ごとの有効な配送業者の配列
                $arrDeliv = array();
                foreach ($objCartSess->getKeys() as $key) {
                    $arrDeliv[$key] = SC_Helper_Paypal::getAvailableDeliv($key);
                }
                $objPage->arrDeliv = SC_Utils_Ex::jsonEncode($arrDeliv);

                // PayPal チェックアウトボタン画像を取得
                $arrResponse = SC_Helper_Paypal::sendNVPRequest('GetPalDetails');
                $objPage->paypal_checkout_button_url = PAYPAL_EXPRESS_CHECKOUT_BUTTON;
                if (SC_Helper_Paypal::useSandbox()) {
                    $objPage->paypal_checkout_button_url = PAYPAL_EXPRESS_CHECKOUT_BUTTON_SANDBOX;
                }
                if (SC_Helper_Paypal::isError($arrResponse)) {
                    $objPage->tpl_message = SC_Helper_Paypal::getErrorMessage($arrResponse);
                } else {
                    $objPage->paypal_checkout_button_url .= '&pal=' . $arrResponse['PAL']
                        .= '&locale=' . $arrResponse['LOCALE'];
                }
                break;
        default:
        }
    }
}
