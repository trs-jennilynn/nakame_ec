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
		
		$this->note = $objFormParam->getValue('note');
		
		switch ($this->getMode()) {
			case 'load':
				$objFormParam = new SC_FormParam_Ex();
				$customer_id = $objCustomer->getvalue('customer_id');
				
				$objProduct = new SC_Product_Ex();
				$main_img = $_FILES['material-texture']['name'];
				$objQuery =& SC_Query_Ex::getSingletonInstance();
				
				$product_id = $objQuery->nextVal('dtb_products_product_id');
				
				$sqlval['product_id'] = $product_id;
				$sqlval['customer_id'] = $customer_id;
				$sqlval['note'] = $main_img;
				
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
    			 
    			 
    			 
    			 
    			/* 
    			// Content type
    			header('Content-Type: image/jpeg');
    			 
    			// Get new dimensions
    			list($width, $height) = getimagesize($filename);
    			$new_width = $width / 5;
    			$new_height = $height /5;
    			$dest = imagecreatefrompng('photos/shirt.png');
    			// Resample
    			$image_p = imagecreatetruecolor($new_width, $new_height);
    			$image = imagecreatefrompng($filename);
    			imagecopyresampled($dest, $image, 180, 110, 0, 0, $new_width, $new_height, $width, $height);
    			 
    			// Output
    			$quality = 90;
    			imagejpeg($dest, "my_image.jpeg");
    			 
    			// Free up memory
    			//imagedestroy($dest);
    			*/
    			break;
			case 'itemsave':
				
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
