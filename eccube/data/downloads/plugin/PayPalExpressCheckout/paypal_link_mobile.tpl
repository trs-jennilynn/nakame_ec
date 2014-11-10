<center><font color="red"><!--{t string="tpl_pp53"}--></font></center>
<form action="./load_payment_module.php" method="post">
<input type="hidden" name="mode" value="return">
<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
<center><input type="submit" value="<!--{t string="tpl_pp29"}-->"></center>
</form>
