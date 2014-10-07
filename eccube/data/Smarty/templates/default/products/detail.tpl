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

<script type="text/javascript">//<![CDATA[
    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
//]]></script>
<div class="signup-header">
    <a class="btn-block btn-s btn-black pad-v-05" href="/signup">
        <span class="kerning bold">
                            今なら無料ユーザー登録で<br class="visible-phone"><span style="letter-spacing:-0.075em">作</span><span style="letter-spacing:-0.075em">っ</span>た<span style="letter-spacing:-0.05em">グ</span><span style="letter-spacing:-0.075em">ッ</span>ズがその場で当たる！ お<span style="letter-spacing:-0.075em">み</span><span style="letter-spacing:-0.075em">く</span>じ<span style="letter-spacing:-0.05em">キ</span><span style="letter-spacing:-0.05em">ャ</span>ンペーン実施中！
        </span>
    </a>
</div>
<div id="undercolumn">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <div id="detailarea" class="clearfix">
            <div id="detailphotobloc">
                <div class="photo">
                    <!--{assign var=key value="main_image"}-->
                    <!--★画像★-->
                    <!--{if $arrProduct.main_large_image|strlen >= 1}-->
                        <a
                            href="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_large_image|h}-->"
                            class="expansion"
                            target="_blank"
                        >
                    <!--{/if}-->
                        <img src="<!--{$arrFile[$key].filepath|h}-->" width="<!--{$arrFile[$key].width}-->" height="<!--{$arrFile[$key].height}-->" alt="<!--{$arrProduct.name|h}-->" class="picture" />
                    <!--{if $arrProduct.main_large_image|strlen >= 1}-->
                        </a>
                    <!--{/if}-->
                </div>
                <!--{if $arrProduct.main_large_image|strlen >= 1}-->
                    <span class="mini">
                            <!--★拡大する★-->
                            <a
                                href="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct.main_large_image|h}-->"
                                class="expansion"
                                target="_blank"
                            >
                                画像を拡大する</a>
                    </span>
                <!--{/if}-->
                        <div class="pad-2 hidden-tablet hidden-phone">
                        <ul class="small product-spec mar-b-2"><li>※画像は合成イメージです。実際の商品とは異なる場合があります。</li><li>発送までにかかる日数：5日</li><li>使用ボディ：Tシャツ 5オンス
                        <br>
                        <span class="text-red">
                        ※ボディのカラーによって価格が異なります。
                        </span></li><li>素材・材質：綿100％</li><li><table>
                        <tbody><tr><th>サイズ</th><th>着丈(cm)</th><th>身巾(cm)</th><th>袖丈(cm)</th></tr>
                        <tr><td>S</td><td>65</td><td>48</td><td>20</td></tr>
                        <tr><td>M</td><td>68</td><td>50</td><td>20</td></tr>
                        <tr><td>L</td><td>71</td><td>53</td><td>21</td></tr>
                        <tr><td>XL</td><td>75</td><td>58</td><td>22</td></tr>
                        <tr><td>XXL</td><td>80</td><td>63</td><td>24</td></tr>
                        <tr><td>XXXL</td><td>83</td><td>68</td><td>25</td></tr>
                        <tr><td>G-S (Ladies)</td><td>58</td><td>40</td><td>15</td></tr>
                        <tr><td>G-M (Ladies)</td><td>61</td><td>43</td><td>16</td></tr>
                        <tr><td>G-L (Ladies)</td><td>64</td><td>45</td><td>16</td></tr>
                        </tbody></table></li>
                        </ul>
                 </div>
            </div>

            <div id="detailrightbloc">
                <!--▼商品ステータス-->
                <!--{assign var=ps value=$productStatus[$tpl_product_id]}-->
                <!--{if count($ps) > 0}-->
                    <ul class="status_icon clearfix">
                        <!--{foreach from=$ps item=status}-->
                        <li>
                            <img src="<!--{$TPL_URLPATH}--><!--{$arrSTATUS_IMAGE[$status]}-->" width="60" height="17" alt="<!--{$arrSTATUS[$status]}-->" id="icon<!--{$status}-->" />
                        </li>
                        <!--{/foreach}-->
                    </ul>
                <!--{/if}-->
                <!--▲商品ステータス-->

                <!--★商品コード★-->
                <!--<dl class="product_code">
                    <dt>商品コード：</dt>
                    <dd>
                        <span id="product_code_default">
                            <!--{if $arrProduct.product_code_min == $arrProduct.product_code_max}-->
                                <!--{$arrProduct.product_code_min|h}-->
                            <!--{else}-->
                                <!--{$arrProduct.product_code_min|h}-->～<!--{$arrProduct.product_code_max|h}-->
                            <!--{/if}-->
                        </span><span id="product_code_dynamic"></span>
                    </dd>
                </dl>-->

                <!--★商品名★-->
                <h2><!--{$arrProduct.name|h}--></h2>

                <!--★通常価格★-->
                <!--{if $arrProduct.price01_min_inctax > 0}-->
                    <!--<dl class="normal_price">
                        <dt><!--{$smarty.const.NORMAL_PRICE_TITLE}-->(税込)：</dt>
                        <dd class="price">
                            <span id="price01_default"><!--{strip}-->
                                <!--{if $arrProduct.price01_min_inctax == $arrProduct.price01_max_inctax}-->
                                    <!--{$arrProduct.price01_min_inctax|number_format}-->
                                <!--{else}-->
                                    <!--{$arrProduct.price01_min_inctax|number_format}-->～<!--{$arrProduct.price01_max_inctax|number_format}-->
                                <!--{/if}-->
                            <!--{/strip}--></span><span id="price01_dynamic"></span>
                            円
                        </dd>
                    </dl>-->
                <!--{/if}-->

                <!--★販売価格★-->
                <dl class="sale_price">
                    <dt><!--$smarty.const.SALE_PRICE_TITLE(税込)：--></dt>
                    <dd class="price">
                        <span id="price02_default"><!--{strip}-->
                            <!--{if $arrProduct.price02_min_inctax == $arrProduct.price02_max_inctax}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}-->
                            <!--{else}-->
                                <!--{$arrProduct.price02_min_inctax|number_format}-->～<!--{$arrProduct.price02_max_inctax|number_format}-->
                            <!--{/if}-->
                        <!--{/strip}--></span><span id="price02_dynamic"></span>
                        円
                    </dd>
                </dl>

                <!--★ポイント★-->
                <!--{if $smarty.const.USE_POINT !== false}-->
                    <!--<div class="point">ポイント：
                        <span id="point_default"><!--{strip}-->
                            <!--{if $arrProduct.price02_min == $arrProduct.price02_max}-->
                                <!--{$arrProduct.price02_min|sfPrePoint:$arrProduct.point_rate|number_format}-->
                            <!--{else}-->
                                <!--{if $arrProduct.price02_min|sfPrePoint:$arrProduct.point_rate == $arrProduct.price02_max|sfPrePoint:$arrProduct.point_rate}-->
                                    <!--{$arrProduct.price02_min|sfPrePoint:$arrProduct.point_rate|number_format}-->
                                <!--{else}-->
                                    <!--{$arrProduct.price02_min|sfPrePoint:$arrProduct.point_rate|number_format}-->～<!--{$arrProduct.price02_max|sfPrePoint:$arrProduct.point_rate|number_format}-->
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/strip}--></span><span id="point_dynamic"></span>
                        Pt
                    </div>-->
                <!--{/if}-->

                <!--{* ▼メーカー *}-->
                <!--{if $arrProduct.maker_name|strlen >= 1}-->
                    <dl class="maker">
                        <dt>メーカー：</dt>
                        <dd><!--{$arrProduct.maker_name|h}--></dd>
                    </dl>
                <!--{/if}-->
                <!--{* ▲メーカー *}-->

                <!--▼メーカーURL-->
                <!--{if $arrProduct.comment1|strlen >= 1}-->
                    <dl class="comment1">
                        <dt>メーカーURL：</dt>
                        <dd><a href="<!--{$arrProduct.comment1|h}-->"><!--{$arrProduct.comment1|h}--></a></dd>
                    </dl>
                <!--{/if}-->
                <!--▼メーカーURL-->

                <!--★関連カテゴリ★-->
                <!--<dl class="relative_cat">
                    <dt>関連カテゴリ：</dt>
                    <!--{section name=r loop=$arrRelativeCat}-->
                        <dd>
                            <!--{section name=s loop=$arrRelativeCat[r]}-->
                                <a href="<!--{$smarty.const.ROOT_URLPATH}-->products/list.php?category_id=<!--{$arrRelativeCat[r][s].category_id}-->"><!--{$arrRelativeCat[r][s].category_name|h}--></a>
                                <!--{if !$smarty.section.s.last}--><!--{$smarty.const.SEPA_CATNAVI}--><!--{/if}-->
                            <!--{/section}-->
                        </dd>
                    <!--{/section}-->
                </dl>-->
                
                <!--★詳細メインコメント★-->
                <div class="main_comment"><!--{$arrProduct.main_comment|nl2br_html}--></div>

                <!--▼買い物かご-->

                <div class="cart_area clearfix">
                    <input type="hidden" name="mode" value="cart" />
                    <input type="hidden" name="product_id" value="<!--{$tpl_product_id}-->" />
                    <input type="hidden" name="product_class_id" value="<!--{$tpl_product_class_id}-->" id="product_class_id" />
                    <input type="hidden" name="favorite_product_id" value="" />

                    <!--{if $tpl_stock_find}-->
                        <!--{if $tpl_classcat_find1}-->
                            <div class="classlist">
                                <!--▼規格1-->
                                <ul class="clearfix">
                                    <li><!--{$tpl_class_name1|h}-->：</li>
                                    <li>
                                        <select name="classcategory_id1" style="<!--{$arrErr.classcategory_id1|sfGetErrorColor}-->">
                                        <!--{html_options options=$arrClassCat1 selected=$arrForm.classcategory_id1.value}-->
                                        </select>
                                        <!--{if $arrErr.classcategory_id1 != ""}-->
                                        <br /><span class="attention">※ <!--{$tpl_class_name1}-->を入力して下さい。</span>
                                        <!--{/if}-->
                                    </li>
                                </ul>
                                <!--▲規格1-->
                                <!--{if $tpl_classcat_find2}-->
                                <!--▼規格2-->
                                <ul class="clearfix">
                                    <li><!--{$tpl_class_name2|h}-->：</li>
                                    <li>
                                        <select name="classcategory_id2" style="<!--{$arrErr.classcategory_id2|sfGetErrorColor}-->">
                                        </select>
                                        <!--{if $arrErr.classcategory_id2 != ""}-->
                                        <br /><span class="attention">※ <!--{$tpl_class_name2}-->を入力して下さい。</span>
                                        <!--{/if}-->
                                    </li>
                                </ul>
                                <!--▲規格2-->
                                <!--{/if}-->
                            </div>
                        <!--{/if}-->

                        <!--★数量★-->
                        <!--<dl class="quantity">
                            <dt>数量：</dt>
                            <dd><input type="text" class="box60" name="quantity" value="<!--{$arrForm.quantity.value|default:1|h}-->" maxlength="<!--{$smarty.const.INT_LEN}-->" style="<!--{$arrErr.quantity|sfGetErrorColor}-->" />
                                <!--{if $arrErr.quantity != ""}-->
                                    <br /><span class="attention"><!--{$arrErr.quantity}--></span>
                                <!--{/if}-->
                            </dd>
                        </dl>-->

                        <div class="cartin">
                            <div class="cartin_btn">
                                <div id="cartbtn_default">
                                    <!--★カゴに入れる★-->
                                    <a class="btn-l btn-blue btn-block mar-b-1" href="#" id="cart-in" target="_self"><i class="icon hidden-phone"><img src="<!--{$TPL_URLPATH}-->img/common/cart_on.png" alt="カゴの中を見る" /></i><span>カートにいれる</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="attention" id="cartbtn_dynamic"></div>
                    <!--{else}-->
                        <div class="attention">申し訳ございませんが、只今品切れ中です。</div>
                    <!--{/if}-->

                    <!--★お気に入り登録★-->
                    <!--{if $smarty.const.OPTION_FAVORITE_PRODUCT == 1 && $tpl_login === true}-->
                        <div class="favorite_btn">
                            <!--{assign var=add_favorite value="add_favorite`$product_id`"}-->
                            <!--{if $arrErr[$add_favorite]}-->
                                <div class="attention"><!--{$arrErr[$add_favorite]}--></div>
                            <!--{/if}-->
                            <!--{if !$is_favorite}-->
                                <a href="javascript:eccube.changeAction('?product_id=<!--{$arrProduct.product_id|h}-->'); eccube.setModeAndSubmit('add_favorite','favorite_product_id','<!--{$arrProduct.product_id|h}-->');"><img class="hover_change_image" src="<!--{$TPL_URLPATH}-->img/button/btn_add_favorite.jpg" alt="お気に入りに追加" /></a>
                            <!--{else}-->
                                <img src="<!--{$TPL_URLPATH}-->img/button/btn_add_favorite_on.jpg" alt="お気に入り登録済" name="add_favorite_product" id="add_favorite_product" />
                                <script type="text/javascript" src="<!--{$smarty.const.ROOT_URLPATH}-->js/jquery.tipsy.js"></script>
                                <script type="text/javascript">
                                    var favoriteButton = $("#add_favorite_product");
                                    favoriteButton.tipsy({gravity: $.fn.tipsy.autoNS, fallback: "お気に入りに登録済み", fade: true });

                                    <!--{if $just_added_favorite == true}-->
                                    favoriteButton.load(function(){$(this).tipsy("show")});
                                    $(function(){
                                        var tid = setTimeout('favoriteButton.tipsy("hide")',5000);
                                    });
                                    <!--{/if}-->
                                </script>
                            <!--{/if}-->
                        </div>
                    <!--{/if}-->
                </div>
                 <div class="clearfix mar-b-1">
                    <div class="float-l" id="product-favorites"><button class="favorite-button btn-s btn-red kerning"><i class="icon">♥</i><span>ズッキュン</span></button></div>
                    <div id="widget"><span class="kerning btn-s btn-gray" id="widget-code"><i class="icon"></i><span>サ<span style="letter-spacing:-0.075em">イ</span><span style="letter-spacing:-0.075em">ト</span>で紹介</span></span></div>
                </div>
                <span class="page_view_count mar-b-1">
                <span class="mar-r-1"><i class="icon"></i><span>
                47
                </span><span class="hidden-phone">views</span></span>
                <span><i class="icon">♥</i><span>
                8
                </span><span class="hidden-phone kerning"><span style="letter-spacing:-0.05em">ズ</span><span style="letter-spacing:-0.075em">ッ</span><span style="letter-spacing:-0.05em">キ</span><span style="letter-spacing:-0.05em">ュ</span>ンズ</span></span>
            </span>
            <ul class="share-buttons pad-v-1">
                <li class="share-button share-button-facebook">
                <div class="fb-like fb_iframe_widget" data-action="like" data-layout="button_count" data-share="true" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=607713215973051&amp;href=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 145px; height: 20px;"><iframe name="f338f663c8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=607713215973051&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FKFZn1BJ0LYk.js%3Fversion%3D41%23cb%3Df3e78c00e4%26domain%3Dsuzuri.jp%26origin%3Dhttps%253A%252F%252Fsuzuri.jp%252Ff13cec0d98%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 145px; height: 20px;" class=""></iframe></span></div>
                </li>
                <li class="share-button share-button-twitter">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/tweet_button.5e910aa7872029f6d652d9e5838088b3.ja.html#_=1412326152260&amp;count=horizontal&amp;hashtags=suzurijp&amp;id=twitter-widget-0&amp;lang=ja&amp;original_referer=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;size=m&amp;text=%E3%83%AD%E3%82%B6%E3%83%93%E3%83%BC%20(%20rosavy%20)%E3%81%AE%E3%82%AA%E3%83%94%E3%83%A8T%E3%82%B7%E3%83%A3%E3%83%84%20%E2%88%9E%20SUZURI&amp;url=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 139px; height: 20px;"></iframe>
                </li>
                <li class="share-button share-button-googleplus">
                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1412326150057" name="I0_1412326150057" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fsuzuri.jp&amp;url=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.t4r-jMKfL1Q.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAItRSTOhh3AtYEbE2JK11RMx5mJii_4HMA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1412326150057&amp;parent=https%3A%2F%2Fsuzuri.jp&amp;pfname=&amp;rpctoken=69147120" data-gapiattached="true" title="+1"></iframe></div>
                </li>
                <li class="share-button share-button-line visible-phone">
                <a href="line://msg/text/%E3%83%AD%E3%82%B6%E3%83%93%E3%83%BC%20%28%20rosavy%20%29%E3%81%AE%E3%82%AA%E3%83%94%E3%83%A8T%E3%82%B7%E3%83%A3%E3%83%84%20%E2%88%9E%20SUZURI%20https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy">
                <img alt="LINEで送る" height="20" src="https://dijsur42hqnz1.cloudfront.net/assets/linebutton_88x20-1fca5bd48632074dc2aa3e5da4276cfe.png" width="82">
                </a>
                </li>
            </ul>
            <div class="material-description pad-t-1">
                <p class="mar-b-1">オピヨ</p>
            </div>
                
            </div>
            <!--▲買い物かご-->
        </div>
    </form>

    <!--詳細ここまで-->


    <!--▼サブコメント-->
    <!--{section name=cnt loop=$smarty.const.PRODUCTSUB_MAX}-->
        <!--{assign var=key value="sub_title`$smarty.section.cnt.index+1`"}-->
        <!--{assign var=ikey value="sub_image`$smarty.section.cnt.index+1`"}-->
        <!--{if $arrProduct[$key] != "" or $arrProduct[$ikey]|strlen >= 1}-->
            <div class="sub_area clearfix">
                <h3><!--★サブタイトル★--><!--{$arrProduct[$key]|h}--></h3>
                <!--{assign var=ckey value="sub_comment`$smarty.section.cnt.index+1`"}-->
                <!--▼サブ画像-->
                <!--{assign var=lkey value="sub_large_image`$smarty.section.cnt.index+1`"}-->
                <!--{if $arrProduct[$ikey]|strlen >= 1}-->
                    <div class="subtext"><!--★サブテキスト★--><!--{$arrProduct[$ckey]|nl2br_html}--></div>
                    <div class="subphotoimg">
                        <!--{if $arrProduct[$lkey]|strlen >= 1}-->
                            <a href="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct[$lkey]|h}-->" class="expansion" target="_blank" >
                        <!--{/if}-->
                        <img src="<!--{$arrFile[$ikey].filepath}-->" alt="<!--{$arrProduct.name|h}-->" width="<!--{$arrFile[$ikey].width}-->" height="<!--{$arrFile[$ikey].height}-->" />
                        <!--{if $arrProduct[$lkey]|strlen >= 1}-->
                            </a>
                            <span class="mini">
                                <a href="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrProduct[$lkey]|h}-->" class="expansion" target="_blank">
                                    画像を拡大する</a>
                            </span>
                        <!--{/if}-->
                    </div>
                <!--{else}-->
                    <p class="subtext"><!--★サブテキスト★--><!--{$arrProduct[$ckey]|nl2br_html}--></p>
                <!--{/if}-->
                <!--▲サブ画像-->
            </div>
        <!--{/if}-->
    <!--{/section}-->
    <!--▲サブコメント-->

</div>
<div class="product-control">
<div class="product-control float-l">
<div class="product-control-btns">
<a class="product-control-btn btn-s btn-gray" data-confirm="この商品を権利侵害の商品として通報しますか？" data-method="post" data-remote="true" href="/materials/75452/report" id="post_report" rel="nofollow" target="_self"><i class="icon">⚠</i><span class="hidden-phone">通報</span></a></div>
</div>
<div class="product-control float-r">
<div class="product-control-btns">
<a class="product-control-btn btn-s btn-darken" data-no-turbolink="true" href="/products/random" target="_self"><i class="icon-nopad">🔀</i><span class="hidden-phone">ランダム表示</span></a><a class="product-control-btn btn-s btn-yellow" href="/rosavy" target="_self"><i class="icon"></i><span class="kerning"><span style="letter-spacing:-0.05em">シ</span><span style="letter-spacing:-0.1em">ョ</span><span style="letter-spacing:-0.075em">ッ</span>プに戻る</span></a></div>
</div>
</div>