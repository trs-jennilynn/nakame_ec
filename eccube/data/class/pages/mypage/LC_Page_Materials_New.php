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

require_once CLASS_EX_REALDIR . 'page_extends/LC_Page_Ex.php';

/**
 * Index のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Materials_New.php 23230 2013-09-19 02:49:03Z m_uehara $
 */
class LC_Page_Materials_New extends LC_Page_Ex
{
    /**
     * Page を初期化する.
     *
     * @return void
     */
    public function init()
    {
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
    public function process()
    {
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

        			$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(1)').find('div.item-image').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(1)').toggleClass("published draft");
    					if($('.shirt_dis').val() == '1'){
    						$('.shirt_dis').val("2");
    					}
    					else{
    						$('.shirt_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(1)').find('div.check-icon').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(1)').toggleClass("published draft");
    					if($('.shirt_dis').val() == '1'){
    						$('.shirt_dis').val("2");
    					}
    					else{
    						$('.shirt_dis').val("1");
    					}
    	            });
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(2)').find('div.item-image').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(2)').toggleClass("published draft");
    					if($('.bag_dis').val() == '1'){
    						$('.bag_dis').val("2");
    					}
    					else{
    						$('.bag_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(2)').find('div.check-icon').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(2)').toggleClass("published draft");
    					if($('.bag_dis').val() == '1'){
    						$('.bag_dis').val("2");
    					}
    					else{
    						$('.bag_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(3)').find('div.item-image').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(3)').toggleClass("published draft");
    					if($('.mug_dis').val() == '1'){
    						$('.mug_dis').val("2");
    					}
    					else{
    						$('.mug_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(3)').find('div.check-icon').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(3)').toggleClass("published draft");
    					if($('.mug_dis').val() == '1'){
    						$('.mug_dis').val("2");
    					}
    					else{
    						$('.mug_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(4)').find('div.item-image').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(4)').toggleClass("published draft");
    					if($('.phone_dis').val() == '1'){
    						$('.phone_dis').val("2");
    					}
    					else{
    						$('.phone_dis').val("1");
    					}
                	});
                	$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(4)').find('div.check-icon').click(function(){
    					//alert('assa');
    					$('#material-product-preview').find('div.previews.previews-editor').find('div:nth-child(4)').toggleClass("published draft");
    					if($('.phone_dis').val() == '1'){
    						$('.phone_dis').val("2");
    					}
    					else{
    						$('.phone_dis').val("1");
    					}
                	});
                });
            	</script>
            	<?php 
    }

    /**
     * Page のAction.
     *
     * @return void
     */
    public function action()
    {
    	
    	$objCustomer = new SC_Customer_Ex();
		$objFormParam = new SC_FormParam_Ex();
		$customer_id = $objCustomer->getvalue('customer_id');
		
		$objProduct = new SC_Product_Ex();
		$main_img = $_FILES['material-texture']['name'];
		$this->design_img = $main_img;
		
		
		switch ($this->getMode()) {
			case 'load':
				$objFormParam = new SC_FormParam_Ex();
				$customer_id = $objCustomer->getvalue('customer_id');
				
				$objProduct = new SC_Product_Ex();
				$main_img1 = $_FILES['material-texture']['name'];
				
				$objQuery =& SC_Query_Ex::getSingletonInstance();
				
				$product_id = $objQuery->nextVal('dtb_products_product_id');
				
				$sqlval['product_id'] = $product_id;
				$sqlval['customer_id'] = $customer_id;
				$sqlval['note'] = $main_img1;
				$this->test=$main_img1;
				
				/* $arrdes = $objQuery->select('product_id,customer_id,note,main_list_image','dtb_products','customer_id=?', array($customer_id));
				
				$image_main = $arrdes[0]['main_list_image'];
				$pro_id = $arrdes[0]['product_id'];
				if(count($arrdes) > 0){
					//$objQuery->insert('dtb_products', $sqlval);
					echo '<script>alert("aaaa")</script>';
				}else{
					if($image_main == NULL){
					//$objQuery->update('dtb_products', $sqlval);
					echo '<script>alert("asasas")</script>';
					}
				}  */
				
				//$objQuery->insert('dtb_products', $sqlval);
				
				$tmp = $_FILES['material-texture']['tmp_name'];
				
				$fileName = $_FILES["material-texture"]["name"];
				$fileTmpLoc = $_FILES["material-texture"]["tmp_name"];
				// Path and file name
				$pathAndName =  "../../../upload/mypage/new/".$fileName;
				
				//Run the move_uploaded_file() function here
				$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
				
				$note = $objFormParam->getValue('note');
				
			//	$picshirt = '<img src="../../../user_data/packages/default/img/items/1415356441-10x50.png (1).jpg"';
				
				
				$result_path = file_get_contents("http://nakame_ec.localhost/mypage/materials/new/process_shirt.php?path_name=". $pathAndName);
				$result_path2 = file_get_contents("http://nakame_ec.localhost/mypage/materials/new/process_cup.php?path_name=". $pathAndName);
				$result_path3 = file_get_contents("http://nakame_ec.localhost/mypage/materials/new/process_bag.php?path_name=". $pathAndName);
				$result_path4 = file_get_contents("http://nakame_ec.localhost/mypage/materials/new/process_phone.php?path_name=". $pathAndName);
				$result_path5 = file_get_contents("http://nakame_ec.localhost/mypage/materials/new/process_shirt1.php?path_name=". $pathAndName);
				
				$this->img_shirt = "my_shirt.jpg";
				$this->img_cup = "my_cup.jpg";
				$this->img_bag = "my_bag.jpg";
				$this->img_phone = "my_phone.jpg";
    			
				
    			break;
			case 'itemsave':
				$shirt = $_POST['shirts'];
				$cup = $_POST['cup'];
				$bag = $_POST['bag'];
				$phone = $_POST['phone'];
				$mainimg = $_POST['test'];
				
				$shirt_stat = $_POST['shirt_stat'];
				$bag_stat = $_POST['bag_stat'];
				$mug_stat = $_POST['mug_stat'];
				$phone_stat = $_POST['phone_stat'];
				
				$arr = array($shirt,$cup,$bag,$phone);
				$arr2 = array($shirt_stat, $bag_stat, $mug_stat, $phone_stat);
				
				for($i=0;$i<=3;$i++){
					$ray = $arr[$i];
					$stats = $arr2[$i];
					$customer_id = $objCustomer->getvalue('customer_id');
					
					$objProduct = new SC_Product_Ex();
					
					$objQuery =& SC_Query_Ex::getSingletonInstance();
		
					$product_id = $objQuery->nextVal('dtb_products_product_id');
					
					$sqlval['product_id'] = $product_id;
					$sqlval['customer_id'] = $customer_id;
					$sqlval['note'] = $mainimg;
					$sqlval['main_list_image'] = $ray;
					$sqlval['status'] = $stats;
					
					$sql = $objQuery->insert('dtb_products', $sqlval);
				}
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
