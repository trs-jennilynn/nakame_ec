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

<div class="section section-pad">
	<div class="container columns columns-2column">
		<ul class="page-navs">
			<li class="page-nav page-nav-profiles">
			<a class="btn-s btn-darken" href="/account/profile"><span class="kerning">
			プロフィール設定
			</span>
			</a></li>
			<li class="page-nav page-nav-bank-accounts">
			<a class="btn-s btn-darken" href="/account/bank_account"><span class="kerning">
			売上金の振込先情報
			</span>
			</a></li>
		</ul>
		
		<div class="column">
			<div class="column-content">
				<h2>
				アカウント名変更
				</h2>
				<form accept-charset="UTF-8" action="?" class="" id="profile-name" method="post">
				<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            	<input type="hidden" name="mode" value="username" />
				<div style="display:none">
				<input name="utf8" type="hidden" value="✓" class="tooltipstered">
				<input name="_method" type="hidden" value="put" class="tooltipstered">
				<input name="authenticity_token" type="hidden" value="ozauxojdrQhzZYUDWmTPCtg7/Sej/GZnm0C+Nte07Fs=" class="tooltipstered">
				</div>
				
				<div class="form-groups">
					<div class="form-group">
					<label for="user_name">アカウント名</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="user-name" name="user-name" type="text" value="<!--{$CustomerName1}-->">
					</div>
					</div>
					<div class="form-group">
					<label for="user_current_password">パスワード</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="userpass" name="userpass" type="password">
					</div>
					</div>
					<div class="form-submit">
					<input class="btn-s btn-blue loading-submit tooltipstered" name="commit1" id="commit1" type="submit" value="アカウント名を変更する">
					</div>
					</div>
				</form>
			</div>
			<div class="column-content">
				<h2>
				メールアドレス変更
				</h2>
				<form accept-charset="UTF-8" action="#" class="edit_user" id="edit_user_22795" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓" class="tooltipstered"><input name="_method" type="hidden" value="put" class="tooltipstered"><input name="authenticity_token" type="hidden" value="ozauxojdrQhzZYUDWmTPCtg7/Sej/GZnm0C+Nte07Fs=" class="tooltipstered"></div><div class="form-groups">
					<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            		<input type="hidden" name="mode" value="emailadd" />
					<div class="form-group">
					<span class="label">
					現在の登録メールアドレス
					</span>
					<div class="form-control">
					<span class="large">
					<!--{$CustomerEmail|h}-->
					</span>
					</div>
					</div>
					<div class="form-group">
					<label for="user_alter_email">新しいメールアドレス</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id=email name="email" type="text">
					</div>
					</div>
					<div class="form-group">
					<label for="user_current_password">パスワード</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="userpass" name="userpass" type="password">
					</div>
					</div>
					<div class="form-submit">
					<input class="btn-s btn-blue loading-submit tooltipstered" name="commit" type="submit" value="確認メールを送信する">
					</div>
					</div>
				</form>
			
			</div>
			<div class="column-content">
				<h2>
				パスワード変更
				</h2>
				<form accept-charset="UTF-8" action="#" class="edit_user" id="edit_user_22795" method="post">
				<div style="display:none">
				<input name="utf8" type="hidden" value="✓" class="tooltipstered">
				<input name="_method" type="hidden" value="put" class="tooltipstered">
				<input name="authenticity_token" type="hidden" value="ozauxojdrQhzZYUDWmTPCtg7/Sej/GZnm0C+Nte07Fs=" class="tooltipstered">
				</div>
				<div class="form-groups">
					<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
            		<input type="hidden" name="mode" value="password" />
					<div class="form-group">
					<label for="user_current_password">現在のパスワード</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="user_current_password" name="user[current_password]" type="password">
					</div>
					</div>
					<div class="form-group">
					<label for="user_password">新しいパスワード</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="user_password" name="user[password]" type="password">
					</div>
					</div>
					<div class="form-group">
					<label for="user_password_confirmation">新しいパスワード再入力</label>
					<div class="form-control">
					<input class="input-large tooltipstered" id="user_password_confirmation" name="user[password_confirmation]" type="password">
					</div>
					</div>
					<div class="form-submit">
					<input class="btn-s btn-blue loading-submit tooltipstered" name="commit" type="submit" value="パスワードを変更する">
					</div>
					</div>
				</form>
			
			</div>
		</div>
		<div class="column">
			<div class="column-content">
				<h2>
				ズッキュン通知メール
				</h2>
				<form accept-charset="UTF-8" action="#" class="edit_profile" id="edit_profile_22774" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓" class="tooltipstered"><input name="_method" type="hidden" value="put" class="tooltipstered"><input name="authenticity_token" type="hidden" value="ozauxojdrQhzZYUDWmTPCtg7/Sej/GZnm0C+Nte07Fs=" class="tooltipstered"></div>
					<div class="form-group">
					<span class="label">
					商品がズッキュンされたときに通知メールを送る
					</span>
					<div class="favorites-mail-button"><input checked="checked" id="profile_favorites_mail_unreceived_false" name="profile[favorites_mail_unreceived]" type="radio" value="false" class="tooltipstered"><label class="switch-on" for="profile_favorites_mail_unreceived_false">ON</label><input id="profile_favorites_mail_unreceived_true" name="profile[favorites_mail_unreceived]" type="radio" value="true" class="tooltipstered"><label class="switch-off" for="profile_favorites_mail_unreceived_true">OFF</label></div>
					</div>
					<div class="form-submit">
					<input class="btn-s btn-blue loading-submit tooltipstered" name="commit" type="submit" value="メール通知を変更する">
					</div>
				</form>
			
			</div>
			<div class="column-content">
				<h2>
				ソーシャル連携設定
				</h2>
				<a class="btn-s btn-twitter" href="/auth/twitter"><i class="icon"></i><span>Twitter と連携</span></a>
			</div>
			<div class="column-content" id="cancel_account">
				<h2>
				退会
				</h2>
			<form accept-charset="UTF-8" action="#" class="edit_user" id="edit_user_22795" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓" class="tooltipstered"><input name="_method" type="hidden" value="delete" class="tooltipstered"><input name="authenticity_token" type="hidden" value="ozauxojdrQhzZYUDWmTPCtg7/Sej/GZnm0C+Nte07Fs=" class="tooltipstered"></div><div class="form-groups">
				<div class="form-group">
				<label for="user_current_password">パスワード</label>
				<div class="form-control">
				<input class="input-large tooltipstered" id="user_current_password" name="user[current_password]" type="password">
				</div>
				</div>
				<div class="form-submit">
				<input class="btn-s btn-gray loading-submit tooltipstered" data-confirm="退会処理をおこないますが、よろしいですか？" name="commit" type="submit" value="SUZURI を退会する">
				</div>
				</div>
			</form>
			
			</div>
		</div>
	</div>
</div>
<!--{/strip}-->
