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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.    See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA    02111-1307, USA.
 *}-->

<!--▼HEADER-->
<!--{if !$tpl_login}-->
<script type="text/javascript">//<![CDATA[
    $(function(){
        var $login_email = $('#header_login_area input[name=login_email]');

        if (!$login_email.val()) {
            $login_email
                .val('メールアドレス')
                .css('color', '#AAA');
        }

        $login_email
            .focus(function() {
                if ($(this).val() == 'メールアドレス') {
                    $(this)
                        .val('')
                        .css('color', '#000');
                }
            })
            .blur(function() {
                if (!$(this).val()) {
                    $(this)
                        .val('メールアドレス')
                        .css('color', '#AAA');
                }
            });

        $('#header_login_form').submit(function() {
            if (!$login_email.val()
                || $login_email.val() == 'メールアドレス') {
                if ($('#header_login_area input[name=login_pass]').val()) {
                    alert('メールアドレス/パスワードを入力して下さい。');
                }
                return false;
            }
            return true;
        });
    });
//]]></script>
<!--{/if}-->
 <p></p>
    <div id='layout'>
        <header class='header'>
            <div class='header-inner'>
                <div class='brand wow fadeIn'>
                <a href="<!--{$smarty.const.TOP_URLPATH}-->"><img alt="SUZURI by GMOペパボ" class="header-logo hidden-phone" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri_by_gmopepabo-ac9967b6b53adef0f189f950e33e56a0.svg" />
                <img alt="SUZURI by GMOペパボ" class="header-logo visible-phone" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri_by_gmopepabo_sp-196b7335cf5d2bbf4f7c028b7b7d5bea.svg" />
                </a></div>
                <ul class='header-navs'><li class='header-nav'><span class='btn-s btn-yellow' id='open-cart'><i class='icon'><img class="hover_change_image" src="<!--{$TPL_URLPATH}-->img/common/cart.png" alt="カゴの中を見る" /></i><span id='nav-cart-count'>
                0</span>
                </span></li><li class='header-nav overlay-nav-open'><span class='btn-s btn-blue'><i class='icon'>&#9776;</i>
                    <div id="headerInternalColumn">
            <!--{* ▼HeaderInternal COLUMN*}-->
            <!--{if $arrPageLayout.HeaderInternalNavi|@count > 0}-->
                <!--{* ▼上ナビ *}-->
                <!--{foreach key=HeaderInternalNaviKey item=HeaderInternalNaviItem from=$arrPageLayout.HeaderInternalNavi}-->
                    <!-- ▼<!--{$HeaderInternalNaviItem.bloc_name}--> -->
                    <!--{if $HeaderInternalNaviItem.php_path != ""}-->
                        <!--{include_php file=$HeaderInternalNaviItem.php_path items=$HeaderInternalNaviItem}-->
                    <!--{else}-->
                        <!--{include file=$HeaderInternalNaviItem.tpl_path items=$HeaderInternalNaviItem}-->
                    <!--{/if}-->
                    <!-- ▲<!--{$HeaderInternalNaviItem.bloc_name}--> -->
                <!--{/foreach}-->
                <!--{* ▲上ナビ *}-->
            <!--{/if}-->
            <!--{* ▲HeaderInternal COLUMN*}-->
            </div>
                </span></li></ul>
            </div>
        </header>
<!--▲HEADER-->
