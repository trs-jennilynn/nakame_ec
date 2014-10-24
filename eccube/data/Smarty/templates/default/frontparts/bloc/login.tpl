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
<link href="<!--{$TPL_URLPATH}-->css/application-f3f29d259aa1d1d690c12266391bb719.css" media="all" rel="stylesheet" />
<script async="async" src="<!--{$TPL_URLPATH}-->js/application-fccb5e5a2e2897e4af5ccda4f7cfa3fd.js"></script>

<div class="block_outer">
    <div id="login_area">
        <form name="login_form" id="login_form" method="post" action="<!--{$smarty.const.HTTPS_URL}-->frontparts/login_check.php" onsubmit="return fnCheckLogin('login_form')">
            <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            <input type="hidden" name="mode" value="login" />
            <input type="hidden" name="url" value="<!--{$smarty.server.REQUEST_URI|h}-->" />
            <div class="block_body">
            
            
                <!--{if $tpl_login}-->
                    <p>ようこそ<br />
                        <span class="user_name"><!--{$tpl_name1|h}--> <!--{$tpl_name2|h}--> 様</span><br />
                        <!--{if $smarty.const.USE_POINT !== false}-->
                            所持ポイント：<span class="point"> <!--{$tpl_user_point|number_format|default:0}--> pt</span>
                        <!--{/if}-->
                    </p>
                    <!--{if !$tpl_disable_logout}-->
                        <p class="btn">
                            <input type="image" onmouseover="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_bloc_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_bloc_logout.jpg',this)" src="<!--{$TPL_URLPATH}-->img/button/btn_bloc_logout.jpg" onclick="fnFormModeSubmit('login_form', 'logout', '', ''); return false;" alt="ログアウト" />
                        </p>
                    <!--{/if}-->
                <!--{else}-->
                
                <div id="layout">
                    <div class="page">
                        <div class="flipInY form-container wow animated animated" data-wow-duration="1s" data-wow-iteration="1" style="visibility: visible; -webkit-animation: 1s 1;">
                            <h1 class="brand pad-v-1">
                            <a href="<!--{$smarty.const.HTTPS_URL}-->"><img alt="SUZURI" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri-logo-v-2ba32e5199c85b49e420621545041cf6.svg" width="120px">
                            </a></h1>
                            <div style="display:none">
                                <input name="utf8" type="hidden" value="✓" class="tooltipstered">
                                <input name="authenticity_token" type="hidden" value="TAk0iw8jmCJQeWUmyclWQEZjG0y5e31pouNBteqZ92s=" class="tooltipstered"></div><div class="signup-sns">
                                <h4 class="small mar-b-1">
                                                                                    ソーシャルサービスを<br class="visible-phone">利用してログイン
                                </h4>
                                <div class="login-sns-buttons">
                                    <a class="btn-s btn-twitter btn-nopadding" href="/auth/twitter"><i class="icon"></i><span>Twitter</span></a>
                                </div>
                            </div>
                            <div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" />
                                <input name="authenticity_token" type="hidden" value="2IarLYqYSVnh8w0QHh1rPUV/KiIkRUyFdsMM/RRYWWc=" />
                            </div>
                            <div class='signup-id'>
                                <h4 class='small mar-b-1'>
                                SUZURI ID でログイン
                                </h4>
                                <div class='signup-forms'>
                                    <div class='form_row mar-b-05'>
                                        <label for="session_name">Name</label>
                                            <input class="input-text" id="session_name" name="login_email" placeholder="SUZURI ID" type="text" />
                                    </div>
                                    <div class='form_row'>
                                        <label for="session_password">Password</label>
                                            <input class="input-text" name="login_pass" id="session_password" name="session[password]" placeholder="パスワード" type="password" />
                                    </div>
                                </div>
                                    <input type="submit" class="btn-m btn-blue loading-submit" name="commit" type="submit" value="ログイン" />
                            </div>
                            <p class='small mar-b-1'>
                                <a class="link-gray" href="<!--{$smarty.const.HTTP_URL}-->forgot"><i class='icon'>&#128165;</i><span>パスワードを忘れた</span></a></p>
                            <p class='small'>
                            <a class="link-gray" href="<!--{$smarty.const.HTTP_URL}-->signup"><i class='icon'>&#59136;</i><span>あたらしくアカウントをつくる</span></a></p>
                       </div>
                    <div>
                 </div>
                 <!--{/if}-->
            </div>
        </form>
    </div>
</div>
