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
#leftcolumn, .flow_area, .shop_information, .section{
    display: none;
}
.frame_outer{
    background: #007bbb !important;
    height: 100%;
}
#two_maincolumn_right{
	float:none;
	margin:0 auto;
	padding-right:0px;
	background:#fff;
	margin-top: 10px;
}
h2.title{
	border-top:0px;
	color:#333;
	background:transparent;
	background-color:none;
	border-bottom:2px solid #333;
	display:inline-block;
	margin-bottom:30px;
}
#undercolumn_shopping{
text-align:center;
}
.btn-gray{
	color:#fff !important;
	padding:10px;
}
.btn-gray:hover{
text-decoration:none !important;
}
.message{
font-weight:normal !important;
}
</style>
<div id="undercolumn">
    <div id="undercolumn_shopping">
        <p class="flow_area">
            <img src="<!--{$TPL_URLPATH}-->img/picture/img_flow_04.jpg" alt="購入手続きの流れ" />
        </p>
        <h2 class="title"><!--{$tpl_title|h}--></h2>

        <!-- ▼その他決済情報を表示する場合は表示 -->
        <!--{if $arrOther.title.value}-->
            <p><span class="attention">■<!--{$arrOther.title.name}-->情報</span><br />
                <!--{foreach key=key item=item from=$arrOther}-->
                    <!--{if $key != "title"}-->
                        <!--{if $item.name != ""}-->
                            <!--{$item.name}-->：
                        <!--{/if}-->
                            <!--{$item.value|nl2br}--><br />
                    <!--{/if}-->
                <!--{/foreach}-->
            </p>
        <!--{/if}-->
        <!-- ▲コンビに決済の場合には表示 -->

        <div id="complete_area">
            <p class="message">
					ありがとうございます。 <br />
					の注文が完了しました。 <br />
					確認のEメールを送信いたしました。ご確認ください。<br />
					<br />
					購入した商品をシェアしよう!
            <div class="shop_information">
                <p class="name"><!--{$arrInfo.shop_name|h}--></p>
                <p>TEL：<!--{$arrInfo.tel01}-->-<!--{$arrInfo.tel02}-->-<!--{$arrInfo.tel03}--> <!--{if $arrInfo.business_hour != ""}-->（受付時間/<!--{$arrInfo.business_hour}-->）<!--{/if}--><br />
                E-mail：<a href="mailto:<!--{$arrInfo.email02|escape:'hex'}-->"><!--{$arrInfo.email02|escape:'hexentity'}--></a>
                </p>
            </div>
        </div>

        <div class="btn_area">
            <ul>
                <li>
                    <a href="<!--{$smarty.const.TOP_URLPATH}-->" class="btn-gray"> 買い物をつづける</a>
                </li>
            </ul>
        </div>

    </div>
</div>
