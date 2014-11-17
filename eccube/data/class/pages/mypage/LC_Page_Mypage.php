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
require_once CLASS_EX_REALDIR . 'page_extends/mypage/LC_Page_AbstractMypage_Ex.php';

/**
 * MyPage のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Mypage.php 22796 2013-05-02 09:11:36Z h_yoshimoto $
 */
class LC_Page_MyPage extends LC_Page_AbstractMypage_Ex {

    // {{{ properties
	
    /** ページナンバー */
    var $tpl_pageno;

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_mypageno = 'index';
        if (SC_Display_Ex::detectDevice() === DEVICE_TYPE_MOBILE) {
            $this->tpl_subtitle = 'MYページ';
        } else {
            $this->tpl_subtitle = '購入履歴一覧';
        }
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrCustomerOrderStatus = $masterData->getMasterData('mtb_customer_order_status');

        $this->httpCacheControl('nocache');
        
       
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
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
       	
       	$objCartSess = new SC_CartSession_Ex();
       	$this->cartItems = $objCartSess->getAllCartList();
       	
       	
       	
       	$this->tpl_count = count($this->cartItems = $objCartSess->getAllCartList());
       	
        $objCookie = new SC_Cookie_Ex();
       	$objCustomer->updateSession();
       	
        $this->tpl_login=true;
        $this->tpl_name1 = $objCustomer->getvalue('name01');
     	$this->tpl_name2 = $objCustomer->getvalue('name02');
		$this->tpl_kana1 = $objCustomer->getvalue('kana01');
        $this->tpl_kana2 = $objCustomer->getvalue('kana02');
        $this->tpl_zip01 = $objCustomer->getvalue('zip01');
        $this->tpl_zip02 = $objCustomer->getvalue('zip02');
        
        $name = $_POST['userdisplayName'];
        $web = $_POST['userprofileurl'];
        $commentbody = $_POST['userprofilebody'];
        
        //ページ送り用
        $this->objNavi = new SC_PageNavi_Ex($_REQUEST['pageno'],
                                            $this->lfGetOrderHistory($customer_id),
                                            SEARCH_PMAX,
                                            'fnNaviPage',
                                            NAVI_PMAX,
                                            'pageno=#page#',
                                            SC_Display_Ex::detectDevice() !== DEVICE_TYPE_MOBILE);

        $this->arrOrder = $this->lfGetOrderHistory($customer_id, $this->objNavi->start_row);
        
        switch ($this->getMode()) {
            case 'getList':
                echo SC_Utils_Ex::jsonEncode($this->arrOrder);
                SC_Response_Ex::actionExit();
                break;
             case 'saveprof':
             	$objQuery = SC_Query_Ex::getSingletonInstance();
             	$result = $objQuery->update('dtb_customer',
             			array('name02' => $name,'kana01' => $web, 'kana02' => $commentbody),
             			'customer_id = ?', array($customer_id));
             	$objCustomer->updateSession();
             	$this->tpl_name1 = $objCustomer->getvalue('name01');
             	$this->tpl_name2 = $objCustomer->getvalue('name02');
             	$this->tpl_kana1 = $objCustomer->getvalue('kana01');
             	$this->tpl_kana2 = $objCustomer->getvalue('kana02');
             	break;
             case 'キャンセル':
             	$objCustomer->updateSession();
             	break;
             case 'bgs':
             	$zip01 = $_FILES['background_input']['name'];
             	$objQuery = SC_Query_Ex::getSingletonInstance();
             	$result = $objQuery->update('dtb_customer',
             			array('zip01' => $zip01),
             			'customer_id = ?', array($customer_id));
             	
             	//print_r($_FILES);
             	$tmp = $_FILES['background_input']['tmp_name'];
             	
             	$fileName = $_FILES["background_input"]["name"];
             	$fileTmpLoc = $_FILES["background_input"]["tmp_name"];
             	// Path and file name
             	$pathAndName =  "../upload/mypage/background/".$fileName;
             	
             	// Run the move_uploaded_file() function here
             	$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
             	
             	$objCustomer->updateSession();
             	$this->tpl_zip01 = $objCustomer->getvalue('zip01');
             	break;
             case 'bgs2':
             	$zip02 = $_FILES['background_input']['name'];
             	$objQuery = SC_Query_Ex::getSingletonInstance();
             	$result = $objQuery->update('dtb_customer',
             			array('zip02' => $zip02),
             			'customer_id = ?', array($customer_id));
             	
             	//print_r($_FILES);
             	$tmp = $_FILES['background_input']['tmp_name'];
             	
             	$fileName = $_FILES["background_input"]["name"];
             	$fileTmpLoc = $_FILES["background_input"]["tmp_name"];
             	// Path and file name
             	$pathAndName =  "../upload/mypage/profile/".$fileName;
             	
             	// Run the move_uploaded_file() function here
             	$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
             	
             	$objCustomer->updateSession();
             	$this->tpl_zip02 = $objCustomer->getvalue('zip02');
             	break;
            default:
                break;
        }
        // 支払い方法の取得
        $this->arrPayment = SC_Helper_DB_Ex::sfGetIDValueList('dtb_payment', 'payment_id', 'payment_method');
        // 1ページあたりの件数
        $this->dispNumber = SEARCH_PMAX;
        
        //$this->arrGetProducts = $this->lfGetproduct($cs);
        /**get display items designed by specific user **/
       /*  $objQuery =& SC_Query_Ex::getSingletonInstance();
        $cols = 't2.product_id, SUM(t3.num_of_likes) as total, t4.customer_id';
        $tables = 'dtb.products as t2 join dtb_customer_favorite_products as t3 on t2.product_id = t3.product_id join dtb_customer on t2.customer_id = t4.customer_id';
        $wheres = 't4.customer_id = 37 group by t3.product_id';
        $getproducts = $objQuery->select($cols, $tables, $wheres,'',''); */
    	
     //   $this->arrGetProducts = $this->lfGetproduct();
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }

    /**
     * 受注履歴を返す
     *
     * @param mixed $customer_id
     * @param mixed $startno 0以上の場合は受注履歴を返却する -1の場合は件数を返す
     * @access private
     * @return void
     */
    function lfGetOrderHistory($customer_id, $startno = -1) {
        $objQuery   = SC_Query_Ex::getSingletonInstance();

        $col        = 'order_id, create_date, payment_id, payment_total, status';
        $from       = 'dtb_order';
        $where      = 'del_flg = 0 AND customer_id = ?';
        $arrWhereVal = array($customer_id);
        $order      = 'order_id DESC';

        if ($startno == -1) {
            return $objQuery->count($from, $where, $arrWhereVal);
        }

        $objQuery->setLimitOffset(SEARCH_PMAX, $startno);
        // 表示順序
        $objQuery->setOrder($order);

        //購入履歴の取得
        return $objQuery->select($col, $from, $where, $arrWhereVal);
    }
    /**
     * おすすめ商品検索.
     *
     * @return array $arrGetProducts 検索結果配列
     */
     function lfGetproduct($customer_id) {
    	$objQuery =& SC_Query_Ex::getSingletonInstance();
    	$objProduct = new SC_Product_Ex();
    	// おすすめ商品取得
    	
    	$objQuery =& SC_Query_Ex::getSingletonInstance();
        $cols = 'T2.product_id,T3.SUM(num_of_likes) as total, T4.zip02, T4.name01, T4.customer_id';
        $tables = 'dtb_products as T2 JOIN dtb_customer_favorite_products as T3 ON T3.product_id = T2.product_id JOIN dtb_customer as T4 ON T2.customer_id = T4.customer_id';
        $wheres = 'T2.status = 1 and T2.customer_id = '.$customer_id.' group by T3.product_id';
        $arrGetProducts = $objQuery->select($cols, $tables, $wheres);
    
    	$objQuery =& SC_Query_Ex::getSingletonInstance();
    	if (count($arrGetProducts) > 0) {
    		// 商品一覧を取得
    		// where条件生成&セット
    		$arrProductId = array();
    		$where = 'product_id IN (';
    		foreach ($arrGetProducts as $key => $val) {
    			$arrProductId[] = $val['product_id'];
    		}
    		// 取得
    		$arrProductList = $objProduct->getListByProductIds($objQuery, $arrProductId);
    
    		// おすすめ商品情報にマージ
    		foreach ($arrGetProducts as $key => $value) {
    			$arrRow =& $arrGetProducts[$key];
    
    			if (isset($arrProductList[$arrRow['product_id']])) {
    				$arrRow = array_merge($arrRow, $arrProductList[$arrRow['product_id']]);
    
    			} else {
    				// 削除済み商品は除外
    				unset($arrGetProducts[$key]);
    			}
    		}
    	}
    	return $arrGetProducts;
    }
}
