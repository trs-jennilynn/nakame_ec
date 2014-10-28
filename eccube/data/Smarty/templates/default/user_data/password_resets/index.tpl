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

<div class="section section-beige section-pad section-100">
<div class="container columns">
<div class="column">
<div class="column-content">
<h2>
パスワードの再設定
</h2>
<p>
パスワードの再設定を申請すると、再設定ページのURLがメールで通知されます。
</p>
<form accept-charset="UTF-8" action="/password_resets" method="post"><div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="oaT6oNaHkBZG0YWfXzduuoH6Unsmn3Jh7PlBGEN+p3Y="></div>
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
</div>