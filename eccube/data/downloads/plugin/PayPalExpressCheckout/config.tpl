<!--{include file="`$smarty.const.TEMPLATE_ADMIN_REALDIR`admin_popup_header.tpl"}-->
<script type="text/javascript">//<![CDATA[
self.moveTo(20,20);
self.resizeTo(620, 650);
self.focus();

function getApiSignature() {
    var url = '';
    if ($('input[name=use_sandbox]').attr('checked')) {
        url = '<!--{$smarty.const.PAYPAL_SANDBOX_API_SIGNATURE_URL}-->';
    } else {
        url = '<!--{$smarty.const.PAYPAL_API_SIGNATURE_URL}-->';
    }

    window.open(url, 'signature', 'width=360, height=500');
}

//]]>
</script>
<h2><!--{$tpl_subtitle}--></h2>
<form name="form1" id="form1" method="post" action="<!--{$smarty.server.REQUEST_URI|escape}-->">
<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
<input type="hidden" name="mode" value="edit">
<p class="remark"><!--{t string="tpl_pp16"}--><br/>
<a href="https://www.x.com/developers/paypal/products/express-checkout" target="_blank"><!--{t string="tpl_pp61"}--></a><br/>
<!--{t string="tpl_pp60"}--></p><!--{if $arrErr.err != ""}-->
    <div class="attention"><!--{$arrErr.err}--></div>
<!--{/if}-->

<table class="form">
  <colgroup width="20%"></colgroup>
  <colgroup width="40%"></colgroup>
  <tr>
    <th><!--{t string="tpl_pp18"}--><span class="attention">※</span></th>
    <td>
      <!--{assign var=key value="api_user"}-->
      <span class="attention"><!--{$arrErr[$key]}--></span>
      <input type="text" name="<!--{$key}-->" style="ime-mode:disabled; <!--{$arrErr[$key]|sfGetErrorColor}-->" value="<!--{$arrForm[$key].value|h}-->" class="box20" maxlength="<!--{$arrForm[$key].length}-->" />
      <p><!--{t string="tpl_pp54" escape="none"}--></p>
    </td>
  </tr>
  <tr>
    <th><!--{t string="tpl_pp19"}--><span class="attention">※</span></th>
    <td>
      <!--{assign var=key value="api_pass"}-->
      <span class="attention"><!--{$arrErr[$key]}--></span>
      <input type="password" name="<!--{$key}-->" style="ime-mode:disabled; <!--{$arrErr[$key]|sfGetErrorColor}-->" value="<!--{$arrForm[$key].value|h}-->" class="box20" maxlength="<!--{$arrForm[$key].length}-->" />
    </td>
  </tr>
  <tr>
    <th><!--{t string="tpl_pp20"}--><span class="attention">※</span></th>
    <td>
      <!--{assign var=key value="api_signature"}-->
      <span class="attention"><!--{$arrErr[$key]}--></span>
      <input type="text" name="<!--{$key}-->" style="ime-mode:disabled; <!--{$arrErr[$key]|sfGetErrorColor}-->" value="<!--{$arrForm[$key].value|h}-->" class="box40" maxlength="<!--{$arrForm[$key].length}-->" />
    </td>
  </tr>
  <tr>
    <th>
      <!--{t string="tpl_pp21"}-->
    </th>
    <td>
      <!--{assign var=key value="use_express_btn"}-->
      <span class="attention"><!--{$arrErr[$key]}--></span>
      <input type="checkbox" name="<!--{$key}-->" value="1" class="box40" id="<!--{$key}-->" <!--{if $arrForm[$key].value == 1}-->checked="checked"<!--{/if}--> />
      <p><!--{t string="tpl_pp22"}--></p>
      <p>
          
        <img src="<!--{$paypal_checkout_button_url}-->" align="left" style="margin-right:7px;" alt="PayPal Express checkout button" />
      </p>
    </td>
  </tr>
  <tr>
    <th><!--{t string="tpl_pp23"}--></th>
    <td>
      <!--{assign var=key value="use_sandbox"}-->
      <span class="attention"><!--{$arrErr[$key]}--></span>
      <input type="checkbox" name="<!--{$key}-->" value="1" class="box40" id="<!--{$key}-->" <!--{if $arrForm[$key].value == 1}-->checked="checked"<!--{/if}--> />
      <p><!--{t string="tpl_pp24"}--></p>
    </td>
  </tr>
</table>
<div class="btn-area">
  <ul>
    <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'edit', '', ''); return false;"><span class="btn-next"><!--{t string="tpl_pp25" escape="none"}--></span></a></li>
  </ul>
</div>
</form>
<!--{include file="`$smarty.const.TEMPLATE_ADMIN_REALDIR`admin_popup_footer.tpl"}-->