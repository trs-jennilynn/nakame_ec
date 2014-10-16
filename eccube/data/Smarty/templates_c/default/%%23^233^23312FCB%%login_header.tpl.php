<?php /* Smarty version 2.6.26, created on 2014-10-16 19:27:18
         compiled from C:%5Cxampp%5Chtdocs%5Cnakame_ec%5Ceccube%5Chtml/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl', 4, false),array('modifier', 'h', 'C:\\xampp\\htdocs\\nakame_ec\\eccube\\html/../data/Smarty/templates/default/frontparts/bloc/login_header.tpl', 7, false),)), $this); ?>

<div class="block_outer">
    <div id="header_login_area" class="clearfix">
        <form name="header_login_form" id="header_login_form" method="post" action="<?php echo ((is_array($_tmp=@HTTPS_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
frontparts/login_check.php" onsubmit="return fnCheckLogin('header_login_form')">
        <input type="hidden" name="mode" value="login" />
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <input type="hidden" name="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
        <div class="block_body clearfix">
            <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                
                    <span class="user_name"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</span>
                    <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                    </span></li></ul>
                  <nav id='overlay-nav'>
			        <div id="overlay-nav-content" class="" style="height: 617px;">
			        <span class="overlay-nav-close btn-s btn-red btn-close"><i class="icon">x</i>CLOSE
			        </span>
			        <ul class="account-navs">
			        </li>
			                <li class="account-nav hello-nav">
					        <span class="kerning">
					        Hello!<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

					        </span>
					        </li>
					        <li class="account-nav">
					        <a data-no-turbolink="true" href="/materials/new" target="_self"><span class="account-nav-label account-nav-label-m kerning" style="margin-right: 0px; opacity: 1;">
					        <span style="letter-spacing:-0.05em">グ</span><span style="letter-spacing:-0.075em">ッ</span>ズを作る
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="/mypage/index.php?<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" target="_self"><span class="account-nav-label account-nav-label-m kerning" style="margin-right: 0px; opacity: 1;">
					        マイ<span style="letter-spacing:-0.05em">シ</span><span style="letter-spacing:-0.1em">ョ</span><span style="letter-spacing:-0.075em">ッ</span>プ
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
/favorites" target="_self"><span class="account-nav-label account-nav-label-m kerning" style="margin-right: 0px; opacity: 1;">
					        <span style="letter-spacing:-0.05em">ズ</span><span style="letter-spacing:-0.075em">ッ</span><span style="letter-spacing:-0.05em">キ</span><span style="letter-spacing:-0.05em">ュ</span>ン履歴
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a data-no-turbolink="true" href="/orders" target="_self"><span class="account-nav-label account-nav-label-m kerning" style="margin-right: 0px; opacity: 1;">
					        売<span style="letter-spacing:-0.25em">上</span><span style="letter-spacing:-0.325em">・</span><span style="letter-spacing:-0.15em">ト</span><span style="letter-spacing:-0.075em">リ</span>ブン
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a data-no-turbolink="true" href="/profile" target="_self"><span class="account-nav-label account-nav-label-m kerning" style="margin-right: 0px; opacity: 1;">
					        設定
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="/selections" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;"><i class="icon">?</i>商品を<span style="letter-spacing:-0.075em">探</span><span style="letter-spacing:-0.12em">し</span>てまわる
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="https://twitter.com/suzurijp" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;"><i class="icon">?</i>Twitter
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="https://note.mu/suzurijp" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        お役立ち情報を読む
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a data-no-turbolink="true" href="/jingu/kunshika" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        神宮に詣でる
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="mailto:support@suzuri.jp?body=%E3%80%8C%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B%E3%81%82%E3%82%8A%E3%81%8C%E3%81%A8%E3%81%86%E3%81%94%E3%81%96%E3%81%84%E3%81%BE%E3%81%99%E3%80%82SUZURI%20%E3%81%A7%E3%81%99%E3%80%82%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B%E5%86%85%E5%AE%B9%E3%80%81%E3%81%94%E5%88%A9%E7%94%A8%E3%81%AE%E7%92%B0%E5%A2%83%E3%81%AA%E3%81%A9%E3%82%92%E3%81%A7%E3%81%8D%E3%82%8B%E3%81%A0%E3%81%91%E8%A9%B3%E3%81%97%E3%81%8F%E3%81%8A%E7%9F%A5%E3%82%89%E3%81%9B%E3%81%8F%E3%81%A0%E3%81%95%E3%81%84%E3%80%82%E3%80%8DSUZURI%20by%20GMO%20Pepabo%2Cinc.&amp;subject=%5BSUZURI%5D%20%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        お問い合わせ
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
entry/kiyaku.php" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        会員規約
					        </span>
					        </a><span>・</span><a href="<?php echo ((is_array($_tmp=@HTTP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
order" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        特定商取引法に基<span style="letter-spacing:-0.075em">づ</span><span style="letter-spacing:-0.075em">く</span>表記
					        </span>
					        </a></li>
					        <li class="account-nav">
					        <a href="http://pepabo.com/company/privacy/" target="_self"><span class="account-nav-label account-nav-label-s kerning" style="margin-right: 0px; opacity: 1;">
					        プライバシー<span style="letter-spacing:-0.075em">ポ</span><span style="letter-spacing:-0.075em">リ</span>シー
					        </span>
					        </a></li>
			                <li class='account-nav'>
			                    <p class="btn logout">
			                      <input type="submit" value="ログアウト" onclick="fnFormModeSubmit('header_login_form', 'logout', '', '');  return false;" alt="ログアウト" /><?php endif; ?>
			                    </p>
			                    
			                </li>
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
                
            <?php else: ?>
                <span class='hidden-phone'>メニュー</span>
            <?php endif; ?>
        </div>
       
        </form>
    </div>
</div>

                
                