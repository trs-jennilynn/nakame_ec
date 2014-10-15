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

<!--{strip}-->
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
    <div id="splash">
            <div class="splash-container">
                    <h1 class="splash_title">
                          <img class="splash_logo" src="<!--{$TPL_URLPATH}-->img/common/suzuri-logo.svg" alt="Suzuri" />
                           <br />
                           <img class="splash-tagline" src="<!--{$TPL_URLPATH}-->img/common/suzuri-slogan.svg" alt="欲しいものは、作ればいい。" />
                    </h1>
                    <div class="kerning">
                           <h3 class="splash-description">
                                 <p>Tシャツやスマホケース、自分だけのオリジナルグッズが作れる！売れる！</p>
                           </h3>
                    </div>
                    <div class="clearfix">
                        <a class="btn-xl btn-blue bold" data-no-turbolink="true" href="/account/materials/new" target="_self"><i class="icon"></i><span style="letter-spacing:-0.075em">オ</span><span style="letter-spacing:-0.075em">リ</span>ジナル<span style="letter-spacing:-0.05em">グ</span><span style="letter-spacing:-0.075em">ッ</span>ズを作る</a>
                    </div>
            </div>
    </div>
<!--{/strip}-->
