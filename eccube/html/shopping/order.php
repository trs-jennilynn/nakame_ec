<?php
require_once '../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * ユーザーカスタマイズ用のページクラス
 *
 * 管理画面から自動生成される
 *
 * @package Page
 */
class LC_Page_ShoppingOrder extends LC_Page_Ex {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
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
    	$objCartSess = new SC_CartSession_Ex();
    	
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
}


$objPage = new LC_Page_ShoppingOrder();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
