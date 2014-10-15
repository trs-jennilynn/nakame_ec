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
                     <!--{if $tpl_login}-->
                        <a class="btn-xl btn-blue bold" data-no-turbolink="true" href="/materials/new" target="_self"><i class="icon"></i><span style="letter-spacing:-0.075em">オ</span><span style="letter-spacing:-0.075em">リ</span>ジナル<span style="letter-spacing:-0.05em">グ</span><span style="letter-spacing:-0.075em">ッ</span>ズを作る</a>
                     <!--{else}-->
                        <a class="signup-button btn-yellow btn-l" data-no-turbolink="true" href="/signup" target="_self">
                            <span class="bold hidden-phone">
                                <i class="icon"></i>
                                <span class="kerning">ユーザー登
                                    <span style="letter-spacing:-0.075em">録</span>
                                    <span style="letter-spacing:-0.12em">し</span>て
                                    <span style="letter-spacing:-0.05em">グ</span>
                                    <span style="letter-spacing:-0.075em">ッ</span>ズを作る
                               </span>
                            </span>
                            <span class="bold visible-phone">
                                <i class="icon">&#59136;</i>
                                    <span class="kerning">無料ユーザー登録</span>
                            </span>
                        </a>
                        <a class="signup-button btn-twitter btn-l" data-no-turbolink="true" href="https://api.twitter.com/oauth/authenticate?lang=ja&amp;oauth_token=rJYCqfZml4tpUNR0jy06uWg2Pe1JANMB" target="_self">
                            <span class="bold">
                                <i class="icon"><img class="splash-tagline" src="<!--{$TPL_URLPATH}-->img/common/twitter.png" /></i>
                                    <span class="kerning"></span>
                                        Twitterではじめる
                            </span>
                        </a>
                     <!--{/if}-->
                    </div>
            </div>
    </div>
<!--{/strip}-->
