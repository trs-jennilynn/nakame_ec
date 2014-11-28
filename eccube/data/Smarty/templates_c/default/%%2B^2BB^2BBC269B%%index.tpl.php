<?php /* Smarty version 2.6.26, created on 2014-11-21 19:45:47
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/mypage/materials/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/materials/index.tpl', 47, false),)), $this); ?>
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
</style>
<?php echo '<div class="page pad-v-6"><ul class="materials"><li class="material material-new"><a class="material-image" href="/mypage/materials/new"><img alt="" src="https://dijsur42hqnz1.cloudfront.net/assets/icons/icon-plus-23082a483a652026fb2f94c393db39ee.png"></a><div class="material-info"><span class="material-title"><font><font>素材を追加する</font></font></span></div></li><form name="listform" id="listform" action="?" method="post"><input type="hidden" name="'; ?><?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" /><input type="hidden" name="mode" value="list">'; ?><?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrdesigns'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['design'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['design']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['arrdesign']):
        $this->_foreach['design']['iteration']++;
?><?php echo '<li class="material material-100360"><input type="hidden" name="id" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrdesign']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"><div class="deldiv"><a class="delete material-delete" href="javascript:;" onclick="fnFormModeSubmit(\'listform\',\'delete\',\'\',\'\'); return false" ><font><font>×</font></font></a></div><a class="material-image" href="/mypage/materials/edit.php?des_img='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrdesign']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"><img alt="1412158777 1920x1200.jpg" class="lens-image" height="323" src="../../../upload/mypage/new/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrdesign']['note'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '" width="323"></a><div class="material-info"><span class="material-title"><font><font>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['arrdesign']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '</font></font></span></div></li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</form></ul></div>'; ?>
