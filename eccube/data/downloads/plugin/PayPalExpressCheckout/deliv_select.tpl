<div id="undercolumn">
    <div id="undercolumn_shopping">
        <h2 class="title"><!--{$tpl_title|h}--></h2>

        <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
        <input type="hidden" name="mode" value="do_express" />
        <input type="hidden" name="uniqid" value="<!--{$tpl_uniqid}-->" />
        <input type="hidden" name="cartKey" value="<!--{$cartKey|h}-->" />
        <input type="hidden" name="retry" value="1" />
        <!--{assign var=key value="deliv_id"}-->
        <div class="pay_area">
            <h3><!--{t string="tpl_pp3"}--></h3>
            <p><!--{t string="tpl_pp4"}--></p>

            <!--{if $arrErr[$key] != ""}-->
            <p class="attention"><!--{$arrErr[$key]}--></p>
            <!--{/if}-->
            <table summary="<!--{t string="tpl_pp59"}-->">
                <colgroup width="20%"></colgroup>
                <colgroup width="80%"></colgroup>
                <tr>
                    <th class="alignC"><!--{t string="tpl_pp5"}--></th>
                    <th class="alignC" colspan="2"><!--{t string="tpl_pp6"}--></th>
                </tr>
                <!--{section name=cnt loop=$arrDelivSelect}-->
                <tr>
                    <td class="alignC"><input type="radio" id="deliv_<!--{$smarty.section.cnt.iteration}-->" name="<!--{$key}-->" value="<!--{$arrDelivSelect[cnt].deliv_id}-->" style="<!--{$arrErr[$key]|sfGetErrorColor}-->" <!--{$arrDelivSelect[cnt].deliv_id|sfGetChecked:$arrForm[$key].value}--> />
                    </td>
                    <td>
                        <label for="deliv_<!--{$smarty.section.cnt.iteration}-->"><!--{$arrDelivSelect[cnt].name|h}--><!--{if $arrDelivSelect[cnt].remark != ""}--><p><!--{$arrDelivSelect[cnt].remark|h|nl2br}--></p><!--{/if}--></label>
                    </td>
                </tr>
                <!--{/section}-->
            </table>
            <div class="btn_area">
                <ul>
                    <li>
                      <a href="<!--{$smarty.const.CART_URLPATH}-->" onmouseover="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_back_on.jpg','back<!--{$key}-->');" onmouseout="chgImg('<!--{$TPL_URLPATH}-->img/button/btn_back.jpg','back<!--{$key}-->');">
                      <img src="<!--{$TPL_URLPATH}-->img/button/btn_back.jpg" alt="<!--{t string='tpl_pp7'}-->" name="back<!--{$key}-->" /></a>
                    </li>
                    <li>
                      <input type="image" onclick="fnFormModeSubmit('form1', 'do_express', '', ''); return false;" onmouseover="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_next_on.jpg',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_URLPATH}-->img/button/btn_next.jpg',this)" src="<!--{$TPL_URLPATH}-->img/button/btn_next.jpg" alt="<!--{t string='tpl_pp8'}-->" name="next" id="next" />
                    </li>
                </ul>
            </div>
        </div>
        </form>
    </div>
</div>
