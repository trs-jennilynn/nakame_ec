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
require_once CLASS_EX_REALDIR . 'page_extends/frontparts/bloc/LC_Page_FrontParts_Bloc_Ex.php';

/**
 * Recommend のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_FrontParts_Bloc_Best5 - Copy.php -1   $
 */
class LC_Page_FrontParts_Bloc_Recommend extends LC_Page_FrontParts_Bloc_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
    	
        $this->action();
        $this->sendResponse();
       
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {

    	$objCustomer = new SC_Customer_Ex();
    	$customer_id = $objCustomer->getvalue('customer_id');
    	
    	$objFormParam = new SC_FormParam_Ex();
    	
    	SC_Helper_Customer_Ex::sfCustomerEntryParam($objFormParam);
    	$objFormParam->setParam($_POST);
    	
    	$objCustomer->updateSession();
    	
    	$this->isLogin = $objCustomer->isLoginSuccess(true);
    	
    	$favorite_product_id = $_POST['favorite_product_id'];
    	
    	 if ($objCustomer->isLoginSuccess() === true) {
    		//お気に入りボタン表示
    			$this->tpl_login = true;
    			SC_Helper_DB_Ex::sfDataExists('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($objCustomer->getValue('customer_id'), $product_id));
    	}else{
    			$this->tpl_login = false;
    			$customer_id = 0;
    			SC_Helper_DB_Ex::sfDataExists('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($customer_id, $product_id));
    	}
        // 基本情報を渡す
        $objSiteInfo = SC_Helper_DB_Ex::sfGetBasisData();
        $this->arrInfo = $objSiteInfo->data;
        //おすすめ商品表示
        $this->arrBestProducts = $this->lfGetRanking();
        //$this->numoflike = $this->getLikes();
        
        
        switch ($this->getMode()) {
        	
        	case 'fav_like':
        		
        		$objQuery =& SC_Query_Ex::getSingletonInstance();
        		$exists = $objQuery->exists('dtb_customer_favorite_products', 'customer_id = ? AND product_id = ?', array($customer_id, $favorite_product_id));
        		if (!$exists){
        			
        			
        			
        			$sqlval['customer_id'] = $customer_id;
        			$sqlval['product_id'] = $favorite_product_id;
        			$sqlval['update_date'] = 'CURRENT_TIMESTAMP';
        			$sqlval['create_date'] = 'CURRENT_TIMESTAMP';
        			$sqlval['num_of_likes'] = 1;
        		
        			$objQuery->begin();
        			$objQuery->insert('dtb_customer_favorite_products', $sqlval);
        			$objQuery->commit();
        			
        			header("Location: ".$_SERVER['PHP_SELF']);
        		}else{
        			$objQuery =& SC_Query_Ex::getSingletonInstance();
        			$col = 'num_of_likes';
        			$from = 'dtb_customer_favorite_products';
        			$where = 'customer_id='.$customer_id . " and ". 'product_id='.$favorite_product_id;
        			$numoflike = $objQuery->select($col, $from, $where,'','');
        			
        			$likes = $numoflike[0]['num_of_likes'];
        			
        			
        			$likenum = $likes +1;
        			$date = 'CURRENT_TIMESTAMP';
        			$result = $objQuery->update('dtb_customer_favorite_products',
        					  array('num_of_likes' => $likenum, 'update_date' => $date),
        					'customer_id = ? AND product_id = ?', array($customer_id, $favorite_product_id));
        			header("Location: ".$_SERVER['PHP_SELF']);
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

    /**
     * おすすめ商品検索.
     *
     * @return array $arrBestProducts 検索結果配列
     */
    function lfGetRanking() {
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        $objProduct = new SC_Product_Ex();

        // おすすめ商品取得
        $col = 'T2.product_id,SUM(T3.num_of_likes) as total, T4.zip02, T4.name01, T4.customer_id';
        $table = 'dtb_products as T2 JOIN dtb_customer_favorite_products as T3 ON T3.product_id = T2.product_id JOIN dtb_customer as T4 ON T2.customer_id = T4.customer_id';
        $where = 'T2.status = 1 group by T3.product_id';
        //$objQuery->setOrder('total');
        $objQuery->setLimit(RECOMMEND_NUM);
        $arrBestProducts = $objQuery->select($col, $table, $where);
        
      //echo  $likes = $arrBestProducts[0]['num_of_likes'];
        $objQuery =& SC_Query_Ex::getSingletonInstance();
        if (count($arrBestProducts) > 0) {
            // 商品一覧を取得
            // where条件生成&セット
            $arrProductId = array();
            $where = 'product_id IN (';
            foreach ($arrBestProducts as $key => $val) {
            $arrProductId[] = $val['product_id'];
            }
            // 取得
            $arrProductList = $objProduct->getListByProductIds($objQuery, $arrProductId);
            
            // おすすめ商品情報にマージ
            foreach ($arrBestProducts as $key => $value) {
                $arrRow =& $arrBestProducts[$key];
              
                if (isset($arrProductList[$arrRow['product_id']])) {
                    $arrRow = array_merge($arrRow, $arrProductList[$arrRow['product_id']]);
                    
                } else {
                    // 削除済み商品は除外
                    unset($arrBestProducts[$key]); 
                }
            }
        }
        return $arrBestProducts;
    }
}
