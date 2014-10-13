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
