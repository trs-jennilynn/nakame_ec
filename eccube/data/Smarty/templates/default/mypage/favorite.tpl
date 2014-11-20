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

<div id="mypagecolumn">
    <h2 class="title"><!--{$tpl_title|h}--></h2>
    <!--{if $tpl_navi != ""}-->
        <!--{include file=$tpl_navi}-->
    <!--{else}-->
        <!--{include file=`$smarty.const.TEMPLATE_REALDIR`mypage/navi.tpl}-->
    <!--{/if}-->
    <div id="mycontents_area">
        <form name="form1" method="post" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="order_id" value="" />
        <input type="hidden" name="pageno" value="<!--{$tpl_pageno}-->" />
        <input type="hidden" name="mode" value="" />
        <input type="hidden" name="product_id" value="" />
        <h3><!--{$tpl_subtitle|h}--></h3>

        <!--{if $tpl_linemax > 0}-->

            <p><span class="attention"><!--{$tpl_linemax}-->件</span>のお気に入りがあります。</p>
            <div class="paging">
                <!--▼ページナビ-->
                <!--{$tpl_strnavi}-->
                <!--▲ページナビ-->
            </div>

            <table summary="お気に入り">
                <col width="15%" />
                <col width="20%" />
                <col width="45%" />
                <col width="20%" />
                <tr>
                    <th class="alignC">削除</th>
                    <th class="alignC">商品画像</th>
                    <th class="alignC">商品名</th>
                    <th class="alignC"><!--{$smarty.const.SALE_PRICE_TITLE}-->(税込)</th>
                </tr>
                <!--{section name=cnt loop=$arrFavorite}-->
                    <!--{assign var=product_id value="`$arrFavorite[cnt].product_id`"}-->
                    <tr>
                        <td class="alignC"><a href="javascript:fnModeSubmit('delete_favorite','product_id','<!--{$product_id|h}-->');">削除</a></td>
                        <td class="alignC"><a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$product_id|u}-->"><img src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrFavorite[cnt].main_list_image|sfNoImageMainList|h}-->&amp;width=65&amp;height=65"></a></td>
                        <td><a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$product_id|u}-->"><!--{$arrFavorite[cnt].name}--></a></td>
                        <td class="alignR sale_price">
                            <span class="price">
                                <!--{if $arrFavorite[cnt].price02_min_inctax == $arrFavorite[cnt].price02_max_inctax}-->
                                    <!--{$arrFavorite[cnt].price02_min_inctax|number_format}-->
                                <!--{else}-->
                                    <!--{$arrFavorite[cnt].price02_min_inctax|number_format}-->～<!--{$arrFavorite[cnt].price02_max_inctax|number_format}-->
                                <!--{/if}-->円</span>
                        </td>
                    </tr>
                <!--{/section}-->
            </table>
            <br />
            
            
            <!-- <div class="item box size11 product-cell" data-item-variant-id="83" data-product-id="93633" data-delay="1" data-height="395" data-width="329" data-state="move" id="1-2" style="width: 247.4px; position: absolute; opacity: 1; top: 0px; left: 0px; -webkit-transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s, opacity 0.5s; transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s, opacity 0.5s; height: 313px;">
			     <a class="product-permalink" href="/noriko/80339/iphone5-case/free/clear">
					<div class="selected-badge-list">
					     <img alt="Pickup Sareta Yo!" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-1e7abcf1a9e0692a4b7851726cb25140.png">
					</div>
					<div class="item-image">
					     <img alt="Hanako-chan iPhone Case" class="lens-image lazy product-list-image" data-original="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" height="323" src="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" width="323" style="display: inline;"><noscript>&lt;img alt="花子ちゃん iPhoneケース" class="lens-image lazy product-list-image" data-original="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" height="323" src="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" width="323" /&gt;</noscript>
					</div>
					<ul class="itemlist-btns">
					     <li>
					         <button class="favorite-button itemlist-btn-fav">
					             <i class="icon"><font><font>♥ </font></font></i>
					             <span class="favorites-count"><font><font>10</font></font></span>
					         </button>
					     </li>
					     <li>
					         <button class="add-choice-button itemlist-btn-choice">
					             <i class="icon"><font><font></font></font></i>
					         </button>
					     </li>
					</ul>
			     </a>
			     <div class="item-info">
			         <p class="material-title">
			         <a class="product-permalink" href="/noriko/80339/iphone5-case/free/clear">
			             <font><font>Hanako-chan</font></font>
			         </a></p>
			         <span class="item-author">
			             <a href="/noriko">
			                 <img alt="noriko" class="profile-avatar-list lazy" data-original="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" width="20" style="display: inline-block;"><noscript>&lt;img alt="noriko" class="profile-avatar-list lazy" data-original="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" width="20" /&gt;</noscript><font><font>noriko</font></font>
			             </a>
			         </span>
			         <span class="item-price">
			         <font><font> 
					¥ 2,268
					</font></font>
					</span>
				</div>
			</div> -->
			
			<!--{section name=cnt loop=$arrFavorite}-->
                    <!--{assign var=product_id value="`$arrFavorite[cnt].product_id`"}-->
			<div class="product_item item clearfix" data-item-variant-id="11" data-product-id="14032" data-wow-delay="0.1s">
                        
                        <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
                            <div class="selected-badge-list">
                               <img alt="ピックアップサレタヨ！" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-ff932d7bcbd2d11a8885ac0a0c7b7fab.png">
                            </div>
                            
                            <div class="productImage item-image">
                               <img href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$product_id|u}-->"><img src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrFavorite[cnt].main_list_image|sfNoImageMainList|h}-->&amp;width=65&amp;height=65"/>
                            </div>
                        </a>
                        <div class="productContents item-info">
                            <h3>
                            
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrFavorite[cnt].name}--></a>
                            </h3>
                            
                            <a href="<!--{$smarty.const.HTTPS_URL}-->mypage" target="_self"><img alt="9" class="profile-avatar-list" src="../upload/mypage/profile/<!--{$arrFavorite[cnt].zip02}-->" width="20"><!--{$arrFavorite[cnt].name01}--></a>
                            <p class="sale_price">
                                ¥<span class="price">
                              
                                <!--{$arrFavorite[cnt].price02|number_format}-->
                                </span>
                           
                            </p>
                            
                            <form name="fav" id="fav" method="post" action="?">
                                <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                                <input type="hidden" name="mode" value="fav" />
                                <input type="hidden" name="product_id" value="<!--{$tpl_product_id}-->" />
                                <input type="hidden" name="product_class_id" value="<!--{$tpl_product_class_id}-->" id="product_class_id" />
                                <input type="hidden" name="favorite_product_id" value="" />
                                <div class="float-r pad-t-05">
                                    
                                        <a class="btn btn-trans favorite-button" href="javascript:fnChangeAction('?product_id=<!--{$arrProduct.product_id|h}-->');" onclick="fnFormModeSubmit('fav','fav_like','favorite_product_id','<!--{$arrProduct.product_id|h}-->'); return false" target="_self" >
                                          <i class="icon text-red">♥</i>
                                          <span class="favorites-count"><!--{$arrFavorite[cnt].num_of_likes}--></span>
                                        </a>
                                   
                                </div>
                            </form>
                        </div>
                        
                    </div>
            <!--{/section}-->
            
        <!--{else}-->
            <p>お気に入りが登録されておりません。</p>
        <!--{/if}-->
        </form>
    </div>
</div>
