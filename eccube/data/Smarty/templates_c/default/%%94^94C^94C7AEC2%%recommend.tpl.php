<?php /* Smarty version 2.6.26, created on 2014-11-25 11:24:59
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 30, false),array('modifier', 'u', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 37, false),array('modifier', 'sfNoImageMainList', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 42, false),array('modifier', 'h', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 42, false),array('modifier', 'number_format', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/recommend.tpl', 51, false),)), $this); ?>
<style>
.item:nth-child(4n){
    float:left !important;
}
#recommend_area .block_body{
    padding-top:0px !important;
}
</style>
<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
    <div class="block_outer clearfix">
        <div id="recommend_area">
            <h2><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/title/tit_bloc_recommend.jpg" alt="*" class="title_icon" /></h2>
            <div class="block_body clearfix items-container">
                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['recommend_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['recommend_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrProduct']):
        $this->_foreach['recommend_products']['iteration']++;
?>
                    <div class="item" data-wow-delay="0.1s">
                        <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
">
	                        <div class="selected-badge-list">
	                           <img alt="ピックアップサレタヨ！" src="https://dijsur42hqnz1.cloudfront.net/assets/shop/pickup-badge-ff932d7bcbd2d11a8885ac0a0c7b7fab.png">
	                        </div>
	                        <div class="item-image">
	                           <img class="lens-image product-list-image" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
&amp;" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
	                        </div>
                        </a>
                        <div class="item-info">
                            <h3>
                                <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('u', true, $_tmp) : smarty_modifier_u($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a>
                            </h3>
                            <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
mypage?cust_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['customer_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" target="_self"><img alt="9" class="profile-avatar-list" src="../upload/mypage/profile/<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" width="20"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['name01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</a>
                            <p class="sale_price">
                                ¥<span class="price"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</span>
                           
                            </p>
                            
                            <form name="fav" id="fav" method="post" action="?">
                                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" name="mode" value="fav" />
                                <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
					            <input type="hidden" name="product_class_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="product_class_id" />
					            <input type="hidden" name="favorite_product_id" value="" />
	                            <div class="float-r pad-t-05">
		                            <?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
		                            <?php $this->assign('add_favorite', "add_favorite".($this->_tpl_vars['product_id'])); ?>
			                            <a class="btn btn-trans favorite-button" href="javascript:;" onclick="fnFormModeSubmit('fav','fav_like','favorite_product_id','<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); return false" target="_self" >
			                              <i class="icon text-red">♥</i>
	                                      <span class="favorites-count"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProduct']['total'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
			                            </a>
		                            <?php endif; ?>
		                        </div>
	                        </form>
                        </div>
                    </div>
                    <?php if (((is_array($_tmp=$this->_foreach['recommend_products']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) % 2 === 0): ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <div id="readmore">
				<a class="btn-l btn-darken btn-block" href="/products/list.php" target="_self"><i class="icon">✈</i>もっと見たい
				</a>
			</div>
        </div>
    </div>
<?php endif; ?>