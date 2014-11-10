<?php
require_once '../../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * ユーザーカスタマイズ用のページクラス
 *
 * 管理画面から自動生成される
 *
 * @package Page
 */
class LC_Page_Materials extends LC_Page_Ex {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        
        $this->tpl_title        = 'MYページ';
        $this->tpl_navi         = 'mypage/navi.tpl';
        $this->tpl_mainno       = 'mypage';
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
       $objCustomer = new SC_Customer_Ex();
    	 
    	// ログインしていない場合は必ずログインページを表示する
    	if ($objCustomer->isLoginSuccess(true) === false) {
    		SC_Response_Ex::sendRedirect(HTTP_URL . 'login/');
    		 
    	} else {
    		//マイページ会員情報表示用共通処理
    		$this->tpl_login     = true;
    		$this->CustomerName1 = $objCustomer->getvalue('name01');
    		$this->CustomerName2 = $objCustomer->getvalue('name02');
    		$this->CustomerPoint = $objCustomer->getvalue('point');
    		$this->action();
    	}
    	 
    	 
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


$objPage = new LC_Page_Materials();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
