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

<!--{include file="`$smarty.const.TEMPLATE_REALDIR`popup_header.tpl" subtitle="パスワードを忘れた方(入力ページ)"}-->

<div id="window_area" class="section section-beige section-pad section-100">
    <h2> パスワードの再設定</h2>
    <p class="information">パスワードの再設定を申請すると、再設定ページのURLがメールで通知されます。<br />
    <label for="email">メールアドレス</label>
    <form action="?" method="post" name="form1">
    <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
    <input type="hidden" name="mode" value="mail_check" />

    <div id="forgot">
        <div class="contents">
            <div class="mailaddres">
                <p class="attention"><!--{$arrErr.email}--></p>
                <p>
                    <input type="text" name="email" value="<!--{$arrForm.email|default:$tpl_login_email|h}-->" class="box300" style="<!--{$arrErr.email|sfGetErrorColor}-->; ime-mode: disabled;" />
                </p>
            </div>
            <div class="name">
                <p class="attention">
                    <!--{$arrErr.name01}--><!--{$arrErr.name02}-->
                    <!--{$errmsg}-->
                </p>
            </div>
        </div>
    </div>
    <div class="btn_area">
        <ul>
            <li><input disable_with="申請中..."  value="再設定を申請する" type="submit" class="loading-submit"  alt="次へ" name="next" id="next" /></li>
        </ul>
    </div>
    </form>
</div>
<!--{include file="`$smarty.const.TEMPLATE_REALDIR`footer.tpl"}-->


<!-- <div class="section section-beige section-pad section-100">
    <div class="container columns">
        <div class="column">
            <div class="column-content">
                <h2>
                パスワードの再設定
                </h2>
                <p>
                パスワードの再設定を申請すると、再設定ページのURLがメールで通知されます。
                </p>
                <form accept-charset="UTF-8" action="?" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="oaT6oNaHkBZG0YWfXzduuoH6Unsmn3Jh7PlBGEN+p3Y="></div>
                    <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
                   <!--  <input type="hidden" name="mode" value="emailsub" />
                    
                    <div class="form-groups">
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <div class="form-control">
                            <input class="input-large" id="email" name="email" type="text" value="">
                            </div>
                        </div>
                        <div class="form-submit">
                        <input class="btn-s btn-blue loading-submit" disable_with="申請中..." name="commit" type="submit" value="再設定を申請する">
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div> -->
