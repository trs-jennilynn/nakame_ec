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

<!--{if count($arrBestProducts) > 0}-->
    <div class="block_outer clearfix">
        <div id="recommend_area">
            <h2><img src="<!--{$TPL_URLPATH}-->img/title/tit_bloc_recommend.jpg" alt="*" class="title_icon" /></h2>
            <div class="block_body clearfix items-container">
                <!--{foreach from=$arrBestProducts item=arrProduct name="recommend_products"}-->
                    <div class="product_item item clearfix" data-item-variant-id="11" data-product-id="14032" data-wow-delay="0.1s">
                        <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->">
	                        <div class="selected-badge-list">
	                           <img alt="ピックアップサレタヨ！" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-ff932d7bcbd2d11a8885ac0a0c7b7fab.png">
	                        </div>
	                        <div class="productImage item-image">
	                           <img class="lens-image product-list-image" src="<!--{$smarty.const.ROOT_URLPATH}-->resize_image.php?image=<!--{$arrProduct.main_list_image|sfNoImageMainList|h}-->&amp;width=80&amp;height=80" alt="<!--{$arrProduct.name|h}-->" />
	                        </div>
                        </a>
                        <div class="productContents item-info">
                            <h3>
                                <a href="<!--{$smarty.const.P_DETAIL_URLPATH}--><!--{$arrProduct.product_id|u}-->"><!--{$arrProduct.name|h}--></a>
                            </h3>
                            <a href="/hadashiA" target="_self"><img alt="9" class="profile-avatar-list" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/9.jpg?1398244153" width="20">hadashiA</a>
                            <p class="sale_price">
                                ¥<span class="price"><!--{$arrProduct.price02_min_inctax|number_format}--></span>
                            </p>
                            <div class="float-r pad-t-05">
	                            <button class="btn btn-trans favorite-button">
		                            <i class="icon text-red">♥</i>
		                            <span class="favorites-count">0</span>
	                            </button>
	                        </div>
                        </div>
                    </div>
                    <!--{if $smarty.foreach.recommend_products.iteration % 2 === 0}-->
                        <div class="clear"></div>
                    <!--{/if}-->
                <!--{/foreach}-->
            </div>
        </div>
    </div>
<!--{/if}-->
