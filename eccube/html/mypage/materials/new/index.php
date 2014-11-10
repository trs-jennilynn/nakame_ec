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
class LC_Page_Materials_New extends LC_Page_Ex {

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
    		$this->tpl_login     = true;
    		$this->CustomerName1 = $objCustomer->getvalue('name01');
    		$this->CustomerName2 = $objCustomer->getvalue('name02');
    		$this->CustomerPoint = $objCustomer->getvalue('point');
    		$this->action();
    	}
    	
    	$objCartSess = new SC_CartSession_Ex();
    	$this->cartItems = $objCartSess->getAllCartList();
    	
    	$this->tpl_count = count($this->cartItems = $objCartSess->getAllCartList());
    	
    	$this->sendResponse();
    	?>
    	<script type="text/javascript">
    	$(document).ready(function(){
			$('#material-editor').click(function(){
				$('#material-texture').trigger('click');
			});

			$('#material-texture').live('change', function(){
				 $('.icon-large').css({'display':'none'});
			     $('.uploader').find('h1').css({'display':'none'});
			     $('.uploader').find('p').css({'display':'none'});
			     $('.material-upload-preview').css({'display':'block'});
			     $('.editor-step02').css({'display':'block'});
				$('.uploaded').trigger('click');
			});
        });
    	</script>
    	<?php 
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {

    	$objCustomer = new SC_Customer_Ex();
    	$objFormParam = new SC_FormParam_Ex();
		$customer_id = $objCustomer->getvalue('customer_id');
		
		$objProduct = new SC_Product_Ex();
		$main_img = $_FILES['material-texture']['name'];
		$this->design_img = $main_img;
		
		$this->note = $objFormParam->getValue('note');
		
		
    	switch ($this->getMode()) {
    		case 'load':
    			$main_img = $_FILES['material-texture']['name'];
    			$objQuery =& SC_Query_Ex::getSingletonInstance();
    			
    			$product_id = $objQuery->nextVal('dtb_products_product_id');
    			
    			$sqlval['product_id'] = $product_id;
    			$sqlval['customer_id'] = $customer_id;
    			$sqlval['note'] = $main_img; 
    			
    			$objQuery->insert('dtb_products', $sqlval);
    			
    			$tmp = $_FILES['material-texture']['tmp_name'];

    			$fileName = $_FILES["material-texture"]["name"];
    			$fileTmpLoc = $_FILES["material-texture"]["tmp_name"];
    			// Path and file name
    			$pathAndName =  "../../../upload/mypage/new/".$fileName;
    			
    			// Run the move_uploaded_file() function here
    			$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
    			
    			echo $note = $objFormParam->getValue('note');
    			break;
    		default:
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


$objPage = new LC_Page_Materials_New();
register_shutdown_function(array($objPage, 'destroy'));
$objPage->init();
$objPage->process();
