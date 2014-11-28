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
 * @version $Id: LC_Page_Materials.php 23230 2013-09-19 02:49:03Z m_uehara $
 */
class LC_Page_Materials extends LC_Page_Ex
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
         
        ?>
            			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            	    	<script type="text/javascript">
            	    	$(document).ready(function(){
        	    			/*$('.materials').find('.material').mouseover(function(){
        	    				$('.material').find('.deldiv').css({
        		    				display: 'block',
        		    				width: '100%',
        		    				height: '100%',
        		    				display: 'block',
        		    				background: 'rgba(255, 164, 60, 0.270588)',
        		    				position: 'absolute'
        		    			});
        	        		});
        	    			$('.materials').find('.material').mouseout(function(){
        	    				$('.material').find('.deldiv').css('display','none');
        		    		});*/
            	        });
            	    	</script>
            	    	<?php
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    public function action()
    {
    	
    	$objCartSess = new SC_CartSession_Ex();
    	$this->cartItems = $objCartSess->getAllCartList();
    	 
    	$this->tpl_count = count($this->cartItems = $objCartSess->getAllCartList());
    	
    	$objCustomer = new SC_Customer_Ex();
    	$cus_id = $objCustomer->getvalue('customer_id');
    	
    	
    	$this->arrdesigns = $this->ifgetdesign($cus_id);
    	
    	//echo $_POST['id'];
    	
    	switch ($this->getMode()){
    		case 'delete':
    			$id = $_POST['id'];
    			$objQuery =& SC_Query_Ex::getSingletonInstance();
    			$sql = $objQuery->delete('dtb_products','product_id=?',array($id));
    			header('Location: '.$_SERVER['PHP_SELF']);
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
    
    
    function ifgetdesign($cus_id){
    	$objQuery =& SC_Query_Ex::getSingletonInstance();
 
		$arrdesigns = $objQuery->select('product_id,name,note', 'dtb_products','status=2 and customer_id=?', array($cus_id));
		
		return $arrdesigns; 
    }
}
