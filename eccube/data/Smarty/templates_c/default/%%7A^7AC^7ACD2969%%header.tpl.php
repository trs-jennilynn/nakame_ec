<?php /* Smarty version 2.6.27, created on 2014-10-02 15:07:25
         compiled from C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/header.tpl', 29, false),array('modifier', 'h', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/header.tpl', 29, false),)), $this); ?>

<!--▼HEADER-->
<?php echo '<div id="header_wrap"><div id="header" class="clearfix"><div id="logo_area"><!--<p id="site_description">EC-CUBE発!世界中を旅して見つけた立方体グルメを立方隊長が直送！</p>--><a href="'; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"><img src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/common/suzuri_logo.svg" alt="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrSiteInfo']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '/'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?><?php echo '" /></a></div><div id="header_utility"><div id="header_navi"><ul><li><a href="'; ?><?php echo ((is_array($_tmp=@CART_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"><img class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/common/btn_header_cart.jpg" alt="カゴの中を見る" /></a></li></ul></div></div></div></div>'; ?>

<!--▲HEADER-->