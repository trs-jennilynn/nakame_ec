<?php /* Smarty version 2.6.27, created on 2014-10-08 19:23:09
         compiled from C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/orders/index.tpl */ ?>

<div class='section section-pad'>
<div class='container'>
<h2>
売上とトリブン
</h2>
<div class='totals mar-b-2'>
<div class='total current-sales'>
<div class='total-content'>
<h3 class='title'>
<span>
今月の売上
</span>
</h3>
<span class='number'>
&yen;0
</span>
<span class='small text-gray'>
（※毎月末にリセットされます）
</span>
</div>
</div>
<div class='total current-toribun'>
<div class='total-content'>
<h3 class='title'>
<span>
現在のトリブン
</span>
</h3>
<span class='number'>
&yen;0
</span>
<p class='mar-b-05'>
<a class="link-gray" href="/account/bank_account">口座情報を設定してください</a>
</p>
<span class='btn btn-s btn-disabled'><i class='icon'>&#10227;</i>金にする
</span>

</div>
</div>
</div>
<div class='block-table-responsive'>
<h2>
振込履歴
</h2>
<ul class='earnings block-table mar-b-2'>
<li class='earning block-tr hidden-phone'>
<div class='earning-transferred-on block-th'>
振込日
</div>
<div class='earning-status block-th'>
ステータス
</div>
<div class='earning-amount block-th'>
振込額
</div>
<div class='earning-transfer-fee block-th'>
振込手数料
</div>
</li>
</ul>
<h2>
注文履歴
</h2>
<ul class='details block-table'>
<li class='detail block-tr hidden-phone'>
<div class='detail-product-icon block-th'></div>
<div class='detail-product block-th hidden-desktop'>
商品
</div>
<div class='detail-product-name block-th visible-desktop'>
商品名
</div>
<div class='detail-product-quantity block-th visible-desktop'>
個数
</div>
<div class='detail-purchaser block-th visible-desktop'>
購入者
</div>
<div class='detail-time block-th'>
日時
</div>
<div class='detail-price block-th'>
売上
</div>
<div class='detail-profit block-th'>
トリブン
</div>
</li>
</ul>