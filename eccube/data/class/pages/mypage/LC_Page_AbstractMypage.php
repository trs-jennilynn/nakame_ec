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
        
        if ($objCustomer->isLoginSuccess(true) === false and $_GET['cust_id']) {
           $res = $_GET['cust_id'];
           
           $objQuery =& SC_Query_Ex::getSingletonInstance();
           $col = 'customer_id,name01,name02,kana01,kana02,zip01,zip02';
           $from = 'dtb_customer';
           $where = 'customer_id='.$res;
           $public = $objQuery->select($col, $from, $where,'','');
           
           $this->name1 = $public[0]['name01'];
           $this->name2 = $public[0]['name02'];
           $this->kana1 = $public[0]['kana01'];
           $this->kana2 = $public[0]['name02'];
           $this->zip1 = $public[0]['zip01'];
           $this->zip2 = $public[0]['zip02'];
        }elseif($objCustomer->isLoginSuccess(true) === false){
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
                $(document).ready(function(){
                	 var test=0;
             		$('#header-dropzone').find('.edit-header-icon').click(function(){
             		$('#background_input').trigger('click');
             		test=1;
             		});
             		$('#header-dropzone').find('.container').find('.profile-content').find('.edit-avatar-icon').click(function(){
             		$('#background_input').trigger('click');
             		test=2;
             		});
             		$('#header-dropzone').find('.container').find('.profile-content').find('.profile-avatar').click(function(){
             		$('#background_input').trigger('click');
             		test=2;
             		});

             		
             		$('#background_input').live('change',function(){
             			if(test==1){
             				$('.uploaded').trigger('click');
             			}else{
             				$('.uploaded2').trigger('click');
             			}
             		});
             		
             		$("#edit-profile").click(function(){
             		$("#user-profile-editor").show();
             		});
             		
             		$(".btn-editor-close").click(function(){
             		$("#user-profile-editor").hide();
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
