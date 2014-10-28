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
 * Mypage の基底クラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id$
 */
class LC_Page_AbstractMypage extends LC_Page_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        // mypage 共通
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
            $this->CustomerPoint = $objCustomer->getvalue('point');
            $this->action();
        }


        $this->sendResponse();
        
   ?>
  <script type="text/javascript">
        <!--
        
        //-->
        //$('.needsclick').click(function(){
        //alert('js is working');
        //});
        $('#header-dropzone').find('.edit-header-icon').click(function(){
         $('#user-profile-header').trigger('click');
        });
        $('#header-dropzone').find('.container').find('.profile-content').find('.edit-avatar-icon').click(function(){
         $('#user-profile-header').trigger('click');
        });
        $('#header-dropzone').find('.container').find('.profile-content').find('.profile-avatar').click(function(){
         $('#user-profile-header').trigger('click');
        });
  $('#user-profile-header').live('change', function(){
   var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '')
      alert(file_name);

   $("#uploadimg")[0].onclick();
   
  });
  
        $("#edit-profile").click(function(){
      $("#user-profile-editor").show();
     });
     
     $(".btn-editor-close").click(function(){
      $("#user-profile-editor").hide();
     });

      $('#user-profile-header').die('click').live('change', function(){ 
            //$("#preview").html('');
     
  $("#prof_bg").ajaxForm({target: '#prof_bg',
       beforeSubmit:function(){ 
   
   console.log('v');
   $("#imageloadstatus").show();
    $("#imageloadbutton").hide();
    },
   success:function(){ 
   console.log('z');
    $("#imageloadstatus").hide();
    $("#imageloadbutton").show();
   },
   error:function(){ 
     console.log('d');
    $("#imageloadstatus").hide();
   $("#imageloadbutton").show();
   } }).submit();
   

 });
  </script>
  
<?php
               
    }
    /**
     * Page のAction.
     *
     * @return void
     */
    function action() {
    
    	$objCustomer = new SC_Customer_Ex();
    	$customer_id = $objCustomer->getvalue('customer_id');
    
    	$objFormParam = new SC_FormParam_Ex();
    
    	SC_Helper_Customer_Ex::sfCustomerEntryParam($objFormParam);
    	$objFormParam->setParam($_POST);
    	$arrForm  = $objFormParam->getHashArray();
    	$objCookie = new SC_Cookie_Ex();
    	$objFormParam->convParam();
    	
    	
 
    		switch ($this->getMode()) {
    			case 'bgupload':
    				echo '<script>alert("vvv");</script>';
    				$objQuery = SC_Query_Ex::getSingletonInstance();
    				$objQuery->update('dtb_customer',
    						array('zip01' => $zip),
    						'customer_id = ?', array($customer_id));
    				$objCustomer->updateSession();
    				break;
    			default:
    				//echo '<script>alert("bbb");</script>';
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
