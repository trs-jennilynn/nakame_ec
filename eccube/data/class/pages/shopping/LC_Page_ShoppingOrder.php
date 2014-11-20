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
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * ショッピングログインのページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_ShoppingOrder.php 22876 2013-06-24 01:43:03Z m_uehara $
 */
class LC_Page_ShoppingOrder extends LC_Page_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrProductType = $masterData->getMasterData('mtb_product_type');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function action() {
    	
    	$objCartSess = new SC_CartSession_Ex();
    	$objSiteSess = new SC_SiteSession_Ex();
    	$objCustomer = new SC_Customer_Ex();
    	 
    	
    // モバイル対応
        if (SC_Display_Ex::detectDevice() == DEVICE_TYPE_MOBILE) {
            if (isset($_GET['cart_no'])) {
                $objFormParam->setValue('cart_no', $_GET['cart_no']);
            }
            if (isset($_GET['cartKey'])) {
                $objFormParam->setValue('cartKey', $_GET['cartKey']);
            }
        }

        $this->cartKeys = $objCartSess->getKeys();
        foreach ($this->cartKeys as $key) {
            // 商品購入中にカート内容が変更された。
            if ($objCartSess->getCancelPurchase($key)) {
                $this->tpl_message .= "商品購入中にカート内容が変更されましたので、お手数ですが購入手続きをやり直して下さい。\n";
            }
        }
        $this->arrInfo = SC_Helper_DB_Ex::sfGetBasisData();
        $totalIncTax = 0;
    	foreach ($this->cartKeys as $key) {
    		// カート集計処理
    		$this->tpl_message .= $objCartSess->checkProducts($key);
    		$this->tpl_total_inctax[$key] = $objCartSess->getAllProductsTotal($key);
    		$totalIncTax += $this->tpl_total_inctax[$key];
    		$this->tpl_total_tax[$key] = $objCartSess->getAllProductsTax($key);
    		// ポイント合計
    		$this->tpl_total_point[$key] = $objCartSess->getAllProductsPoint($key);
    	
    		$this->arrData[$key] = $objCartSess->calculate($key, $objCustomer);
    	
    		// 送料無料チェック
    		$this->arrData[$key]['is_deliv_free'] = $objCartSess->isDelivFree($key);
    	
    		// 送料無料までの金額を計算
    		$this->tpl_deliv_free[$key] = $this->arrInfo['free_rule'] - $this->tpl_total_inctax[$key];
    	}
    	
    	// 前頁のURLを取得
    	// TODO: SC_CartSession::setPrevURL()利用不可。
    	$this->lfGetCartPrevUrl($_SESSION,$_SERVER['HTTP_REFERER']);
    	$this->tpl_prev_url = (isset($_SESSION['cart_prev_url'])) ? $_SESSION['cart_prev_url'] : '';
    	
    	// すべてのカートの内容を取得する
    	$this->cartItems = $objCartSess->getAllCartList();
    	
    	$this->tpl_count = count($this->cartItems = $objCartSess->getAllCartList());
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }
    /**
     * 前頁のURLを取得
     *
     * @return void
     */
    function lfGetCartPrevUrl(&$session,$referer) {
    	if (!preg_match('/cart/', $referer)) {
    		if (!empty($session['cart_referer_url'])) {
    			$session['cart_prev_url'] = $session['cart_referer_url'];
    			unset($session['cart_referer_url']);
    		} else {
    			if (preg_match('/entry/', $referer)) {
    				$session['cart_prev_url'] = HTTPS_URL . 'entry/kiyaku.php';
    			} else {
    				$session['cart_prev_url'] = $referer;
    			}
    		}
    	}
    	// 妥当性チェック
    	if (!SC_Utils_Ex::sfIsInternalDomain($session['cart_prev_url'])) {
    		$session['cart_prev_url'] = '';
    	}
    }
}