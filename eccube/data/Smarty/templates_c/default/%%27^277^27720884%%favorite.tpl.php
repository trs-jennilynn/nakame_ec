<?php /* Smarty version 2.6.26, created on 2014-11-24 17:30:39
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/mypage/favorite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/favorite.tpl', 26, false),array('modifier', 'h', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/favorite.tpl', 26, false),array('modifier', 'u', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/favorite.tpl', 65, false),array('modifier', 'sfNoImageMainList', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/favorite.tpl', 65, false),array('modifier', 'number_format', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/favorite.tpl', 70, false),)), $this); ?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_navi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php else: ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@TEMPLATE_REALDIR)."mypage/navi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <div id="mycontents_area">
        <form name="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="order_id" value="" />
        <input type="hidden" name="pageno" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_pageno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="mode" value="" />
        <input type="hidden" name="product_id" value="" />
        <h3><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subtitle'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>

        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>

            <p><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
件</span>のお気に入りがあります。</p>
            <div class="paging">
                <!--▼ページナビ-->
                <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_strnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

                <!--▲ページナビ-->
            </div>

            <table summary="お気に入り">
                <col width="15%" />
                <col width="20%" />
                <col width="45%" />
                <col width="20%" />
                <tr>
                    <th class="alignC">削除</th>
                    <th class="alignC">商品画像</th>
                    <th class="alignC">商品名</th>
                    <th class="alignC"><?php echo ((is_array($_tmp=@SALE_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
(税込)</th>
                </tr>
                <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrFavorite'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
                    <?php $this->assign('product_id', ($this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['product_id'])); ?>
                    <tr>
                        <td class="alignC"><a href="javascript:fnModeSubmit('delete_favorite','product_id','<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');">削除</a></td>
                        <td class="alignC"><a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=65&amp;height=65"></a></td>
                        <td><a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a></td>
                        <td class="alignR sale_price">
                            <span class="price">
                                <?php if (((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

                                <?php else: ?>
                                    <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
～<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

                                <?php endif; ?>円</span>
                        </td>
                    </tr>
                <?php endfor; endif; ?>
            </table>
            <br />
            
            
            <!-- <div class="item box size11 product-cell" data-item-variant-id="83" data-product-id="93633" data-delay="1" data-height="395" data-width="329" data-state="move" id="1-2" style="width: 247.4px; position: absolute; opacity: 1; top: 0px; left: 0px; -webkit-transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s, opacity 0.5s; transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s, opacity 0.5s; height: 313px;">
			     <a class="product-permalink" href="/noriko/80339/iphone5-case/free/clear">
					<div class="selected-badge-list">
					     <img alt="Pickup Sareta Yo!" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-1e7abcf1a9e0692a4b7851726cb25140.png">
					</div>
					<div class="item-image">
					     <img alt="Hanako-chan iPhone Case" class="lens-image lazy product-list-image" data-original="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" height="323" src="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" width="323" style="display: inline;"><noscript>&lt;img alt="花子ちゃん iPhoneケース" class="lens-image lazy product-list-image" data-original="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" height="323" src="//d1q9av5b648rmv.cloudfront.net/v3/323x323/iphone5-case/free/clear/80339/1408358182-1370x2394.jpg.jpg?h=6a4f1684f61d0dbda916c8572620124162aee260" width="323" /&gt;</noscript>
					</div>
					<ul class="itemlist-btns">
					     <li>
					         <button class="favorite-button itemlist-btn-fav">
					             <i class="icon"><font><font>♥ </font></font></i>
					             <span class="favorites-count"><font><font>10</font></font></span>
					         </button>
					     </li>
					     <li>
					         <button class="add-choice-button itemlist-btn-choice">
					             <i class="icon"><font><font></font></font></i>
					         </button>
					     </li>
					</ul>
			     </a>
			     <div class="item-info">
			         <p class="material-title">
			         <a class="product-permalink" href="/noriko/80339/iphone5-case/free/clear">
			             <font><font>Hanako-chan</font></font>
			         </a></p>
			         <span class="item-author">
			             <a href="/noriko">
			                 <img alt="noriko" class="profile-avatar-list lazy" data-original="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" width="20" style="display: inline-block;"><noscript>&lt;img alt="noriko" class="profile-avatar-list lazy" data-original="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/19836.jpg?1407655877" width="20" /&gt;</noscript><font><font>noriko</font></font>
			             </a>
			         </span>
			         <span class="item-price">
			         <font><font> 
					¥ 2,268
					</font></font>
					</span>
				</div>
			</div> -->
			
			<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrFavorite'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
                    <?php $this->assign('product_id', ($this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['product_id'])); ?>
			<div class="product_item item clearfix" data-item-variant-id="11" data-product-id="14032" data-wow-delay="0.1s">
                        
                        <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
">
                            <div class="selected-badge-list">
                               <img alt="ピックアップサレタヨ！" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-ff932d7bcbd2d11a8885ac0a0c7b7fab.png">
                            </div>
                            
                            <div class="productImage item-image">
                               <img href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;width=65&amp;height=65"/>
                            </div>
                        </a>
                        <div class="productContents item-info">
                            <h3>
                            
                                <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a>
                            </h3>
                            
                            <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage" target="_self"><img alt="9" class="profile-avatar-list" src="../upload/mypage/profile/<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" width="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a>
                            <p class="sale_price">
                                ¥<span class="price">
                              
                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

                                </span>
                           
                            </p>
                            
                            <form name="fav" id="fav" method="post" action="?">
                                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" name="mode" value="fav" />
                                <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                <input type="hidden" name="product_class_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="product_class_id" />
                                <input type="hidden" name="favorite_product_id" value="" />
                                <div class="float-r pad-t-05">
                                    
                                        <a class="btn btn-trans favorite-button" href="javascript:fnChangeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); fnFormModeSubmit('fav','fav_like','favorite_product_id','<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); return false" target="_self" >
                                          <i class="icon text-red">♥</i>
                                          <span class="favorites-count"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrFavorite'][$this->_sections['cnt']['index']]['num_of_likes'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        </a>
                                   
                                </div>
                            </form>
                        </div>
                        
                    </div>
            <?php endfor; endif; ?>
            
        <?php else: ?>
            <p>お気に入りが登録されておりません。</p>
        <?php endif; ?>
        </form>
    </div>
</div>