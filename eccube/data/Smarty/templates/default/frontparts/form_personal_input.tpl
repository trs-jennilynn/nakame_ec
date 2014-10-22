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
<link href="<!--{$TPL_URLPATH}-->css/application-f3f29d259aa1d1d690c12266391bb719.css" media="all" rel="stylesheet" />
<script async="async" src="<!--{$TPL_URLPATH}-->js/application-fccb5e5a2e2897e4af5ccda4f7cfa3fd.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/signup.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/jquery.js"></script>
    <div id="layout">
<div class="page">
        <div class="flipInY form-container wow animated animated" data-wow-duration="1s" data-wow-iteration="1" style="visibility: visible; -webkit-animation: 1s 1;">
            <div class="form-inner">
                <h1 class="brand pad-v-1">
                <a href="<!--{$smarty.const.HTTPS_URL}-->"><img alt="SUZURI" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri-logo-v-2ba32e5199c85b49e420621545041cf6.svg" width="120px">
                </a></h1>
                
                <input name="utf8" type="hidden" value="✓" class="tooltipstered">
                <input name="authenticity_token" type="hidden" value="TAk0iw8jmCJQeWUmyclWQEZjG0y5e31pouNBteqZ92s=" class="tooltipstered"></div><div class="signup-sns">
                <h4 class="small mar-b-1">ソーシャルサービスを<br class="visible-phone">利用してサインアップ</h4>
                     <div class="login-sns-buttons">
                         <a class="btn-s btn-twitter btn-nopadding" href="/auth/twitter"><i class="icon"></i><span>Twitter</span></a>
                     </div>
            </div>
             <div class="signup-id">
                    <h4 class="small mar-b-1">
                    SUZURI ID を作成する
                    </h4>
                    <div class="signup-forms">
                    <div class="form_row mar-b-05">
                    <label for="user_name">アカウント</label>
                    <!--{assign var=key1 value="`$prefix`name01"}-->
                    <!--{if $arrErr[$key1] || $arrErr[$key2]}-->
                        <div class="attention"><!--{$arrErr[$key1]}--><!--{$arrErr[$key2]}--></div>
                    <!--{/if}-->
                   <input type="text" name="<!--{$key1}-->" value="<!--{$arrForm[$key1]|h}-->" maxlength="<!--{$smarty.const.STEXT_LEN}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: active;" class="box120 input-text tooltipstered" id="username" placeholder="アカウント" />
             </div>
             <div class="form_row mar-b-05">
                      <label for="user_email">メールアドレス</label>
                        <!--{if $flgFields > 1}-->
                
                        <!--{assign var=key1 value="`$prefix`email"}-->
                        <!--{assign var=key2 value="`$prefix`email02"}-->
                        <!--{if $arrErr[$key1] || $arrErr[$key2]}-->
                            <div class="attention"><!--{$arrErr[$key1]}--><!--{$arrErr[$key2]}--></div>
                        <!--{/if}-->
                        <input type="text" name="<!--{$key1}-->" value="<!--{$arrForm[$key1]|h}-->" id="email" placeholder="メールアドレス" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: disabled;" class="box300 top input-text tooltipstered invalid" /><br />
              </div>
    <!--{if $emailMobile}-->
              <div class="form_row mar-b-05">
                        <label for="user_email">メールアドレス</label>
                        <!--{assign var=key1 value="`$prefix`email_mobile"}-->
                        <!--{assign var=key2 value="`$prefix`email_mobile02"}-->
                        <!--{if $arrErr[$key1] || $arrErr[$key2]}-->
                        <div class="attention"><!--{$arrErr[$key1]}--><!--{$arrErr[$key2]}--></div>
                        <!--{/if}-->
                        <input type="text" name="<!--{$key1}-->" value="<!--{$arrForm[$key1]|h}-->" style="<!--{$arrErr[$key1]|sfGetErrorColor}-->; ime-mode: disabled;" maxlength="<!--{$smarty.const.MTEXT_LEN}-->" class="box300 top" /><br />
                        <input type="text" name="<!--{$key2}-->" value="<!--{$arrForm[$key2]|h}-->" style="<!--{$arrErr[$key1]|cat:$arrErr[$key2]|sfGetErrorColor}-->; ime-mode: disabled;" maxlength="<!--{$smarty.const.MTEXT_LEN}-->" class="box300" /><br />
              </div>
    <!--{/if}-->
    <!--{if $flgFields > 2}-->
              <div class="form_row mar-b-05">
                    <label for="user_password">パスワード</label>
                    <!--{if $arrErr.password || $arrErr.password02}-->
                        <div class="attention"><!--{$arrErr.password}--><!--{$arrErr.password02}--></div>
                    <!--{/if}-->
                    <input type="password" name="password" value="<!--{$arrForm.password|h}-->" maxlength="<!--{$smarty.const.PASSWORD_MAX_LEN}-->" style="<!--{$arrErr.password|sfGetErrorColor}-->" class="box120 input-text tooltipstered valid" placeholder="パスワード" id="password" />
              </div>
    <!--{/if}-->
<!--{/if}-->
              <div class="form_row mar-b-05">
                    <div class="form-checkbox">
                    <label class="small" for="terms_of_service"><input class="input-checkbox tooltipstered" id="terms_of_service" name="terms_of_service" type="checkbox" value="1">利用規約に同意する<br class="visible-phone">(<a class="link-gray" href="/terms" target="_blank">利用規約を読む</a>)
                    </label></div>
                    </div>
                    </div>
                    <div class="btn_area">
                        <ul>
                            <li>
                                <input type="submit" class="btn-m btn-blue tooltipstered" value="アカウントを作成する" alt="確認ページへ" name="confirm" id="confirm"  />
                            </li>
                        </ul>
                    </div>
                    </div>
                    <span class="small">
                    <a class="link-gray" href="/login"><i class="icon"></i><span>ログインする</span></a></span>