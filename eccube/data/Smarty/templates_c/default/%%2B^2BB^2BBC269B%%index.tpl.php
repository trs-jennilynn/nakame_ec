<?php /* Smarty version 2.6.26, created on 2014-11-13 18:32:09
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/mypage/materials/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/mypage/materials/index.tpl', 41, false),)), $this); ?>
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
<?php echo '<div class="page pad-v-6"><ul class="materials"><li class="material material-new"><a class="material-image" href="'; ?><?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'mypage/materials/new"><img alt="" src="https://dijsur42hqnz1.cloudfront.net/assets/icons/icon-plus-23082a483a652026fb2f94c393db39ee.png"></a><div class="material-info"><span class="material-title"><font><font>素材を追加する</font></font></span></div></li><li class="material material-100360"><div class="deldiv"><a class="delete material-delete" data-confirm="「sea」を削除します。この素材で作成された商品も非公開になりますが、よろしいですか？" data-method="delete" href="/account/materials/100360" rel="nofollow"><font><font>×</font></font></a></div><a class="material-image" href="/account/materials/100360"><img alt="1412158777 1920x1200.jpg" class="lens-image" height="323" src="https://d1q9av5b648rmv.cloudfront.net/v3/323x323/100360/1412158777-1920x1200.jpg.png?h=414ab38232e19f643896d4c799ebd03973268022" width="323"></a><div class="material-info"><span class="material-title"><font><font>sea</font></font></span></div></li></ul></div>'; ?>
