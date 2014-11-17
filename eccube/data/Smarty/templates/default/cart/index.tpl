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

<script type="text/javascript" src="<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/facebox.js"></script>
<link rel="stylesheet" type="text/css" href="<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/facebox.css" media="screen" />
<script type="text/javascript">//<![CDATA[
    $(document).ready(function() {
        $('a.expansion').facebox({
            loadingImage : '<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/loading.gif',
            closeImage   : '<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/closelabel.png'
        });
    });
//]]></script>
<style>
.header-inner, #form1 > p:nth-child(6), .title,
.point_announce, #form1 > p.alignC, #footer{
    display: none;
}
#empdiv{
    text-align:center;
}
#empdiv h2{
    border-bottom:2px solid #333;
    display: inline-block;
    padding-bottom: 20px;
}
#superbox #superbox-innerbox{
    height:auto !important;
}
#layout{
    min-height:auto !important;
}
</style>
<div id="undercolumn">
    <div id="undercolumn_cart">
        <h2 class="title"><!--{$tpl_title|h}--></h2>



    <p class="totalmoney_area">
        <!--{* カゴの中に商品がある場合にのみ表示 *}-->
        <!--{if count($cartKeys) > 1}-->
            <span class="attentionSt"><!--{foreach from=$cartKeys item=key name=cartKey}--><!--{$arrProductType[$key]}--><!--{if !$smarty.foreach.cartKey.last}-->、<!--{/if}--><!--{/foreach}-->は同時購入できません。<br />
                        お手数ですが、個別に購入手続きをお願い致します。
            </span>
        <!--{/if}-->

        <!--{if strlen($tpl_error) != 0}-->
            <p class="attention"><!--{$tpl_error|h}--></p>
        <!--{/if}-->

        <!--{if strlen($tpl_message) != 0}-->
            <p class="attention"><!--{$tpl_message|h|nl2br}--></p>
        <!--{/if}-->
    </p>

    <!--{if count($cartItems) > 0}-->
    <!--{foreach from=$cartKeys item=key}-->
    <div class="form_area">
        <form name="form<!--{$key}-->" id="form<!--{$key}-->" method="post" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="confirms" />
            <input type="hidden" name="cart_no" value="" />
            <input type="hidden" name="cartKey" value="<!--{$key}-->" />
            <input type="hidden" name="category_id" value="<!--{$tpl_category_id|h}-->" />
            <!--{if count($cartKeys) > 1}-->
            <h3><!--{$arrProductType[$key]}--></h3>
                <p>
                    <!--{$arrProductType[$key]}-->の合計金額は「<span class="price"><!--{$tpl_total_inctax[$key]|number_format}-->円</span>」です。
                    <!--{if $key != $smarty.const.PRODUCT_TYPE_DOWNLOAD}-->
                        <!--{if $arrInfo.free_rule > 0}-->
                            <!--{if !$arrData[$key].is_deliv_free}-->
                                あと「<span class="price"><!--{$tpl_deliv_free[$key]|number_format}-->円</span>」で送料無料です！！
                            <!--{else}-->

                                現在、「<span class="attention">送料無料</span>」です！！
                            <!--{/if}-->
                        <!--{/if}-->
                    <!--{/if}-->
                </p>
            <!--{else}-->
                <p>
                    お買い上げ商品の合計金額は「<span class="price"><!--{$tpl_total_inctax[$key]|number_format}-->円</span>」です。
                    <!--{if $key != $smarty.const.PRODUCT_TYPE_DOWNLOAD}-->
                        <!--{if $arrInfo.free_rule > 0}-->
                            <!--{if !$arrData[$key].is_deliv_free}-->
                                あと「<span class="price"><!--{$tpl_deliv_free[$key]|number_format}-->円</span>」で送料無料です！！
                            <!--{else}-->
                                現在、「<span class="attention">送料無料</span>」です！！
                            <!--{/if}-->
                        <!--{/if}-->
                    <!--{/if}-->
                </p>
            <!--{/if}-->

            <table summary="商品情報">
                <col width="10%" />
                <col width="15%" />
                <col width="30%" />
                <col width="15%" />
                <col width="15%" />
                <col width="15%" />
                <tr>
                    <th class="alignC"></th>
                    <th class="alignC">商品名</th>
                    <th class="alignC">サイズ</th>
                    <th class="alignC">カラー</th>
                    <th class="alignC">単価</th>
                    <th class="alignC">個数</th>
                    <th class="alignC">小計</th>
                </tr>
                <!--{foreach from=$cartItems[$key] item=item}-->
                    <tr style="<!--{if $item.error}-->background-color: <!--{$smarty.const.ERR_COLOR}-->;<!--{/if}-->">
                        <td class="alignC"><a href="?" onclick="fnFormModeSubmit('form<!--{$key}-->', 'delete', 'cart_no', '<!--{$item.cart_no}-->'); return false;">x</a>
                        </td>
                        <td>
                                                                商品名: <!--{* 商品名 *}--><strong><!--{$item.productsClass.name|h}--></strong><br />
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
                            <ul id="quantity_level">
                                <li><a href="?" onclick="fnFormModeSubmit('form<!--{$key}-->','up','cart_no','<!--{$item.cart_no}-->'); return false" id="up"><img src="<!--{$TPL_URLPATH}-->img/button/btn_plus.jpg" width="16" height="16" alt="＋" /></a></li>
                                <li><a href="?" onclick="fnFormModeSubmit('form<!--{$key}-->','down','cart_no','<!--{$item.cart_no}-->'); return false" id="down"><img src="<!--{$TPL_URLPATH}-->img/button/btn_minus.jpg" width="16" height="16" alt="-" /></a></li>
                            </ul>
                        </td>
                        <td class="alignR"¥><!--{$item.total_inctax|number_format}--></td>
                    </tr>
                <!--{/foreach}-->
                <tr>
                    <th colspan="6" class="alignR">小計</th>
                    <td class="alignR">¥<!--{$tpl_total_inctax[$key]|number_format}--></td>
                </tr>
                <tr>
                    <th colspan="6" class="alignR">合計</th>
                    <td class="alignR"><span class="price">¥<!--{$arrData[$key].total-$arrData[$key].deliv_fee|number_format}--></span></td>
                </tr>
                <!--{if $smarty.const.USE_POINT !== false}-->
                    <!--{if $arrData[$key].birth_point > 0}-->
                        <tr>
                            <th colspan="6" class="alignR">お誕生月ポイント</th>
                            <td class="alignR"><!--{$arrData[$key].birth_point|number_format}-->pt</td>
                        </tr>
                    <!--{/if}-->
                    <tr>
                        <th colspan="6" class="alignR">今回加算ポイント</th>
                        <td class="alignR"><!--{$arrData[$key].add_point|number_format}-->pt</td>
                    </tr>
                <!--{/if}-->
            </table>
                <!--{if strlen($tpl_error) == 0}-->
                    <p class="alignC">上記内容でよろしければ「購入手続きへ」ボタンをクリックしてください。</p>
                <!--{/if}-->
            <div class="btn_area">
                <ul>
                    <!--{if count($cartItems) > 0}-->
                        <li>
                                    <a class="btn-s overlay-nav-close btn-close btn-trans">
                                                                            買い物を続ける
                                    </a>
                        </li>
                        <li>
                            <!--{if strlen($tpl_error) == 0}-->
                                <input type="hidden" name="cartKey" value="<!--{$key}-->" />
                                <input type="submit" class="to-form btn-m btn-blue" value="注文画面に進む" alt="注文画面に進む" name="confirm" />
                            <!--{/if}-->
                        </li>
                    <!--{else}-->
                        <li></li>
                    <!--{/if}-->
                </ul>
            </div>
        </form>
        </div>
    <!--{/foreach}-->
    <!--{else}-->
        <div id="empdiv">
            <h2>カートに入っている商品</h2>
            <p>カートに商品はありません</p>
        </div>
    <!--{/if}-->
    </div>
</div>
