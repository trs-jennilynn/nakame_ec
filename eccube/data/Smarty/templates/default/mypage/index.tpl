<!--{*
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
*}-->
<script async="async" src="<!--{$TPL_URLPATH}-->js/signup.js"></script>
<style>
.profile-wrapper{
background-image:url('../upload/mypage/background/<!--{$tpl_zip01}-->');
/* background-image:url('../upload/mypage/background/<!--{$zip1}-->'); */
}
.uploaded,#background_input,.uploaded2{
    visibility:hidden;
}

</style>
<div id="mypagecolumn">
    <h2 class="title"><!--{$tpl_title|h}--></h2>
    <!--{if $tpl_navi != ""}-->
        <!--{include file=$tpl_navi}-->
    <!--{else}-->
        <!--{include file=`$smarty.const.TEMPLATE_REALDIR`mypage/navi.tpl}-->
    <!--{/if}-->
    <div id="mycontents_area">
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="order_id" value="" />
            <input type="hidden" name="pageno" value="<!--{$objNavi->nowpage}-->" />
            <h3><!--{$tpl_subtitle|h}--></h3>

            <!--{if $objNavi->all_row > 0}-->

                <p><span class="attention"><!--{$objNavi->all_row}-->件</span>の購入履歴があります。</p>
                <div class="pagenumber_area">
                    <!--▼ページナビ-->
                    <!--{$objNavi->strnavi}-->
                    <!--▲ページナビ-->
                </div>

                <table summary="購入履歴">
                    <tr>
                        <th class="alignC">購入日時</th>
                        <th class="alignC">注文番号</th>
                        <th class="alignC">お支払い方法</th>
                        <th class="alignC">合計金額</th>
                        <!--{if $smarty.const.MYPAGE_ORDER_STATUS_DISP_FLAG }-->
                        <th class="alignC">ご注文状況</th>
                        <!--{/if}-->
                        <th class="alignC">詳細</th>
                    </tr>
                    <!--{section name=cnt loop=$arrOrder}-->
                        <tr>
                            <td class="alignC"><!--{$arrOrder[cnt].create_date|sfDispDBDate}--></td>
                            <td><!--{$arrOrder[cnt].order_id}--></td>
                            <!--{assign var=payment_id value="`$arrOrder[cnt].payment_id`"}-->
                            <td class="alignC"><!--{$arrPayment[$payment_id]|h}--></td>
                            <td class="alignR"><!--{$arrOrder[cnt].payment_total|number_format}-->円</td>

                            <!--{if $smarty.const.MYPAGE_ORDER_STATUS_DISP_FLAG }-->
                                <!--{assign var=order_status_id value="`$arrOrder[cnt].status`"}-->
                                <!--{if $order_status_id != $smarty.const.ORDER_PENDING }-->
                                <td class="alignC"><!--{$arrCustomerOrderStatus[$order_status_id]|h}--></td>
                                <!--{else}-->
                                <td class="alignC attention"><!--{$arrCustomerOrderStatus[$order_status_id]|h}--></td>
                                <!--{/if}-->
                            <!--{/if}-->
                            <td class="alignC"><a href="<!--{$smarty.const.ROOT_URLPATH}-->mypage/history.php?order_id=<!--{$arrOrder[cnt].order_id}-->">詳細</a></td>
                        </tr>
                    <!--{/section}-->
                </table>

            <!--{else}-->
                <p>購入履歴はありません。</p>
            <!--{/if}-->
        </form>
    </div>
</div>
     
     <div class="profile-wrapper section section-random crossorigin" data-profile="{&quot;url&quot;:null,&quot;body&quot;:null,&quot;userId&quot;:22795,&quot;headerUrl&quot;:null}" data-src="" id="header-dropzone" style="">
       <form method="post" action="?" name="upload1" id="upload1" enctype="multipart/form-data">
           <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
           <input type="hidden" name="mode" value="upload" />
           <input type="hidden" name="image_key" value="" />
           <!--{if $tpl_login}-->
          <a class="edit-header-icon needsclick" id="uploadimg" href="javascript:;" target="_self" ><i class="icon needsclick">✎</i><div class="header-progress"></div></a>
           <input id="background_input" name="background_input" type="file"/>
           <a class="uploaded" href="javascript:;" onclick="fnFormModeSubmit('upload1','bgs','image_key','background_input'); return false">Testing</a>
           <!--{/if}-->
        <div class='container'>
            <div class='profile-content'>
                <!--{if $tpl_zip02}-->
                        <img alt="Icon default" class="profile-avatar wow flipInY" src="../upload/mypage/profile/<!--{$tpl_zip02}-->" />
                <!--{elseif $zip2}-->
	                <style>
						.profile-wrapper{
						background-image:url('../upload/mypage/background/<!--{$zip1}-->');
						}
					</style>
                        <img alt="Icon default" class="profile-avatar wow flipInY" src="../upload/mypage/profile/<!--{$zip2}-->" />
                <!--{else}-->
                        <img alt="Icon default" class="profile-avatar wow flipInY" src="<!--{$TPL_URLPATH}-->img/common/icon_default-6a3458a14c1aba00b963b37c7fec20f4.jpg" />
                    <!--{/if}-->
                <!--{if $tpl_login}-->
                <a class="edit-avatar-icon needsclick" id="uploadimg" href="javascript:;" target="_self"><i class="icon needsclick">✎</i></a>
                    <a class="uploaded2" href="javascript:;" onclick="fnFormModeSubmit('upload1','bgs2','image_key','background_input'); return false">Testing</a>
                <div class="avatar-progress"></div>
                <!--{/if}-->
         </form>
                <div class='text-shadow' id='user-profile-shown'>
                    <h1 class='wow fadeInUp user-name'>
                    <!--{if $tpl_name2}-->
                        <!--{$tpl_name2}-->(<!--{$tpl_name1|h}-->)
                    <!--{elseif $name2}-->
                        <!--{$name2}-->(<!--{$name1}-->)
                    <!--{else}-->
                        <!--{$tpl_name1|h}-->
                    <!--{/if}-->
                    </h1>
                    <ul class='profile-links mar-b-1 wow fadeIn'>
	                        <li class="profile-url kerning">
	                        <!--{if $tpl_kana1}-->
	                            <a class="user-url" href="<!--{$tpl_kana1}-->"><i class="icon">🔗</i><span>website</span></a>
	                        <!--{elseif $kana1}-->
	                            <a class="user-url" href="<!--{$kana1}-->"><i class="icon">🔗</i><span>website</span></a>
	                        <!--{/if}-->
	                        </li>
                    </ul>
                    <p class="user-profile profile-text wow fadeIn align-center animated animated" style="visibility: visible;"><!--{$tpl_kana2|h}--><!--{$kana2}--></p>
                     <!--{if $tpl_login}--><a class="btn-s btn-graydark link-white mar-t-1" href="#" id="edit-profile" target="_self"><i class="icon">✎</i>プロフィールを編集</a><!--{/if}-->
                </div>
                <!--{if $tpl_login}-->
                <form name="formsave" id="formsave" method="post" action="?">
                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                <input type="hidden" name="mode" value="saveprof" />
                <div id="user-profile-editor" style="display:none">
                    <div class="header-form mar-b-1">
                        <input class="input-large tooltipstered" id="user-displayName" name="userdisplayName" placeholder="名前" type="text" value="<!--{$tpl_name2|h}-->">
                    </div>
                    <ul class="profile-links mar-b-1">
                        <li class="profile-url header-form">
                        <input class="input-large tooltipstered" id="user-profile-url" name="userprofileurl" placeholder="WebサイトのURL" type="text" value="<!--{$tpl_kana1|h}-->">
                        </li>
                    </ul>
                    <div class="header-form mar-b-1">
                        <textarea class="textarea input-normal tooltipstered" id="user-profile-body" name="userprofilebody" placeholder="プロフィール" ><!--{$tpl_kana2|h}--></textarea>
                    </div>
                    <input class="btn-s btn-graydark btn-editor-close link-white" name="mode" type="submit" value="キャンセル">
                    <input class="btn-s btn-blue loading-submit" name="commit" type="submit" value="変更を保存">
                    <a class="profile-editor-close" href="#" target="_self">
                        &nbsp;
                    </a>
                </div>
                </form>
                <!--{/if}-->
            </div>
          </div>
      </div>
        
        <div class='page'>
            <div class='content shop'>
            <!--{if count($arrGetProducts) > 0}-->
                <div class='previews items-container' data-omikuji='null' id='products'>
                    <!--{foreach from=$arrGetProducts item=arrProduct name="get_products"}-->
	                    <div class='flipInY item wow' data-item-variant-id='1' data-product-id='692' data-wow-delay='0.1s'>
		                    <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
	                            <div class="selected-badge-list">
	                               <img alt="ピックアップサレタヨ！" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-ff932d7bcbd2d11a8885ac0a0c7b7fab.png">
	                            </div>
	                            <div class="productImage item-image">
	                               <img class="lens-image product-list-image" src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->&amp;width=80&amp;height=80" alt="<!--{$arrProduct.name|h}-->" />
	                            </div>
                            </a>
		                    
		                    </a>
		                    <div class='item-info'>
		                        <div class='clearfix'>
		                            <div class='float-l'><h1 class='material-title small'><a class="product-permalink" href="zuro01/435/t-shirt/s/white.html">ひなた</a></h1><span class='item-author small'><a href="zuro01.html"><img alt="Icon default" class="profile-avatar-list" src="../dijsur42hqnz1.cloudfront.net/assets/common/icon_default-6a3458a14c1aba00b963b37c7fec20f4.jpg" width="20" />zuro01</a></span><span class='item-price small'>
		                            &yen;2,354
		                            </span>
		                            </div>
		                            <form name="disp" id="disp" method="post" action="?">
				                        <div class='float-r pad-t-05'>
				                            <button class='btn btn-trans favorite-button'><i class='icon text-red'>&hearts;</i><span class='favorites-count'>0</span></button>
				                        </div>
			                        </form>
		                        </div>
		                    </div>
	                    </div>
	                <!--{if $smarty.foreach.get_products.iteration % 2 === 0}-->
                    <!--{/if}-->
                <!--{/foreach}-->
                </div>
             <!--{/if}-->