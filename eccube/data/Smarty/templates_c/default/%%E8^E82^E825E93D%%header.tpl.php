<?php /* Smarty version 2.6.26, created on 2014-11-21 11:23:30
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/header.tpl', 24, false),array('modifier', 'h', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/header.tpl', 78, false),array('modifier', 'count', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/header.tpl', 86, false),)), $this); ?>

<!--▼HEADER-->
<?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
<script type="text/javascript">//<![CDATA[
    $(function(){
        var $login_email = $('#header_login_area input[name=login_email]');

        if (!$login_email.val()) {
            $login_email
                .val('メールアドレス')
                .css('color', '#AAA');
        }

        $login_email
            .focus(function() {
                if ($(this).val() == 'メールアドレス') {
                    $(this)
                        .val('')
                        .css('color', '#000');
                }
            })
            .blur(function() {
                if (!$(this).val()) {
                    $(this)
                        .val('メールアドレス')
                        .css('color', '#AAA');
                }
            });

        $('#header_login_form').submit(function() {
            if (!$login_email.val()
                || $login_email.val() == 'メールアドレス') {
                if ($('#header_login_area input[name=login_pass]').val()) {
                    alert('メールアドレス/パスワードを入力して下さい。');
                }
                return false;
            }
            return true;
        });
    });
    
//]]></script>
<?php endif; ?>
 <p></p>
    <div id='layout'>
        <header class='header'>
            <div class='header-inner'>
                <div class='brand wow fadeIn'>
                <a href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><img alt="SUZURI by GMOペパボ" class="header-logo hidden-phone" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri_by_gmopepabo-ac9967b6b53adef0f189f950e33e56a0.svg" />
                <img alt="SUZURI by GMOペパボ" class="header-logo visible-phone" src="https://dijsur42hqnz1.cloudfront.net/assets/common/suzuri_by_gmopepabo_sp-196b7335cf5d2bbf4f7c028b7b7d5bea.svg" />
                </a></div>
                <ul class='header-navs'>
                    <li class='header-nav'>
                        <a class="default_popup" href="<?php echo ((is_array($_tmp=@TOP_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
cart" rel="superbox[iframe][1020x600]" >
		                    <span class='btn-s btn-yellow view_cart'>
		                       <i class='icon'><img class="hover_change_image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/cart.png" alt="カゴの中を見る" /></i>
		                        <span id='nav-cart-count'><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_count'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span>
		                    </span>
	                    </a>
                    </li>
	                <li class='header-nav overlay-nav-open'>
	                    <span class='btn-s btn-blue'><i class='icon'>&#9776;</i>
		                    <div id="headerInternalColumn">
				            				            <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['HeaderInternalNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
				                				                <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['HeaderInternalNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['HeaderInternalNaviKey'] => $this->_tpl_vars['HeaderInternalNaviItem']):
?>
				                    <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
				                    <?php if (((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
				                        <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))), $this); ?>

				                    <?php else: ?>
				                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array('items' => ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				                    <?php endif; ?>
				                    <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['HeaderInternalNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 -->
				                <?php endforeach; endif; unset($_from); ?>
				                				            <?php endif; ?>
				            				            </div>
	                    </span>
	                </li>
	            </ul>
                  <nav id='overlay-nav'>
        <div id="overlay-nav-content" class="" style="height: 617px;">
        <span class="overlay-nav-close btn-s btn-red btn-close"><i class="icon">x</i>CLOSE
        </span>
        <ul class="account-navs">
        </li>
                <li class='account-nav'>
                <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
signup" target="_self"><span class='account-nav-label account-nav-label-m kerning'>
                ユーザー登録
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
login" target="_self"><span class='account-nav-label account-nav-label-m kerning'>
                ログイン
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php"><span class='account-nav-label account-nav-label-m kerning'>
                商品を探してまわる
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="https://twitter.com/suzurijp" target="_blank"><span class='account-nav-label account-nav-label-s kerning'><i class='icon'>&#62217;</i>Twitter
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="https://note.mu/suzurijp" target="_blank"><span class='account-nav-label account-nav-label-s kerning'>
                お役立ち情報を読む
                </span>
                </a></li>
                <li class='account-nav'>
                <a data-no-turbolink="true" href="jingu/kunshika.html"><span class='account-nav-label account-nav-label-s kerning'>
                神宮に詣でる
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="mailto:support@suzuri.jp?body=%E3%80%8C%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B%E3%81%82%E3%82%8A%E3%81%8C%E3%81%A8%E3%81%86%E3%81%94%E3%81%96%E3%81%84%E3%81%BE%E3%81%99%E3%80%82SUZURI%20%E3%81%A7%E3%81%99%E3%80%82%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B%E5%86%85%E5%AE%B9%E3%80%81%E3%81%94%E5%88%A9%E7%94%A8%E3%81%AE%E7%92%B0%E5%A2%83%E3%81%AA%E3%81%A9%E3%82%92%E3%81%A7%E3%81%8D%E3%82%8B%E3%81%A0%E3%81%91%E8%A9%B3%E3%81%97%E3%81%8F%E3%81%8A%E7%9F%A5%E3%82%89%E3%81%9B%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%82%E3%80%8DSUZURI%20by%20GMO%20Pepabo%2Cinc.&amp;subject=%5BSUZURI%5D%20%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B"><span class='account-nav-label account-nav-label-s kerning'>
                お問い合わせ
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
entry/kiyaku.php"><span class='account-nav-label account-nav-label-s kerning'>
                会員規約
                </span>
                </a><span>・</span><a href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
order"><span class='account-nav-label account-nav-label-s kerning'>
                特定商取引法に基づく表記
                </span>
                </a></li>
                <li class='account-nav'>
                <a href="http://pepabo.com/company/privacy/" target="_blank"><span class='account-nav-label account-nav-label-s kerning'>
                プライバシーポリシー
                </span>
                </a></li>
        
         </ul>
        <ul class="activities"><li class="activity" style="transform: rotate(12deg) perspective(0px) translate(0px, 0px); opacity: 1;">
          <a href="/hanasora">
            <img class="profile-avatar-list" src="https://dp3obxrw75ln8.cloudfront.net/users/avatars/22665.jpg?1411914396">
          </a>
        
        
        <a href="/hanasora/favorites">
          <span class="timeago">12日前、</span>
          hanasoraさん が【Rainbow iPhoneケース】にズッキュンしたよ。
        </a></li></ul>
        <div class="hint wow fadeInLeft animated animated" style="visibility: visible;">
        <p class="hint-content kerning">ジェームス・ブラウン・イズ・デッド。</p>
        </div>
        </div>
    </nav>
                
            </div>
        </header>
<!--▲HEADER-->
