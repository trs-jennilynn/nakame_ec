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
<style>
    .material-delete{
        position: absolute;
		background: rgb(236, 84, 6);
		padding: 15px 15px 15px 15px;
		left: 179px;
		visibilty:hidden;
    }
    .material-image{
        display: table-header-group;
    }
    .deldiv{
		display:none;
    }
</style>
<!--{strip}-->
            <div class="page pad-v-6">
                <ul class="materials">
                    <li class="material material-new">
                        <a class="material-image" href="<!--{$smarty.const.HTTPS_URL}-->mypage/materials/new"><img alt="" src="https://dijsur42hqnz1.cloudfront.net/assets/icons/icon-plus-23082a483a652026fb2f94c393db39ee.png">
                        </a>
                        <div class="material-info">
                        <span class="material-title"><font><font>
                                                            素材を追加する
                        </font></font></span>
                        </div>
                    </li>
                    <li class="material material-100360">
                        <div class="deldiv">
                            <a class="delete material-delete" data-confirm="「sea」を削除します。この素材で作成された商品も非公開になりますが、よろしいですか？" data-method="delete" href="/account/materials/100360" rel="nofollow"><font><font>×</font></font></a>
                        </div>
                        <a class="material-image" href="/account/materials/100360"><img alt="1412158777 1920x1200.jpg" class="lens-image" height="323" src="https://d1q9av5b648rmv.cloudfront.net/v3/323x323/100360/1412158777-1920x1200.jpg.png?h=414ab38232e19f643896d4c799ebd03973268022" width="323">
                        </a>
                            <div class="material-info">
                            <span class="material-title"><font><font>
                            sea
                            </font></font></span>
                            </div>
                    </li>
                </ul>
            </div>
<!--{/strip}-->
