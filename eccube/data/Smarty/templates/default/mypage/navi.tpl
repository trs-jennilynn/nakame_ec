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

<div id="mynavi_area">
    <!--{strip}-->
        <ul class="mynavi_list clearfix">

            <!--{* 会員状態 *}-->
            <!--{if $tpl_login}-->
                <li><a href="./<!--{$smarty.const.DIR_INDEX_PATH}-->" class="<!--{if $tpl_mypageno == 'index'}--> selected<!--{/if}-->">
                    購入履歴一覧</a></li>
                <!--{if $smarty.const.OPTION_FAVORITE_PRODUCT == 1}-->
                    <li><a href="favorite.php" class="<!--{if $tpl_mypageno == 'favorite'}--> selected<!--{/if}-->">
                        お気に入り一覧</a></li>
                <!--{/if}-->
                <li><a href="change.php" class="<!--{if $tpl_mypageno == 'change'}--> selected<!--{/if}-->">
                    会員登録内容変更</a></li>
                <li><a href="delivery.php" class="<!--{if $tpl_mypageno == 'delivery'}--> selected<!--{/if}-->">
                    お届け先追加・変更</a></li>
                <li><a href="refusal.php" class="<!--{if $tpl_mypageno == 'refusal'}--> selected<!--{/if}-->">
                    退会手続き</a></li>

            <!--{* 退会状態 *}-->
            <!--{else}-->
                <li><a href="<!--{$smarty.const.TOP_URLPATH}-->" class="<!--{if $tpl_mypageno == 'index'}--> selected<!--{/if}-->">
                    購入履歴一覧</a></li>
                <!--{if $smarty.const.OPTION_FAVORITE_PRODUCT == 1}-->
                    <li><a href="<!--{$smarty.const.TOP_URLPATH}-->" class="<!--{if $tpl_mypageno == 'favorite'}--> selected<!--{/if}-->">
                        お気に入り一覧</a></li>
                <!--{/if}-->
                <li><a href="<!--{$smarty.const.TOP_URLPATH}-->" class="<!--{if $tpl_mypageno == 'change'}--> selected<!--{/if}-->">
                    会員登録内容変更</a></li>
                <li><a href="<!--{$smarty.const.TOP_URLPATH}-->" class="<!--{if $tpl_mypageno == 'delivery'}--> selected<!--{/if}-->">
                    お届け先追加・変更</a></li>
                <li><a href="<!--{$smarty.const.TOP_URLPATH}-->" class="<!--{if $tpl_mypageno == 'refusal'}--> selected<!--{/if}-->">
                    退会手続き</a></li>
            <!--{/if}-->
        </ul>

        <!--▼現在のポイント-->
       <!--{if $point_disp !== false}-->
            <div class="point_announce clearfix">
                <p>ようこそ&nbsp;／&nbsp;
                    <span class="user_name"><!--{$CustomerName1|h}--> <!--{$CustomerName2|h}-->様</span>
                    <!--{if $smarty.const.USE_POINT !== false}-->&nbsp;
                        現在の所持ポイントは&nbsp;<span class="point st"><!--{$CustomerPoint|number_format|default:"0"|h}-->pt</span>&nbsp;です。
                    <!--{/if}-->
                </p>
            </div>
        <!--{/if}-->
        <!--▲現在のポイント-->
    <!--{/strip}-->
<div class="block_outer">
    <div id="header_login_area" class="clearfix">
        <form name="header_login_form" id="header_login_form" method="post" action="<!--{$smarty.const.HTTPS_URL}-->frontparts/login_check.php" onsubmit="return fnCheckLogin('header_login_form')">
        <input type="hidden" name="mode" value="login" />
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="url" value="<!--{$smarty.server.REQUEST_URI|h}-->" />
        <div class="block_body clearfix">
            <!--{if $tpl_login}-->
                <p class="btn">
                    <span class="user_name"><!--{$tpl_name1|h}--></span>
                    <!--{if !$tpl_disable_logout}-->
                      <input type="image" onmouseover="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/common/btn_header_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/common/btn_header_logout.jpg',this)" src="<!--{$TPL_URLPATH}-->img/common/btn_header_logout.jpg" onclick="fnFormModeSubmit('header_login_form', 'logout', '', ''); return false;" alt="ログアウト" /><!--{/if}-->
                </p>
            <!--{else}-->
                <span class='hidden-phone'>メニュー</span>
            <!--{/if}-->
        </div>
       
        </form>
    </div>
</div>
</div>
<nav id='overlay-nav'>
        <div id="overlay-nav-content" class="" style="height: 617px;">
        <span class="overlay-nav-close btn-s btn-red btn-close"><i class="icon">x</i>CLOSE
        </span>
        <ul class="account-navs">
        <li class="account-nav hello-nav">
        <span class="kerning">
        <a href="<!--{$smarty.const.TOP_URLPATH}-->profile/ndex.php?<!--{$tpl_name1|h}-->">Hello!<!--{$tpl_name1|h}-->
        </span>
        </li>
        
         </ul>
        <ul class="activities"><li class="activity" style="transform: rotate(12deg) perspective(0px) translate(0px, 0px); opacity: 1;">
          <a href="/hanasora">
            <img class="profile-avatar-list" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/22665.jpg?1411914396">
          </a>
        
        
        <a href="/hanasora/favorites">
          <span class="timeago">12日前、</span>
          hanasoraさん が【Rainbow iPhoneケース】にズッキュンしたよ。
        </a></li></ul>
        <div class="hint wow fadeInLeft animated animated" style="visibility: visible;">
        <p class="hint-content kerning">ジェームス・ブラウン・イズ・デッド。</p>
        </div>
        </div>
    </nav>
<!--▲NAVI-->
