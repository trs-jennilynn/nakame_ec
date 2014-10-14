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
<div class="block_outer">
    <div id="header_login_area" class="clearfix">
        <form name="header_login_form" id="header_login_form" method="post" action="<!--{$smarty.const.HTTPS_URL}-->frontparts/login_check.php" onsubmit="return fnCheckLogin('header_login_form')">
        <input type="hidden" name="mode" value="login" />
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="url" value="<!--{$smarty.server.REQUEST_URI|h}-->" />
        <div class="block_body clearfix">
            <!--{if $tpl_login}-->
                <p class="btn">
                    <span class="user_name"><!--{$tpl_name1|h}--></span>
                    <!--{if !$tpl_disable_logout}-->
                      <input type="image" onmouseover="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/common/btn_header_logout_on.jpg',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/common/btn_header_logout.jpg',this)" src="<!--{$TPL_URLPATH}-->img/common/btn_header_logout.jpg" onclick="fnFormModeSubmit('header_login_form', 'logout', '', ''); return false;" alt="ログアウト" /><!--{/if}-->
                </p>
            <!--{else}-->
                <span class='hidden-phone'>メニュー</span>
            <!--{/if}-->
        </div>
       
        </form>
    </div>
</div>

<!--{if $tpl_login}-->
                 <nav id='overlay-nav'>
        <div id="overlay-nav-content" class="" style="height: 617px;">
        <span class="overlay-nav-close btn-s btn-red btn-close"><i class="icon">x</i>CLOSE
        </span>
        <ul class="account-navs">
        <li class="account-nav hello-nav">
        <span class="kerning">
        Hello!<!--{$tpl_name1|h}-->
        </span>
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
            <!--{else}-->
                
                 <nav id='overlay-nav'>
        <div id="overlay-nav-content" class="" style="height: 617px;">
        <span class="overlay-nav-close btn-s btn-red btn-close"><i class="icon">x</i>CLOSE
        </span>
        <ul class="account-navs">
        </li>
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
            <!--{/if}-->