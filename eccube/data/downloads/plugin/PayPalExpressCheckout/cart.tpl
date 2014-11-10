<script type="text/javascript">

var arrDeliv = <!--{$arrDeliv}-->;
$(function() {
    for (key in arrDeliv) {
        if (arrDeliv[key].length > 0) {
            var btn = '<input type="image" src="<!--{$paypal_checkout_button_url}-->" onclick="fnFormModeSubmit(\'form' + key + '\', \'do_express\', \'\', \'\'); return false;" alt="<!--{t string="tpl_pp1"}-->" width="145" height="42" />';
            $('form#form' + key + ' div.btn_area ul, form#form' + key + ' .tblareabtn')
                .append('<li>' + btn + '</li>');
            var comment = '<p class="alignC"><!--{t string="tpl_pp2"}--></p>';
            $('form#form' + key + ' div.btn_area').before(comment); // for PC
            $('form#form' + key + ' .tblareabtn').after(comment); // for sphone v2.11.1
            $('form#form' + key + ' .formBox').after($(comment).css({'margin-bottom':'20px', // for sphone v2.11.2
                                                                     'text-align':'center'}))
                                              .after($(btn).css({'margin-right':'auto',
                                                                 'margin-left':'auto',
                                                                 'display':'block'})
                                                           .width(145));
        }
    }
});
</script>
<!--{include file=$include_mainpage}-->
