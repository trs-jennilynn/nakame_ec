<?php /* Smarty version 2.6.26, created on 2014-10-16 11:45:12
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/frontparts/bloc/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 22, false),array('modifier', 'h', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 30, false),array('modifier', 'number_format', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 38, false),array('modifier', 'default', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login.tpl', 38, false),)), $this); ?>
<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/application-f3f29d259aa1d1d690c12266391bb719.css" media="all" rel="stylesheet" />
<script async="async" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/application-fccb5e5a2e2897e4af5ccda4f7cfa3fd.js"></script>

<div class="block_outer">
    <div id="login_area">
        <form name="login_form" id="login_form" method="post" action="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
frontparts/login_check.php" onsubmit="return fnCheckLogin('login_form')">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="login" />
            <input type="hidden" name="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
            <div class="block_body">
            
            
                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    <p>ようこそ<br />
                        <span class="user_name"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
 様</span><br />
                        <?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?>
                            所持ポイント：<span class="point"> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_user_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 pt</span>
                        <?php endif; ?>
                    </p>
                    <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <p class="btn">
                            <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_bloc_logout.jpg" onclick="fnFormModeSubmit('login_form', 'logout', '', ''); return false;" alt="ログアウト" />
                        </p>
                    <?php endif; ?>
                <?php else: ?>
                
                <div id="layout">
                    <div class="page">
                        <div class="flipInY form-container wow animated animated" data-wow-duration="1s" data-wow-iteration="1" style="visibility: visible; -webkit-animation: 1s 1;">
                            <h1 class="brand pad-v-1">
                            <a href="/"><img alt="SUZURI" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri-logo-v-2ba32e5199c85b49e420621545041cf6.svg" width="120px">
                            </a></h1>
                            <div style="display:none">
                                <input name="utf8" type="hidden" value="✓" class="tooltipstered">
                                <input name="authenticity_token" type="hidden" value="TAk0iw8jmCJQeWUmyclWQEZjG0y5e31pouNBteqZ92s=" class="tooltipstered"></div><div class="signup-sns">
                                <h4 class="small mar-b-1">
                                                                                    ソーシャルサービスを<br class="visible-phone">利用してログイン
                                </h4>
                                <div class="login-sns-buttons">
                                    <a class="btn-s btn-twitter btn-nopadding" href="/auth/twitter"><i class="icon"></i><span>Twitter</span></a>
                                </div>
                            </div>
                            <div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" />
                                <input name="authenticity_token" type="hidden" value="2IarLYqYSVnh8w0QHh1rPUV/KiIkRUyFdsMM/RRYWWc=" />
                            </div>
                            <div class='signup-id'>
                                <h4 class='small mar-b-1'>
                                SUZURI ID でログイン
                                </h4>
                                <div class='signup-forms'>
                                    <div class='form_row mar-b-05'>
                                        <label for="session_name">Name</label>
                                            <input class="input-text" id="session_name" name="login_email" placeholder="SUZURI ID" type="text" />
                                    </div>
                                    <div class='form_row'>
                                        <label for="session_password">Password</label>
                                            <input class="input-text" name="login_pass" id="session_password" name="session[password]" placeholder="パスワード" type="password" />
                                    </div>
                                </div>
                                    <input type="submit" class="btn-m btn-blue loading-submit" name="commit" type="submit" value="ログイン" />
                            </div>
                            <p class='small mar-b-1'>
                                <a class="link-gray" href="password_resets/new.html"><i class='icon'>&#128165;</i><span>パスワードを忘れた</span></a></p>
                            <p class='small'>
                            <a class="link-gray" href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
signup"><i class='icon'>&#59136;</i><span>あたらしくアカウントをつくる</span></a></p>
                       </div>
                    <div>
                 </div>
                 <?php endif; ?>
            </div>
        </form>
    </div>
</div>