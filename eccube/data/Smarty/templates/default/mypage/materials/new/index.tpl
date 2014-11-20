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
.input-item-info {
    padding: 1em;
    color: white;
    background: #028760;
    overflow: hidden;
}
.input-item-info .form-groups {
    display:table;
    margin: 0 auto;
}
#one_maincolumn{
    background: #fbca4d;
}
</style>
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
                                <a class="btn-s btn-blue" href="<!--{$smarty.const.HTTPS_URL}-->mypage/materials"><i class="icon"></i>アップした素材を使う</a>
                                </li>
                        </ul>
                </div>
            </div>
            <form method="post" action="?" name="upload1" id="upload1" enctype="multipart/form-data">
	           <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
	           <input type="hidden" name="mode" value="upload" />
	           <input type="hidden" name="image_key" value="" />
	           
	            <div id="material-editor">
	                <div class="editor-main" style="height: 539px;">
	                    <section id="material-dropzone">
	                        <div class="progress"></div>
	                            <input class="needsclick" id="material-texture" name="material-texture" type="file" value="アップロード">
	                        <div class="uploader needsclick">
	                        <!--{if !$design_img}-->
	                            <div class="material-upload-preview" style="display:none">
	                                <img alt="Indicator" src="https://dijsur42hqnz1.cloudfront.net/assets/indicator-f9426268475f7328e4d6efd67bb7d414.gif" /> <!-- src="https://dijsur42hqnz1.cloudfront.net/assets/indicator-f9426268475f7328e4d6efd67bb7d414.gif" -->
	                            </div>
	                                <h1><i class="icon icon-large needsclick"></i><br><span class="visible-desktop needsclick">ここに画像ファイルをドラッグ</span><span class="visible-tablet needsclick">画像ファイルをアップロード</span><span class="visible-phone needsclick">画像ファイルを<br>アップロード</span></h1>
                                    <p>
                                        .jpg .png 形式に対応。
                                    </p>
                            <!--{else}-->
                                 <div class="material-upload-preview">
                                    <img alt="Indicator" src="../../../upload/mypage/new/<!--{$design_img}-->">
                                </div>
                               
                            <!--{/if}-->
	                                   <a class="uploaded" href="javascript:;" onclick="fnFormModeSubmit('upload1','load','image_key','material-texture'); return false">Testing</a>
	                            <p class="error"></p>
	                        </div>
	                    </section>
	                 </div>
	             </div>
             </form>
        </div>
    </div>
    <!--{if $design_img}-->
    <form name="save_item" id="" action="?" method="post" >
    <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
    <input type="hidden" name="mode" value="save">
    <input type="hidden" name="custid" value="">
    <input type="hidden" name="shirts" value="<!--{$img_shirt}-->">
    <input type="hidden" name="bag" value="<!--{$img_bag}-->">
    <input type="hidden" name="cup" value="<!--{$img_cup}-->">
    <input type="hidden" name="phone" value="<!--{$img_phone}-->">
    <input type="hidden" name="test" value="<!--{$test}-->">
    <input type='hidden' class='shirt_dis' name="shirt_stat" value="1" />
    <input type='hidden' class='bag_dis' name="bag_stat" value="1" />
    <input type='hidden' class='mug_dis' name="mug_stat" value="1" />
    <input type='hidden' class='phone_dis' name="phone_stat" value="1" />
    
        <section class="material-product-list">
                            <div class="container steps editor-step02" style="height: 244px;">
                            <div class="page">
                            <div id="material-product-preview"> <div class="side-panel">
                              <div class="heading align-center pad-v-2">
                                <p class="kerning">STEP</p>
                                <em class="kerning">2</em>
                                <h3>商品ができたので販売しよう</h3>
                              </div>
                              <div class="tips">
                                <ul class="pad-2">
                                  <li class="subtitle"><i class="icon">🎓</i>ひとことメモ</li>
                                  <li>販売したいアイテムを選んでください。</li>
                                  <li>タイトルと説明文を入力後、トリブンを設定してください。</li>
                                  <li>トリブンとは、商品が売れたときにあなたが手にするお金のことです。</li>
                                  <li>よし、販売をはじめよう！</li>
                                </ul>
                              </div>
                            </div>
                            
                            <div class="previews previews-editor">
                            
                            <div class="item published"><div class="check-icon">
                              <i class="icon">✓</i>
                            </div>
                            <div class="check-border"></div>
                            <div class="item-image">
                                <img src="<!--{$img_shirt}-->" class="unit_pic" style="display: inline;" />
                            </div>
                            <div class="item-info">
                              
                                <span class="color-button btn-xs btn-white kerning tooltipstered">カラー選択</span>
                              
                              
                              <h3>
                                <span class="title">Tシャツ</span>
                              </h3>
                              <span class="price">2080円</span>
                            </div>
                            
                            </div><div class="item published"><div class="check-icon">
                              <i class="icon">✓</i>
                            </div>
                            <div class="check-border"></div>
                            <div class="item-image">
                              
                                <img src="<!--{$img_cup}-->" class="unit_pic" style="display: inline;" />
                              
                            </div>
                            <div class="item-info">
                              
                              
                              <h3>
                                <span class="title">トートバッグ</span>
                              </h3>
                              <span class="price">1730円</span>
                            </div>
                            
                            </div><div class="item published"><div class="check-icon">
                              <i class="icon">✓</i>
                            </div>
                            <div class="check-border"></div>
                            <div class="item-image">
                              
                                <img src="<!--{$img_bag}-->" class="unit_pic" style="display: inline;" />
                              
                            </div>
                            <div class="item-info">
                              
                              
                                <span class="angle-button btn-xs btn-white kerning tooltipstered">アングル選択</span>
                              
                              <h3>
                                <span class="title">マグカップ</span>
                              </h3>
                              <span class="price">1390円</span>
                            </div>
                            
                            </div><div class="item published"><div class="check-icon">
                              <i class="icon">✓</i>
                            </div>
                            <div class="check-border"></div>
                            <div class="item-image">
                              
                                <img src="<!--{$img_phone}-->" class="unit_pic" style="display: inline;" />
                              
                            </div>
                            <div class="item-info">
                              
                              
                              <h3>
                                <span class="title">iPhoneケース</span>
                              </h3>
                              <span class="price">2000円</span>
                            </div>
                            
                            </div></div></div>
                            <div id="material-edit-form"><div class="input-item-info">
                              <div class="form-groups">
                                <div class="form-group">
                                  <label for="material-title">タイトル（必須）</label>
                                  <div class="form-control">
                                    <input type="text" id="material-title" class="input-large input-block" name="material[title]" placeholder="アイテムのタイトルを入力">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="material-description">説明文（任意）</label>
                                  <textarea type="text" id="material-description" class="input-normal" name="material[description]" placeholder="アイテムの説明文を入力"></textarea>
                                </div>
                                <div class="form-material-price form-group">
                                  <label for="material-price">トリブン（必須）</label>
                                  <p class="form-help">トリブンとは、あなたの取り分のことです。</p>
                                  <div class="form-control">
                                    <div id="material-price-slider" class="dragdealer">
                                      <div class="bar"></div>
                                      <div class="handle" style="left: 0px;">
                                        <div class="values">
                                          <span class="value-toribun" style="display: none;">+<span class="value">0</span>円</span>
                                          <span class="value-cost"><span class="value">原価</span></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="next-step pad-v-1 kerning align-center">
                                  <p id="message"></p>
                                  
                                    <a href="javascript:;" onclick="fnFormModeSubmit('save_item','itemsave','',''); return false" class="confirm-open btn-l btn-blue">商品を販売する</a>
                                    <div class="confirm-content confirm-product">
                                      <h3 class="confirm-title">
                                        本当に販売しますか？
                                      </h3>
                                      <p class="confirm-description">
                                        SUZURI では販売できない商品があります。<br>
                                        詳しくは<a href="/terms#article-8" target="_blank">会員規約の「登録禁止情報」</a>をご覧ください。
                                      </p>
                                      <button id="publish" type="button" class="btn-l btn-blue">販売する</button>
                                    </div>
                                  
                                </div>
                              </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </section>
                   </form>
       <!--{/if}-->
<!--{/strip}-->
