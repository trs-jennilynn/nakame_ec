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
 * @version $Id: LC_Page_Mypage_Favorite.php 22796 2013-05-02 09:11:36Z h_yoshimoto $
 */
class LC_Page_MyPage_Favorite extends LC_Page_AbstractMypage_Ex {

    // {{{ properties

    /** ページナンバー */
    var $tpl_pageno;
	var $cartSession;
    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_subtitle = 'お気に入り一覧';
        $this->tpl_mypageno = 'favorite';
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

        $objProduct  = new SC_Product_Ex();
        $objCustomer = new SC_Customer_Ex();
        $customer_id = $objCustomer->getValue('customer_id');
        
        $objFormParam = new SC_FormParam_Ex();
        
        SC_Helper_Customer_Ex::sfCustomerEntryParam($objFormParam);
        $objFormParam->setParam($_POST);
        
        

        switch ($this->getMode()) {
            case 'delete_favorite':
                // お気に入り削除
                $this->lfDeleteFavoriteProduct($customer_id, intval($_POST['product_id']));
                break;
            case 'getList':
                // スマートフォン版のもっと見るボタン用
                // ページ送り用
                if (isset($_POST['pageno'])) {
                    $this->tpl_pageno = intval($_POST['pageno']);
                }
                $this->arrFavorite = $this->lfGetFavoriteProduct($customer_id, $this);
                $this->arrFavorite = $objProduct->setPriceTaxTo($this->arrFavorite);


                echo SC_Utils_Ex::jsonEncode($this->arrFavorite);
                SC_Response_Ex::actionExit();
                break;
                
                echo $_POST['product_id'];
        }

        // ページ送り用
        if (isset($_POST['pageno'])) {
            $this->tpl_pageno = intval($_POST['pageno']);
        }
        $this->arrFavorite = $this->lfGetFavoriteProduct($customer_id, $this);
        // 1ページあたりの件数
        $this->dispNumber = SEARCH_PMAX;

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

    /**
     * お気に入りを取得する
     *
     * @param mixed $customer_id
     * @param mixed $objPage
     * @access private
     * @return array お気に入り商品一覧
     */
    function lfGetFavoriteProduct($customer_id, &$objPage) {
        $objQuery       = SC_Query_Ex::getSingletonInstance();
        $objProduct     = new SC_Product_Ex();

        $objQuery->setOrder('create_date DESC');
        $where = 'customer_id = ?';
        if (NOSTOCK_HIDDEN) {
            $where .= ' AND EXISTS(SELECT * FROM dtb_products_class WHERE product_id = dtb_customer_favorite_products.product_id AND product_id = dtb_products.product_id AND del_flg = 0 AND (stock >= 1 OR stock_unlimited = 1))';
        }
      //  $arrProductId  = $objQuery->getcol('dtb_customer_favorite_products.product_id', 'dtb_customer_favorite_products', $where, $customer_id);
        $arrProductId  = $objQuery->getcol('dtb_customer_favorite_products.product_id', 'dtb_customer_favorite_products', $where, $customer_id);
        $arrCustomerId = $objQuery->getcol('dtb_customer_favorite_products.customer_id', 'dtb_customer_favorite_products', $where, $customer_id);//echo 'dtb_customer_favorite_products.product_id', 'dtb_customer_favorite_products join dtb_products on dtb_products.product_id = dtb_customer_favorite_products.product_id', $where, $customer_id;
     	
        $objQuery       =& SC_Query_Ex::getSingletonInstance();
        $objQuery->setWhere($this->lfMakeWhere('alldtl.', $arrProductId));
        $linemax        = $objProduct->findProductCount($objQuery);
        $objPage->tpl_linemax = $linemax;   // 何件が該当しました。表示用
        //print_r($objPage->tpl_linemax);
        // ページ送りの取得
        $objNavi        = new SC_PageNavi_Ex($objPage->tpl_pageno, $linemax, SEARCH_PMAX, 'fnNaviPage', NAVI_PMAX);
        $this->tpl_strnavi = $objNavi->strnavi; // 表示文字列
        $startno        = $objNavi->start_row;

        $objQuery       =& SC_Query_Ex::getSingletonInstance();
        //$objQuery->setLimitOffset(SEARCH_PMAX, $startno);
        // 取得範囲の指定(開始行番号、行数のセット)
        /*($arrProductId  = array_slice($arrProductId, $startno, SEARCH_PMAX));
		($arrCustomerId = array_slice($arrCustomerId, $startno, SEARCH_PMAX));
        $where = $this->lfMakeWhere('', $arrProductId);
        $where .= ' AND del_flg = 0';
        $objQuery->setWhere($where, $arrProductId);
        $arrProducts = $objProduct->lists($objQuery);
		
        //取得している並び順で並び替え
        $arrProducts2 = array();
        foreach ($arrProducts as $item) {
            $arrProducts2[$item['product_id']] = $item;
        }
        
        $arrProductsList = array();
        foreach ($arrProductId as $product_id) {
            $arrProductsList[] = $arrProducts2[$product_id];
        }
		$arrProductsList;
        // 税込金額を設定する
        SC_Product_Ex::setIncTaxToProducts($arrProductsList);
		
        return $arrProductsList;
		*/
        $col = 'T1.product_id, T1.name, T2.num_of_likes, T3.zip02, T3.name01, T3.customer_id, T1.main_list_image, T4.price02';
        $table = 'dtb_products AS T1 JOIN dtb_customer_favorite_products AS T2 ON T1.product_id = T2.product_id JOIN dtb_customer AS T3 ON T1.customer_id = T3.customer_id JOIN dtb_products_class AS T4 ON T1.product_id = T4.product_id';
        $where = 'T2.customer_id ='.$customer_id.' group by T1.product_id';
        //print_r($where);
        //$objQuery->setOrder('total');
        //$objQuery->setLimit(RECOMMEND_NUM);
        $arrFavProducts = $objQuery->select($col, $table, $where);

        $price = $arrFavProducts[0]['price02'];
        $tax = SC_Helper_DB_Ex::sfTax($price);

        $objQuery =& SC_Query_Ex::getSingletonInstance();
        if (count($arrFavProducts) > 0) {
        	// 商品一覧を取得
        	// where条件生成&セット
        	$arrProductId = array();
        	$where = 'product_id IN (';
        	foreach ($arrFavProducts as $key => $val) {
        		$arrProductId[] = $val['product_id'];
        		$arrProductId[] = $val['price02'] + $tax;
        	//print_r($arrProductId);	
        	}
        	// 取得
        	$arrProductList = $objProduct->getListByProductIds($objQuery, $arrProductId);
        
        	// おすすめ商品情報にマージ
        	foreach ($arrFavtProducts as $key => $value) {
        		$arrRow =& $arrFavProducts[$key];
        
        		if (isset($arrProductList[$arrRow['product_id']])) {
        			$arrRow = array_merge($arrRow, $arrProductList[$arrRow['product_id']]);
        
        		} else {
        			// 削除済み商品は除外
        			unset($arrFavProducts[$key]);
        		}
        	}
        }
       // print_r($arrFavProducts);
        return $arrFavProducts;
     //   print_r($arrFavProducts);
        return $arrProductId['price02'];
    }

    /* 仕方がない処理。。 */
    function lfMakeWhere($tablename, $arrProductId) {

        // 取得した表示すべきIDだけを指定して情報を取得。
        $where = '';
        $tablename;
        if (is_array($arrProductId) && !empty($arrProductId)) {
            $where = $tablename . 'product_id IN (' . implode(',', $arrProductId) . ')';
        } else {
            // 一致させない
            $where = '0<>0';
        }
        return $where;
    }

    // お気に入り商品削除
    function lfDeleteFavoriteProduct($customer_id, $product_id) {
        $objQuery =& SC_Query_Ex::getSingletonInstance();

        $exists = $objQuery->exists('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($customer_id, $product_id));

        if ($exists) {
            $objQuery->delete('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($customer_id, $product_id));
        }
    }
}
