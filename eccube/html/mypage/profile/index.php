<?php
require_once '../../../require.php';
require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * ユーザーカスタマイズ用のページクラス
 *
 * 管理画面から自動生成される
 *
 * @package Page
 */
class LC_Page_Profile extends LC_Page_Ex {

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
        // ログインチェック
    	$objCustomer = new SC_Customer_Ex();
    	
    	// ログインしていない場合は必ずログインページを表示する
    	if ($objCustomer->isLoginSuccess(true) === false) {
    		// クッキー管理クラス
    		$objCookie = new SC_Cookie_Ex();
    		// クッキー判定(メールアドレスをクッキーに保存しているか）
    		$this->tpl_login_email = $objCookie->getCookie('login_email');
    		if ($this->tpl_login_email != '') {
    			$this->tpl_login_memory = '1';
    		}
    	
    		// POSTされてきたIDがある場合は優先する。
    		if (isset($_POST['login_email'])
    				&& $_POST['login_email'] != ''
    		) {
    			$this->tpl_login_email = $_POST['login_email'];
    		}
    	
    		// 携帯端末IDが一致する会員が存在するかどうかをチェックする。
    		if (SC_Display_Ex::detectDevice() === DEVICE_TYPE_MOBILE) {
    			$this->tpl_valid_phone_id = $objCustomer->checkMobilePhoneId();
    		}
    		$this->tpl_title        = 'MYページ(ログイン)';
    		$this->tpl_mainpage     = 'mypage/login.tpl';
    	
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


$objPage = new LC_Page_Profile();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
