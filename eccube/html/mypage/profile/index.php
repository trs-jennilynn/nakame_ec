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
    		SC_Response_Ex::sendRedirect(HTTP_URL . 'login/');
    	
    	} else {
    		//マイページ会員情報表示用共通処理
    		$this->tpl_login = true;
    		$this->CustomerName1 = $objCustomer->getvalue('name01');
    		$this->CustomerName2 = $objCustomer->getvalue('name02');
    		$this->CustomerEmail = $objCustomer->getvalue('email');
    		$this->action();
    	}
    	
    	
    	$this->sendResponse();
    	$this->action();
    }
    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {  	 
    	$objCustomer = new SC_Customer_Ex();
    	$customer_id = $objCustomer->getValue('customer_id');
    	$password = $objCustomer->getValue('password');
    	/*if (!empty($_POST['return'])) {
    		$_POST['mode'] = 'return';
    	}*/
    	
    	$objCookie = new SC_Cookie_Ex();
    	$objFormParam = new SC_FormParam_Ex();
    	SC_Helper_Customer_Ex::sfCustomerMypageParam($objFormParam);
    	$objFormParam->setParam($_POST);    // POST値の取得
    	
    	//echo $objFormParam;
    	$objCookie = new SC_Cookie_Ex();
    	//echo $password;
    	switch ($this->getMode()) {            
    		
    		
    		case 'username':
    			
    			if (!empty($_POST['userpass']) && !empty($_POST['user-name'])) {
    				$name = $_POST['user-name'];
    				$objQuery = SC_Query_Ex::getSingletonInstance();
    				$result = $objQuery->update('dtb_customer',
    						array('name01' => $name),
    						'customer_id = ?', array($customer_id));
    				$objCustomer->updateSession();
    				$this->CustomerName1 = $objCustomer->getValue('name01');
    				break;
    				//echo '<script>alert("good");</script>';
    			}
    			else{
            		echo '<script>alert("missing");</script>';
    			}
    			break;
    			
            case 'emailadd':
            	
            	$email = $_POST['email'];
            	$objQuery = SC_Query_Ex::getSingletonInstance();
            	$result = $objQuery->update('dtb_customer',
            			array('email' => $email),
            			'customer_id = ?', array($customer_id));
            	$objCustomer->updateSession();
            	$this->CustomerEmail = $objCustomer->getValue('email');
            	break;
            
            
            case 'password':
            	$pass = $_POST['user_password'];
            	$objQuery = SC_Query_Ex::getSingletonInstance();
            	$result = $objQuery->update('dtb_customer',
            			array('password' => $pass),
            			'customer_id = ?', array($customer_id));
            	$objCustomer->updateSession();
            	//echo '<script>alert("sad");</script>';
            	break;
           }
          
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