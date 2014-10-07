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
    <div class="container steps editor-step01" style="height: 271px;">
        <div class="page">
            <div class="side-panel">
                <div class="heading align-center pad-v-2">
                    <p class="kerning">
                    STEP
                    </p>
                    <em class="kerning">
                    1
                    </em>
                    <h3>
                    画像をアップロードしよう
                    </h3>
                    </div>
                    <div class="tips">
                        <ul class="pad-2">
                                <li class="subtitle"><i class="icon">🎓</i><span>ひとことメモ</span></li>
                                <li>
                                なるべく大きな画像をアップした方がいいでしょう。<span class="hidden-phone">（<a class="link-blue" href="https://note.mu/suzurijp/n/ne250cf38cdcc" target="_blank">テンプレート</a>）</span></li>
                                <li>
                                ファイルサイズは【5MB】までです。
                                </li>
                                <li>
                                <a class="btn-s btn-blue" href="/account/materials"><i class="icon"></i>アップした素材を使う</a>
                                </li>
                        </ul>
                </div>
            </div>
            <div id="material-editor">
                <div class="editor-main" style="height: 539px;">
                    <section id="material-dropzone">
                        <div class="progress"></div>
                            <input class="needsclick" id="material-texture" name="material[texture]" type="file" value="アップロード">
                        <div class="uploader needsclick">
                            <div class="material-upload-preview" style="display:none">
                                <img alt="Indicator" src="https://dijsur42hqnz1.cloudfront.net/assets/indicator-f9426268475f7328e4d6efd67bb7d414.gif">
                            </div>
                                <h1><i class="icon icon-large needsclick"></i><br><span class="visible-desktop needsclick">ここに画像ファイルをドラッグ</span><span class="visible-tablet needsclick">画像ファイルをアップロード</span><span class="visible-phone needsclick">画像ファイルを<br>アップロード</span></h1>
                            <p>
                                .jpg .png 形式に対応。
                            </p>
                            <p class="error"></p>
                        </div>
                    </section>
                 </div>
             </div>
        </div>
    </div>
<!--{/strip}-->
