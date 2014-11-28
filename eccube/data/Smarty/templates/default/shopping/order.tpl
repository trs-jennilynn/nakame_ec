<!--{*
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
 *}-->
<style type="text/css">
    table th{
        border-right:0px;
        background-color:transparent;
    }
    table td:nth-child(2){
        white-space:nowrap;
    }
    table td:nth-child(3){
        text-align:center;
    }
    table tr:nth-child(5){
        background: #f7f7f7;
    }
    table tr:nth-child(5) th,
    table tr:nth-child(5) td{
        border-bottom:0px;
    }
    table tr:nth-child(1) th:nth-child(1){
        text-align:left;
    }
</style>
<div class="section section-green section-pad section-arrow">
<div class="cart-container">
<header class="align-center">
<h2>カートに入っている商品</h2>
    <!--{if count($cartItems) > 0}-->
    <!--{foreach from=$cartKeys item=key}-->
    <div class="form_area">
        <form name="form<!--{$key}-->" id="form<!--{$key}-->" method="post" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="confirms" />
            <input type="hidden" name="cart_no" value="" />
            <input type="hidden" name="cartKey" value="<!--{$key}-->" />
            <input type="hidden" name="category_id" value="<!--{$tpl_category_id|h}-->" />
            

            <table summary="商品情報">
                <col width="10%" />
                <col width="15%" />
                <col width="30%" />
                <col width="15%" />
                <col width="15%" />
                <col width="15%" />
                <tr>
                    <th class="alignC" colspan="2">商品</th>
                    <th class="alignC">サイズ</th>
                    <th class="alignC">カラー</th>
                    <th class="alignC">単価</th>
                    <th class="alignC">個数</th>
                    <th class="alignC">小計</th>
                </tr>
                <!--{foreach from=$cartItems[$key] item=item}-->
                    <tr>
                        <td class="alignC">
                            <!--{if $item.productsClass.main_image|strlen >= 1}-->
                                        <a class="expansion" target="_blank" href="<!--{$smarty.const.IMAGE_SAVE_URLPATH|h}--><!--{$item.productsClass.main_image|sfNoImageMainList|h}-->">
                                    <!--{/if}-->
                                            <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$item.productsClass.main_list_image|sfNoImageMainList|h}-->" style="max-width: 65px;max-height: 65px;" alt="<!--{$item.productsClass.name|h}-->" />
                                            <!--{if $item.productsClass.main_image|strlen >= 1}-->
                                        </a>
                                    <!--{/if}-->
                        </td>
                        <td>
                            <strong><!--{$item.productsClass.name|h}--></strong><br />
                        </td>
                        <td>
                        <!--{if $item.productsClass.classcategory_name2 != ""}-->
                                <!--{$item.productsClass.classcategory_name2}-->
                            <!--{/if}-->
                        </td>
                        <td>
                        <!--{if $item.productsClass.classcategory_name1 != ""}-->
                                <!--{$item.productsClass.classcategory_name1}--><br />
                           
                       <!--{else}-->
                                not found
                        <!--{/if}-->
                        </td>
                        <td class="alignR">
                            ¥<!--{$item.price|sfCalcIncTax|number_format}-->
                            
                        </td>
                        <td class="alignC"><input class="quantity" type="number" name="quantity" min="1" max="20" value="<!--{$item.quantity}-->">
                        </td>
                        <td class="alignR">¥<!--{$item.total_inctax|number_format}--></td>
                    </tr>
                <!--{/foreach}-->
                    <tr>
                        <th colspan="6" class="alignR">送料</th>
                        <td class="alignR">¥<!--{$arrData[$key].add_point|number_format}--></td>
                    </tr>
                <tr>
                    <th colspan="6" class="alignR">合計 (税込)</th>
                    <td class="alignR"><span class="price">¥<!--{$arrData[$key].total-$arrData[$key].deliv_fee|number_format}--></span></td>
                </tr>
            </table>
                <!--{if strlen($tpl_error) == 0}-->
                  <!--   <p class="alignC">上記内容でよろしければ「購入手続きへ」ボタンをクリックしてください。</p> -->
                <!--{/if}-->
        </form>
        </div>
        
    <!--{/foreach}-->

    <!--{/if}-->

</div>

</div>

<form name="cartlist" id="cartlist" action="?" method="post" >
       <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
       <input type="hidden" name="mode" value="cartt" />
<section id="shipping-address-input">
    <div class="section section-gray section-pad section-arrow">
        <div class="cart-container">
            <header class="align-center">
                <h2>
                お届け先情報を入力
                </h2>
            </header>
            <div class="form-group">
                <label for="shipping-address-firstName">
                お名前
                </label>
                <div class="form-control">
                <input class="input-large tooltipstered invalid" id="shipping-address-lastName" name="shipping-address-lastName" placeholder="姓" required="required" type="text" value="<!--{$names1}-->">
                <input class="input-large tooltipstered invalid" id="shipping-address-firstName" name="shipping-address-firstName" placeholder="名" required="required" type="text" value="<!--{$names2}-->">
                </div>
            </div>
            <div class="form-group">
                <label for="shipping-address-zipCode">
                郵便番号
                </label>
                <div class="form-control">
                <input class="input-large tooltipstered invalid" id="shipping-address-zipCode" name="order-zip-code" placeholder="郵便番号" required="required" type="text" value="<!--{$zipz}-->">
                <span class="form-help small">
                例）123-4567
                </span>
                </div>
            </div>
            <div class="form-group">
                <label for="shipping-address-prefectureCode">
                配送先
                </label>
                <div class="form-control">
                    <div class="clearfix">
                    <select class="input-large tooltipstered invalid" id=order-address name="order-address" required="required" style="width: 117px; height: 40px;"><optgroup><option value="">都道府県</option></optgroup><optgroup label="北海道"><option value="01">北海道</option></optgroup><optgroup label="東北"><option value="02">青森県</option><option value="03">岩手県</option><option value="04">宮城県</option><option value="05">秋田県</option><option value="06">山形県</option><option value="07">福島県</option></optgroup><optgroup label="関東"><option value="08">茨城県</option><option value="09">栃木県</option><option value="10">群馬県</option><option value="11">埼玉県</option><option value="12">千葉県</option><option value="13">東京都</option><option value="14">神奈川県</option></optgroup><optgroup label="北陸"><option value="15">新潟県</option><option value="16">富山県</option><option value="17">石川県</option><option value="18">福井県</option></optgroup><optgroup label="中部"><option value="19">山梨県</option><option value="20">長野県</option><option value="21">岐阜県</option><option value="22">静岡県</option><option value="23">愛知県</option><option value="31">鳥取県</option><option value="32">島根県</option><option value="33">岡山県</option><option value="34">広島県</option><option value="35">山口県</option></optgroup><optgroup label="近畿"><option value="24">三重県</option><option value="25">滋賀県</option><option value="26">京都府</option><option value="27">大阪府</option><option value="28">兵庫県</option><option value="29">奈良県</option><option value="30">和歌山県</option></optgroup><optgroup label="四国"><option value="36">徳島県</option><option value="37">香川県</option><option value="38">愛媛県</option><option value="39">高知県</option></optgroup><optgroup label="九州/沖縄"><option value="40">福岡県</option><option value="41">佐賀県</option><option value="42">長崎県</option><option value="43">熊本県</option><option value="44">大分県</option><option value="45">宮崎県</option><option value="46">鹿児島県</option><option value="47">沖縄県</option></optgroup><optgroup label="その他"><option value="__">その他</option></optgroup></select>
                    <input class="input-large tooltipstered invalid" id="shipping-address-address1" name="order-address1" placeholder="市区町村" required="required" type="text" value="<!--{$address1}-->">
                    <input class="input-large tooltipstered invalid" id="shipping-address-address2" name="order-address2" placeholder="番地" required="required" type="text" value="<!--{$address2}-->">
                    <input class="input-large input-gray tooltipstered valid" id="shipping-address-address3" name="order-address3" placeholder="建物名・部屋番号" required="required" type="text" value="<!--{$address3}-->">
                    </div>
                    <div class="text-red small" id="no-international-orders-available" style="display:none;">
                    海外への発送は承っておりません。Sorry. No international orders available.
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="shipping-address-phone">
                電話番号
                </label>
                <div class="form-control">
                <input class="input-large tooltipstered invalid" id="shipping-address-phone" name="order-phone" placeholder="08012345678" required="required" type="text" value="<!--{$phones}-->">
                </div>
            </div>
            <div class="form-group">
                <label for="order-purchaserEmail">
                メールアドレス
                </label>
                <div class="form-control">
                <input class="input-large tooltipstered valid" id="order-purchaserEmail" name="order-email" required="required" type="email" value="<!--{$email}-->">
                </div>
            </div>
            <div class="form-group">
                <label for="shipping-address-remember">
                登録する
                </label>
                <div class="form-control">
                    <div class="checkbox">
                    <label>
                    <input checked="checked" id="shipping-address-remember" name="shipping_address_remember" type="checkbox" value="1" class="tooltipstered">
                    <span class="form-help small">
                    配送先を登録します
                    </span>
                    </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="payment-input">
    <div class="section section-graylight section-pad section-arrow">
            
        <div class="cart-container">
        <header class="align-center"><h2>お支払い情報を入力</h2></header>
        <div class="align-center" id="payment-indicator" style="display: none;">
            <img alt="Indicator eyes" src="https://dijsur42hqnz1.cloudfront.net/assets/indicator-eyes-a74b71cf88a16a3bec2f2b8771e33a72.gif">
        </div>
        <div>
            <input checked="checked" class="order-paymentMethodType mar-b-05 tooltipstered" id="payment-method-creditcard" name="order-paymentMethodType" type="radio" value="CreditCard">
            <label class="bold mar-b-05" for="payment-method-creditcard">
            クレジットカードで支払う
            </label>
        </div>
        <div class="mar-b-2" id="credit-card-input" style="">
            <p class="mar-b-1 small">
                新しくカード情報を登録します。
                <span class="button-registered-credit-card btn-s btn-gray kerning" style="display: none;">
                登録済みのカ<span style="letter-spacing:-0.15em">ー</span><span style="letter-spacing:-0.075em">ド</span>を<span style="letter-spacing:-0.03em">使</span><span style="letter-spacing:-0.02em">う</span>
                </span>
            </p>
            <div class="form-group">
                <label for="credit-card-number">
                クレジットカード番号
                </label>
                <div class="form-control">
                    <div class="clearfix"><input class="input-large tooltipstered" id="credit-card-number" name="credit_card-number" placeholder="1111-1111-1111-1111" required="required" type="text" value=""><span class="form-help small">14〜16桁の数字</span></div>
                    <ul class="card-icons clearfix mar-b-05">
                        <li><span class="card-icon-visa">VISA</span></li>
                        <li><span class="card-icon-master">MasterCard</span></li>
                        <li><span class="card-icon-diners">ダイナーズクラブ</span></li>
                        <li><span class="card-icon-jcb">JCB</span></li>
                        <li><span class="card-icon-amex">AMERICAN EXPRESS</span></li>
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <label for="credit-card-expire">
                有効期限
                </label>
                <div class="form-control">
                    <input class="input-large tooltipstered" id="credit-card-expire" maxlength="7" name="credit-card-expire" placeholder="MM/YY" required="required" type="text" value="">
                    <span class="form-help small">
                    例）06/16（月/年）
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="credit-card-securityCode">
                セキュリティコード
                </label>
                <div class="form-control">
                <input class="input-large tooltipstered" id="credit-card-securityCode" maxlength="4" name="credit-card-securityCode" placeholder="111" required="required" type="text" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="credit-card-remember">
                登録する
                </label>
                <div class="form-control">
                    <div class="checkbox">
                        <label>
                        <input checked="checked" id="credit-card-remember" name="credit_card_rememebr" type="checkbox" value="1" class="tooltipstered">
                        <span class="form-help small">
                        クレジットカード情報を登録します
                        </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div id="credit-card-registered" style="display: none;">
            <p class="mar-b-1 small">
            登録されたカードを利用して支払います。
            <span class="button-input-credit-card btn-s btn-gray kerning">
            別のカ<span style="letter-spacing:-0.15em">ー</span><span style="letter-spacing:-0.075em">ド</span>を<span style="letter-spacing:-0.03em">使</span><span style="letter-spacing:-0.02em">う</span>
            </span>
            </p>
            <div class="block-table block-table-cart-confirm">
                <div class="block-tr">
                <h3 class="block-th">
                クレジットカード番号
                </h3>
                <div class="credit-card-number block-td"></div>
                </div>
                <div class="block-tr">
                <h3 class="block-th">
                有効期限
                </h3>
                <div class="credit-card-expire block-td"></div>
                </div>
            </div>
        </div>
        <div>
        <input class="order-paymentMethodType mar-b-05 tooltipstered" id="payment-method-cod" name="order-paymentMethodType" type="radio" value="Cod">
        <label class="bold mar-b-05" for="payment-method-cod">
        代金引換で支払う
        </label>
        <p>
        別途、代金引換手数料が 432円（税込）かかります。
        </p>
        </div>
        </div>
        
    </div>
</section>
<div class="section section-white section-pad">
<div class="align-center">
<a class="back-from-shopping btn-s btn-trans" href="/?cart=off"><i class="icon">

</i>
買い物を続ける
</a><input class="to-confirm btn-m btn-blue tooltipstered" name="commit" type="submit" value="確認画面へ進む">
</div>
</div>
</form>


    
