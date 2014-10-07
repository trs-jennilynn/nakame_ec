<?php /* Smarty version 2.6.27, created on 2014-10-02 15:57:35
         compiled from contents/recommend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'contents/recommend.tpl', 53, false),array('modifier', 'h', 'contents/recommend.tpl', 53, false),array('modifier', 'sfNoImageMainList', 'contents/recommend.tpl', 109, false),array('modifier', 'sfGetErrorColor', 'contents/recommend.tpl', 125, false),array('modifier', 'sfGetEnabled', 'contents/recommend.tpl', 125, false),)), $this); ?>

<script type="text/javascript">
<!--
function lfnCheckSubmit( fm ){
    var err = '';

    if ( ! fm["product_id"].value ){
        err += '商品を選択して下さい。';
    }

    if ( fm["comment"] && !fm["comment"].value ){
        if ( err ) err += '';
        err += 'コメントを入力して下さい。';
    }

    if ( err ){
        alert(err);
        return false;
    } else {
        if(window.confirm('内容を登録しても宜しいですか')){
                fm.submit();
                return true;
        }
    }
}

function lfnCheckSetItem( rank ){
    var flag = true;
    var checkRank = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    if ( checkRank ){
        if ( rank != checkRank ){
            if( ! window.confirm('さきほど選択した<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
位の情報は破棄されます。宜しいでしょうか')){
                flag = false;
            }
        }
    }

    if ( flag ){
        eccube.openWindow('./recommend_search.php?rank=' + rank,'search','615','600',{menubar:'no'});
    }
}

function lfnSortItem(mode,data){
    var flag = true;
    var checkRank = '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
';
    if ( checkRank ){
        if( ! window.confirm('さきほど選択した<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['checkRank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
位の情報は破棄されます。宜しいでしょうか')){
            flag = false;
        }
    }

    if ( flag ){
        document.form1["mode"].value = mode;
        document.form1["best_id"].value = data;
        document.form1.submit();
    }
}

//-->
</script>

<div id="admin-contents" class="contents-main">
    <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['tpl_disp_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
    <div class="recommend-product <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '2'): ?>hidden<?php endif; ?>">
        <table class="list center recommend-table">
            <col width="13%" />
            <col width="73%" />
            <col width="7%" />
            <col width="7%" />
            <tr>
                <th>順位</th>
                <th>商品/コメント</th>
                <th>編集</th>
                <th>削除</th>
                <th>並び替え</th>
            </tr>

            <tr>
                <td>おすすめ商品(<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
)</td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <td>
                            <div class="clearfix table-wrap">
                                <div class="table-img">
                                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                        <img src="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfNoImageMainList', true, $_tmp) : SC_Utils_Ex::sfNoImageMainList($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" width="100" height="100" />
                                    <?php endif; ?>
                                </div>
                                <div class="table-detail">
                                    <div class="detail-name">
                                        商品名： <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                                    </div>
                                    <div class="detail-form">
                                        <form name="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" method="post" action="?">
                                            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                            <input type="hidden" name="mode" value="regist" />
                                            <input type="hidden" name="best_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['best_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <input type="hidden" name="category_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <input type="hidden" name="rank" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                            <textarea class="top" name="comment" cols="45" rows="4" style="width: 586px; height: 80px; <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetEnabled', true, $_tmp) : SC_Utils_Ex::sfGetEnabled($_tmp)); ?>
><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    <?php else: ?>
                        <td class="AlignLeft">
                            <a class="btn-action-m" href="javascript:;" onclick="lfnCheckSetItem('<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;" target="_blank"><span class="btn-next">商品を選択する</span></a>
                            <form name="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" method="post" action="?">
                                <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                                <input type="hidden" name="mode" value="regist" />
                                <input type="hidden" name="best_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['best_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                <input type="hidden" name="category_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                                <input type="hidden" name="rank" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['rank'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
                            </form>
                        </td>
                    <?php endif; ?>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <a href="javascript:;" onclick="lfnCheckSetItem('<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); return false;" target="_blank">
                            編集
                        </a>
                    <?php else: ?>
                        - -
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <a href="javascript:;" onclick="return eccube.insertValueAndSubmit( document.form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
, 'mode', 'delete', '削除します。宜しいですか' )">削除</a>
                    <?php else: ?>
                        - -
                    <?php endif; ?>
                </td>
                <td>
                                        <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 1 && ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <a href="?" onclick="lfnSortItem('up',<?php echo ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['best_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">上へ</a><br />&nbsp;
                    <?php endif; ?>
                    <?php if (((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['tpl_disp_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <a href="?" onclick="lfnSortItem('down',<?php echo ((is_array($_tmp=$this->_tpl_vars['arrItems'][$this->_sections['cnt']['iteration']]['best_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">下へ</a>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <div class="btn-area">
            <a class="btn-action" href="javascript:;" onclick="lfnCheckSubmit(document.form<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;"><span class="btn-next">この内容で登録する</span></a>
        </div>
    </div>
    <!--▲おすすめ商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
    <?php endfor; endif; ?>
</div>