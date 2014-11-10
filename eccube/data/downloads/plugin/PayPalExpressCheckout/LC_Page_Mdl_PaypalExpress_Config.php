<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
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
require_once(realpath(dirname( __FILE__)) . "/include.php");
require_once(realpath(dirname( __FILE__)) . "/SC_Helper_Paypal.php");
require_once(CLASS_EX_REALDIR . "page_extends/admin/LC_Page_Admin_Ex.php");

/**
 * PayPal決済モジュールのページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Mdl_PaypalExpress_Config.php 1165 2012-06-18 09:44:40Z adachi $
 */
class LC_Page_Mdl_PaypalExpress_Config extends LC_Page_Admin_Ex {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_mainpage = PLUGIN_UPLOAD_REALDIR . PLG_PAYPAL_EXPRESS_CODE . "/config.tpl";
        $this->tpl_subtitle = t('pp5');
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
     * Page のアクション.
     *
     * @return void
     */
    function action() {
        $objFormParam = new SC_FormParam_Ex();

        $this->initParam($objFormParam);
        $objFormParam->setParam($_POST);
        $objFormParam->convParam();
        $this->paypal_checkout_button_url = PAYPAL_EXPRESS_CHECKOUT_BUTTON;
        switch ($this->getMode()) {
        case 'edit':
            $this->arrErr = $objFormParam->checkError();
            if (SC_Utils_Ex::isBlank($this->arrErr)) {
                SC_Helper_Paypal::registerPayments();
                SC_Helper_Paypal::setConfig($objFormParam->getHashArray());
                $this->tpl_onload .= 'alert("'.t("pp6").'"); window.close(); window.close();';
            }
            break;
        default:
            // データのロード
            $arrConfig = SC_Helper_Paypal::getConfig();
            $objFormParam->setParam($arrConfig);
            break;
        }

        $this->arrForm = $objFormParam->getFormParamList();
        $this->setTemplate($this->tpl_mainpage);
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
     *  パラメータ情報の初期化
     */
    function initParam(&$objFormParam) {
        $objFormParam->addParam("API user name ", "api_user", MTEXT_LEN, "KVa", array("MAX_LENGTH_CHECK", "EXIST_CHECK"));
        $objFormParam->addParam("API password", "api_pass", MTEXT_LEN, "KVa", array("MAX_LENGTH_CHECK", "EXIST_CHECK"));
        $objFormParam->addParam("API signature", "api_signature", MTEXT_LEN, "KVa", array("MAX_LENGTH_CHECK", "EXIST_CHECK"));
        $objFormParam->addParam("Use express checkout button", "use_express_btn", 1, "n", array("MAX_LENGTH_CHECK", "NUM_CHECK"));
        $objFormParam->addParam("Use sandbox ", "use_sandbox", 1, "n", array("MAX_LENGTH_CHECK", "NUM_CHECK"));
    }
}
