<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
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
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/facebox.css" media="screen" />
<link rel="stylesheet" href="<!--{$smarty.const.ROOT_URLPATH}-->../default_en-US/css/import.css" type="text/css" media="all" />

<script type="text/javascript">//<![CDATA[
var send = true;

function fnCheckSubmit() {
    if(send) {
        send = false;
        return true;
    } else {
        alert("<!--{t string="tpl_pp26"}-->");
        return false;
    }
}

$(document).ready(function() {
    $('a.expansion').facebox({
        loadingImage : '<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/loading.gif',
        closeImage   : '<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.facebox/closelabel.png'
    });
});
//]]></script>

<!--CONTENTS-->
<div id="undercolumn">  
    <div id="undercolumn_shopping">
      <div class="flow_area">
			<ol>
			<li><span>&gt; STEP1</span><br />Delivery destination</li>
			<li class="large"><span>&gt; STEP2</span><br />Payment method and delivery time</li>
			<li class="active"><span>&gt; STEP3</span><br />Confirmation</li>
			<li class="last"><span>&gt; STEP4</span><br />Order complete</li>
			</ol>
		</div>
        <h2 class="title"><!--{$tpl_title|h}--></h2>

        <!--{if $tpl_message}-->
        <p class="attention"><!--{t string="tpl_pp27"}--><br /><!--{$tpl_message}--></p>
        <!--{else}-->
        <p class="information"><!--{t string="tpl_pp28"  escape="none"}--></p>
        <!--{/if}-->
        <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="confirm" />
        <input type="hidden" name="uniqid" value="<!--{$tpl_uniqid}-->" />

        <div class="btn_area">
       <ul>
            <li>
                 <a href="javascript:;" class="bt04" onclick="fnFormModeSubmit('form1', 'return', '', ''); return false;">Go back</a>
            </li>
            <li>
                 <button class="bt02" onclick="return fnCheckSubmit();" alt="<!--{t string="tpl_pp30"}-->"  name="next" id="next">Completion page</button>
            </li>
       </ul>
        </div>

        <table summary="<!--{t string="tpl_pp56"}-->">
            <colgroup width="10%"></colgroup>
            <colgroup width="40%"></colgroup>
            <colgroup width="20%"></colgroup>
            <colgroup width="10%"></colgroup>
            <colgroup width="20%"></colgroup>
            <tr>
                <th scope="col"><!--{t string="tpl_pp31"}--></th>
                <th scope="col"><!--{t string="tpl_pp32"}--></th>
                <th scope="col"><!--{t string="tpl_pp33"}--></th>
                <th scope="col"><!--{t string="tpl_pp34"}--></th>
                <th scope="col"><!--{t string="tpl_pp35"}--></th>
            </tr>
            <!--{foreach from=$arrOrderDetails item=item}-->
                <tr>
                    <td class="alignC">
                        <a
                            <!--{if $item.productsClass.main_image|strlen >= 1}--> href="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$item.productsClass.main_image|sfNoImageMainList|h}-->" class="expansion" target="_blank"
                            <!--{/if}-->
                        >
                            <img src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$item.productsClass.main_list_image|sfNoImageMainList|h}-->&amp;width=65&amp;height=65" alt="<!--{$item.productsClass.name|h}-->" /></a>
                    </td>
                    <td>
                        <ul>
                            <li><strong><!--{$item.productsClass.name|h}--></strong></li>
                            <!--{if $item.productsClass.classcategory_name1 != ""}-->
                            <li><!--{$item.productsClass.class_name1}-->：<!--{$item.productsClass.classcategory_name1}--></li>
                            <!--{/if}-->
                            <!--{if $item.productsClass.classcategory_name2 != ""}-->
                            <li><!--{$item.productsClass.class_name2}-->：<!--{$item.productsClass.classcategory_name2}--></li>
                            <!--{/if}-->
                        </ul>
                    </td>
                    <td class="alignR">
                        <!--{$item.productsClass.price02|sfCalcIncTax:$arrInfo.tax:$arrInfo.tax_rule|number_format}--> <!--{t string="tpl_pp36"}-->
                    </td>
                    <td class="alignR"><!--{$item.quantity|number_format}--></td>
                    <td class="alignR"><!--{$item.price|sfCalcIncTax:$arrInfo.tax:$arrInfo.tax_rule|number_format}--> <!--{t string="tpl_pp36"}--></td>
                </tr>
            <!--{/foreach}-->
            <tr>
                <th colspan="4" class="alignR" scope="row"><!--{t string="tpl_pp37"}--></th>
                <td class="alignR"><!--{$arrOrder.subtotal|number_format}--> <!--{t string="tpl_pp36"}--></td>
            </tr>
            <!--{if $smarty.const.USE_POINT !== false}-->
                <tr>
                    <th colspan="4" class="alignR" scope="row"><!--{t string="tpl_pp38"}--></th>
                    <td class="alignR">
                        <!--{assign var=discount value=`$arrOrder.use_point*$smarty.const.POINT_VALUE`}-->
                        -<!--{$discount|number_format|default:0}--> <!--{t string="tpl_pp36"}--></td>
                </tr>
            <!--{/if}-->
            <tr>
                <th colspan="4" class="alignR" scope="row"><!--{t string="tpl_pp39"}--></th>
                <td class="alignR"><!--{$arrOrder.deliv_fee|number_format}--> <!--{t string="tpl_pp36"}--></td>
            </tr>
            <tr>
                <th colspan="4" class="alignR" scope="row"><!--{t string="tpl_pp40"}--></th>
                <td class="alignR"><!--{$arrOrder.charge|number_format}--> <!--{t string="tpl_pp36"}--></td>
            </tr>
            <tr>
                <th colspan="4" class="alignR" scope="row"><!--{t string="tpl_pp41"}--></th>
                <td class="alignR"><span class="price"><!--{$arrOrder.payment_total|number_format}--> <!--{t string="tpl_pp36"}--></span></td>
            </tr>
        </table>

        <!--お届け先ここから-->
        <!--{* 販売方法判定（ダウンロード販売のみの場合はお届け先を表示しない） *}-->
        <!--{if $has_download == false}-->
        <h3><!--{t string="tpl_pp42"}--></h3>
        <table summary="<!--{t string="tpl_pp57"}-->" class="delivname">
            <colgroup width="30%"></colgroup>
            <colgroup width="70%"></colgroup>
            <tbody>
                <tr>
                    <th scope="row"><!--{t string="tpl_pp43"}--></th>
                    <td><!--{$arrShipping.shipping_name01|h}--> <!--{$arrShipping.shipping_name02|h}--></td>
                </tr>
                <tr>
                    <th scope="row"><!--{t string="tpl_pp44"}--></th>
                    <td><!--{$arrShipping.shipping_zip01|h}--> <!--{if $arrShipping.shipping_zip02 != ""}-->-<!--{/if}--><!--{$arrShipping.shipping_zip02|h}--></td>
                </tr>
                <tr>
                    <th scope="row"><!--{t string="tpl_pp42"}--></th>
                    <td><!--{$arrPref[$arrShipping.shipping_pref]}--><!--{$arrShipping.shipping_addr01|h}--> <!--{$arrShipping.shipping_addr02|h}--></td>
                </tr>
            </tbody>
        </table>
        <!--{/if}-->
        <!--お届け先ここまで-->

        <h3><!--{t string="tpl_pp46"}--></h3>
        <table summary="<!--{t string="tpl_pp58"}-->" class="delivname">
            <colgroup width="30%"></colgroup>
            <colgroup width="70%"></colgroup>
            <tbody>
            <tr>
                <th scope="row"><!--{t string="tpl_pp47"}--></th>
                <td><!--{$arrDeliv[$arrOrder.deliv_id]|h}--></td>
            </tr>
            <tr>
                <th scope="row"><!--{t string="tpl_pp48"}--></th>
                <td><!--{$arrOrder.payment_method|h}--></td>
            </tr>
            <tr>
                <th scope="row"><!--{t string="tpl_pp49"}--></th>
                <td><!--{$arrOrder.message|h|nl2br}--></td>
            </tr>
            </tbody>
        </table>
        <div class="btn_area">
        <ul>
            <li>
                 <a href="javascript:;" class="bt04" onclick="fnFormModeSubmit('form1', 'return', '', ''); return false;">Go back</a>
            </li>
            <li>
                 <button class="bt02" onclick="return fnCheckSubmit();" alt="<!--{t string="tpl_pp30"}-->"  name="next" id="next">Completion page</button>
            </li>
       </ul>
    </div>
        </form>
    </div>
</div>
<!--▲CONTENTS-->
