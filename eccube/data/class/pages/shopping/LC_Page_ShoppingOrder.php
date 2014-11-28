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
 * ショッピングログインのページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_ShoppingOrder.php 22876 2013-06-24 01:43:03Z m_uehara $
 */
class LC_Page_ShoppingOrder extends LC_Page_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrProductType = $masterData->getMasterData('mtb_product_type');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        parent::process();
        $this->action();
        $this->sendResponse();
        
        ?>
                <script type="text/javascript">
                $(document).ready(function(){
                	//#shipping-address-lastName
                	$('#shipping-address-lastName').keyup(function(e){
                    	
                    	if (event.keyCode == 8 || event.keyCode == 46) {
                			if($('#shipping-address-lastName').val().length < 1){
                				$('#shipping-address-lastName').attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$('#shipping-address-lastName').attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($('#shipping-address-lastName').val().length <= 0){
                				$('#shipping-address-lastName').css({"backgroundColor":"#F9E1E1"});
                			}
                			else if($('#shipping-address-lastName').val().length < 0){
                				$('#shipping-address-lastName').attr("style","background-color: #F9E1E1 !important");
                			}
                			else if($('#shipping-address-lastName').val().length > 0){
                				$('#shipping-address-lastName').attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                	});
                	//#shipping-address-firstName
        			$('#shipping-address-firstName').keyup(function(e){
                    	
                    	if (event.keyCode == 8 || event.keyCode == 46) {
                			if($('#shipping-address-firstName').val().length < 1){
                				$('#shipping-address-firstName').attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$('#shipping-address-firstName').attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($('#shipping-address-firstName').val().length <= 0){
                				$('#shipping-address-firstName').css({"backgroundColor":"#F9E1E1"});
                			}
                			else if($('#shipping-address-firstName').val().length < 0){
                				$('#shipping-address-firstName').attr("style","background-color: #F9E1E1 !important");
                			}
                			else if($('#shipping-address-firstName').val().length > 0){
                				$('#shipping-address-firstName').attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                	});
        			//#shipping-address-zipCode
        			$('#shipping-address-zipCode').keyup(function(e){
        				//$(this).ForceNumericOnly();
                    	if (event.keyCode == 8 || event.keyCode == 46) {
                			if($('#shipping-address-zipCode').val().length < 8){
                				$('#shipping-address-zipCode').attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$('#shipping-address-zipCode').attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($('#shipping-address-zipCode').val().length < 8){
                				$('#shipping-address-zipCode').attr("style","background-color: #F9E1E1 !important");
                			}
                			else if($('#shipping-address-zipCode').val().length == 8){
                				$('#shipping-address-zipCode').attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                    	var inp =  $('#shipping-address-zipCode').val();
        		        if(inp.length == 3){
        		            $('#shipping-address-zipCode').val(inp + '-');
        		        }
        				  $(this).val(foo);
        			});
                    	
                	//#shipping-address-prefectureCode
                	//#shipping-address-input > div > div > div:nth-child(4) > div > div.clearfix > span > span
                	$('#shipping-address-prefectureCode').live('change',function(){
                		if($(this).find(':selected').text() == '都道府県'){
                    			$('.selectbox-value').css({'background': '#F9E1E1 url(//dijsur42hqnz1.cloudfront.net/assets/common/select-arrow-954fd03dfa1ebbbaf41fc0631d6498b0.png) right no-repeat'});
                			}else{
                				$('.selectbox-value').css({'background': '#DFF0D8 url(//dijsur42hqnz1.cloudfront.net/assets/common/select-arrow-954fd03dfa1ebbbaf41fc0631d6498b0.png) right no-repeat'});
        					}
                	});
                	//#shipping-address-address1
                	$('#shipping-address-address1').keyup(function(e){
                		if (event.keyCode == 8 || event.keyCode == 46) {
                			if($(this).val().length < 1){
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($(this).val().length < 0){
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                	});
                	//#shipping-address-address2
                	$('#shipping-address-address2').keyup(function(e){
                    	
                		if (event.keyCode == 8 || event.keyCode == 46) {
                			if($(this).val().length < 1){
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($(this).val().length < 0){
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                	});
                	//#shipping-address-phone
                	$('#shipping-address-phone').keyup(function(e){
                		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        					return false();
                		}
                	});
                	//#shipping-address-phone
                	$('#shipping-address-phone').keyup(function(e){
                		if (event.keyCode == 8 || event.keyCode == 46) {
                			if($(this).val().length < 10 || $(this).val().length > 11){
                    			//alert('1');
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				//alert('2');
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}else{
                			if($(this).val().length < 10 || $(this).val().length > 11){
                				//alert('3');
                				$(this).attr("style","background-color: #F9E1E1 !important");
                			}
                			else{
                				//alert('4');
                				$(this).attr("style","background-color: #DFF0D8 !important");
                			}
                		}
                	});
                });
        		</script>
                <?php
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function action() {
    	
    	$objCartSess = new SC_CartSession_Ex();
    	$objSiteSess = new SC_SiteSession_Ex();
    	$objCustomer = new SC_Customer_Ex();
    	$customer_id = $objCustomer->getvalue('customer_id');
    	
    	
    	$objQuery =& SC_Query_Ex::getSingletonInstance();
    	$cols = '*';
    	$tables = 'dtb_customer';
    	$wheres = 'customer_id ='.$customer_id;
    	$arrGetCustomer = $objQuery->select($cols, $tables, $wheres);
    	
    	
    	//+print_r($arrGetCustomer);
    	//echo $arrGetCustomer['customer_id'];
    	$this->email = $arrGetCustomer[0]['email'];
    	$this->names1 = $arrGetCustomer[0]['name03'];
    	$this->names2 = $arrGetCustomer[0]['name04'];
    	$this->zipz = $arrGetCustomer[0]['zip03'];
    	$this->address_code = $arrGetCustomer[0]['addr_code'];
    	$this->address1 = $arrGetCustomer[0]['addr01'];
    	$this->address2 = $arrGetCustomer[0]['addr02'];
    	$this->address3 = $arrGetCustomer[0]['addr03'];
    	$this->phones = $arrGetCustomer[0]['tel01'];
    	$this->emails = $arrGetCustomer[0]['email'];
    	$this->card_number = $arrGetCustomer[0]['card_number'];
    	$this->card_expired = $arrGetCustomer[0]['card_expired'];
    	$this->card_code = $arrGetCustomer[0]['card_code'];
    	
    // モバイル対応
        if (SC_Display_Ex::detectDevice() == DEVICE_TYPE_MOBILE) {
            if (isset($_GET['cart_no'])) {
                $objFormParam->setValue('cart_no', $_GET['cart_no']);
            }
            if (isset($_GET['cartKey'])) {
                $objFormParam->setValue('cartKey', $_GET['cartKey']);
            }
        }

        $this->cartKeys = $objCartSess->getKeys();
        foreach ($this->cartKeys as $key) {
            // 商品購入中にカート内容が変更された。
            if ($objCartSess->getCancelPurchase($key)) {
                $this->tpl_message .= "商品購入中にカート内容が変更されましたので、お手数ですが購入手続きをやり直して下さい。\n";
            }
        }
        $this->arrInfo = SC_Helper_DB_Ex::sfGetBasisData();
        $totalIncTax = 0;
    	foreach ($this->cartKeys as $key) {
    		// カート集計処理
    		$this->tpl_message .= $objCartSess->checkProducts($key);
    		$this->tpl_total_inctax[$key] = $objCartSess->getAllProductsTotal($key);
    		$totalIncTax += $this->tpl_total_inctax[$key];
    		$this->tpl_total_tax[$key] = $objCartSess->getAllProductsTax($key);
    		// ポイント合計
    		$this->tpl_total_point[$key] = $objCartSess->getAllProductsPoint($key);
    	
    		$this->arrData[$key] = $objCartSess->calculate($key, $objCustomer);
    	
    		// 送料無料チェック
    		$this->arrData[$key]['is_deliv_free'] = $objCartSess->isDelivFree($key);
    	
    		// 送料無料までの金額を計算
    		$this->tpl_deliv_free[$key] = $this->arrInfo['free_rule'] - $this->tpl_total_inctax[$key];
    	}
    	
    	// 前頁のURLを取得
    	// TODO: SC_CartSession::setPrevURL()利用不可。
    	$this->lfGetCartPrevUrl($_SESSION,$_SERVER['HTTP_REFERER']);
    	$this->tpl_prev_url = (isset($_SESSION['cart_prev_url'])) ? $_SESSION['cart_prev_url'] : '';
    	
    	// すべてのカートの内容を取得する
    	$this->cartItems = $objCartSess->getAllCartList();
    	
    	$this->tpl_count = count($this->cartItems = $objCartSess->getAllCartList());
    	
    	switch ($this->getMode()){
    		case 'cartt':
    			$objQuery =& SC_Query_Ex::getSingletonInstance();
    			
    			//echo $order_id = $objQuery->nextVal('dtb_order_order_id');
    			
    			$names1 = $_POST['shipping-address-lastName'];
    			$names2 = $_POST['shipping-address-firstName'];
    			$zipz = $_POST['order-zip-code'];
    			$address_code = $_POST['order-address'];
    			$address1 = $_POST['order-address1'];
    			$address2 = $_POST['order-address2'];
    			$address3 = $_POST['order-address3'];
    			$phones = $_POST['order-phone'];
    			$emails = $_POST['order-email'];
    			$card_number = $_POST['credit_card-number'];
    			$card_expired = $_POST['credit-card-expire'];
    			$card_code = $_POST['credit-card-securityCode'];
    			$payments = $_POST['order-paymentMethodType'];				
    			
    			$result = $objQuery->update('dtb_customer',
    					array('name03' => $names1, 'name04' => $names2, 'zip03' => $zipz, 'addr_code' => $address_code, 'addr01' => $address1, 'addr02' => $address2, 'addr03' => $address3, 'tel01' => $phones, 'email_mobile' => $emails, 'note' => $payments, 'card_number' => $card_number, 'card_expired' => $card_expired, 'card_code' => $card_code),
    					'customer_id = ?', array($customer_id));
    			header("Location: ".$_SERVER['PHP_SELF']);
    			
    			SC_Response_Ex::sendRedirect(SHOPPING_CONFIRM_URLPATH, array('ci' => SC_Helper_Customer_Ex::sfGetCustomerId($uniqid)));
    			SC_Response_Ex::actionExit();
    			
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
     * 前頁のURLを取得
     *
     * @return void
     */
    function lfGetCartPrevUrl(&$session,$referer) {
    	if (!preg_match('/cart/', $referer)) {
    		if (!empty($session['cart_referer_url'])) {
    			$session['cart_prev_url'] = $session['cart_referer_url'];
    			unset($session['cart_referer_url']);
    		} else {
    			if (preg_match('/entry/', $referer)) {
    				$session['cart_prev_url'] = HTTPS_URL . 'entry/kiyaku.php';
    			} else {
    				$session['cart_prev_url'] = $referer;
    			}
    		}
    	}
    	// 妥当性チェック
    	if (!SC_Utils_Ex::sfIsInternalDomain($session['cart_prev_url'])) {
    		$session['cart_prev_url'] = '';
    	}
    }
}