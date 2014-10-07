<?php /* Smarty version 2.6.27, created on 2014-10-07 19:37:19
         compiled from C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 42, false),array('modifier', 'strlen', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 48, false),array('modifier', 'h', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 50, false),array('modifier', 'number_format', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 130, false),array('modifier', 'sfPrePoint', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 160, false),array('modifier', 'nl2br_html', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 205, false),array('modifier', 'sfGetErrorColor', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 222, false),array('modifier', 'default', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 251, false),array('function', 'html_options', 'C:/xampp/htdocs/nakame_ec/eccube/html/../data/Smarty/templates/default/products/detail.tpl', 223, false),)), $this); ?>

<script type="text/javascript">//<![CDATA[
    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
//]]></script>
<div class="signup-header">
    <a class="btn-block btn-s btn-black pad-v-05" href="/signup">
        <span class="kerning bold">
                            今なら無料ユーザー登録で<br class="visible-phone"><span style="letter-spacing:-0.075em">作</span><span style="letter-spacing:-0.075em">っ</span>た<span style="letter-spacing:-0.05em">グ</span><span style="letter-spacing:-0.075em">ッ</span>ズがその場で当たる！ お<span style="letter-spacing:-0.075em">み</span><span style="letter-spacing:-0.075em">く</span>じ<span style="letter-spacing:-0.05em">キ</span><span style="letter-spacing:-0.05em">ャ</span>ンペーン実施中！
        </span>
    </a>
</div>
<div id="undercolumn">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
        <div id="detailarea" class="clearfix">
            <div id="detailphotobloc">
                <div class="photo">
                    <?php $this->assign('key', 'main_image'); ?>
                    <!--★画像★-->
                    <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_large_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                        <a
                            href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_large_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"
                            class="expansion"
                            target="_blank"
                        >
                    <?php endif; ?>
                        <img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['key']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['key']]['width'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['key']]['height'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="picture" />
                    <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_large_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_large_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                    <span class="mini">
                            <!--★拡大する★-->
                            <a
                                href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_large_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"
                                class="expansion"
                                target="_blank"
                            >
                                画像を拡大する</a>
                    </span>
                <?php endif; ?>
                        <div class="pad-2 hidden-tablet hidden-phone">
                        <ul class="small product-spec mar-b-2"><li>※画像は合成イメージです。実際の商品とは異なる場合があります。</li><li>発送までにかかる日数：5日</li><li>使用ボディ：Tシャツ 5オンス
                        <br>
                        <span class="text-red">
                        ※ボディのカラーによって価格が異なります。
                        </span></li><li>素材・材質：綿100％</li><li><table>
                        <tbody><tr><th>サイズ</th><th>着丈(cm)</th><th>身巾(cm)</th><th>袖丈(cm)</th></tr>
                        <tr><td>S</td><td>65</td><td>48</td><td>20</td></tr>
                        <tr><td>M</td><td>68</td><td>50</td><td>20</td></tr>
                        <tr><td>L</td><td>71</td><td>53</td><td>21</td></tr>
                        <tr><td>XL</td><td>75</td><td>58</td><td>22</td></tr>
                        <tr><td>XXL</td><td>80</td><td>63</td><td>24</td></tr>
                        <tr><td>XXXL</td><td>83</td><td>68</td><td>25</td></tr>
                        <tr><td>G-S (Ladies)</td><td>58</td><td>40</td><td>15</td></tr>
                        <tr><td>G-M (Ladies)</td><td>61</td><td>43</td><td>16</td></tr>
                        <tr><td>G-L (Ladies)</td><td>64</td><td>45</td><td>16</td></tr>
                        </tbody></table></li>
                        </ul>
                 </div>
            </div>

            <div id="detailrightbloc">
                <!--▼商品ステータス-->
                <?php $this->assign('ps', ((is_array($_tmp=$this->_tpl_vars['productStatus'][$this->_tpl_vars['tpl_product_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
                <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['ps'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
                    <ul class="status_icon clearfix">
                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['ps'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                        <li>
                            <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['arrSTATUS_IMAGE'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" width="60" height="17" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrSTATUS'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="icon<?php echo ((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                <?php endif; ?>
                <!--▲商品ステータス-->

                <!--★商品コード★-->
                <!--<dl class="product_code">
                    <dt>商品コード：</dt>
                    <dd>
                        <span id="product_code_default">
                            <?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_code_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                            <?php else: ?>
                                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_code_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
～<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_code_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>

                            <?php endif; ?>
                        </span><span id="product_code_dynamic"></span>
                    </dd>
                </dl>-->

                <!--★商品名★-->
                <h2><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>

                <!--★通常価格★-->
                <?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) > 0): ?>
                    <!--<dl class="normal_price">
                        <dt><?php echo ((is_array($_tmp=@NORMAL_PRICE_TITLE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
(税込)：</dt>
                        <dd class="price">
                            <span id="price01_default"><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo '～'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price01_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span><span id="price01_dynamic"></span>
                            円
                        </dd>
                    </dl>-->
                <?php endif; ?>

                <!--★販売価格★-->
                <dl class="sale_price">
                    <dt><!--$smarty.const.SALE_PRICE_TITLE(税込)：--></dt>
                    <dd class="price">
                        <span id="price02_default"><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo '～'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_max_inctax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span><span id="price02_dynamic"></span>
                        円
                    </dd>
                </dl>

                <!--★ポイント★-->
                <?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) !== false): ?>
                    <!--<div class="point">ポイント：
                        <span id="point_default"><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) == ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))))): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_min'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo '～'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['price02_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrePoint', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPrePoint($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrProduct']['point_rate'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span><span id="point_dynamic"></span>
                        Pt
                    </div>-->
                <?php endif; ?>

                                <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['maker_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                    <dl class="maker">
                        <dt>メーカー：</dt>
                        <dd><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['maker_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</dd>
                    </dl>
                <?php endif; ?>
                
                <!--▼メーカーURL-->
                <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                    <dl class="comment1">
                        <dt>メーカーURL：</dt>
                        <dd><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['comment1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a></dd>
                    </dl>
                <?php endif; ?>
                <!--▼メーカーURL-->

                <!--★関連カテゴリ★-->
                <!--<dl class="relative_cat">
                    <dt>関連カテゴリ：</dt>
                    <?php unset($this->_sections['r']);
$this->_sections['r']['name'] = 'r';
$this->_sections['r']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrRelativeCat'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['r']['show'] = true;
$this->_sections['r']['max'] = $this->_sections['r']['loop'];
$this->_sections['r']['step'] = 1;
$this->_sections['r']['start'] = $this->_sections['r']['step'] > 0 ? 0 : $this->_sections['r']['loop']-1;
if ($this->_sections['r']['show']) {
    $this->_sections['r']['total'] = $this->_sections['r']['loop'];
    if ($this->_sections['r']['total'] == 0)
        $this->_sections['r']['show'] = false;
} else
    $this->_sections['r']['total'] = 0;
if ($this->_sections['r']['show']):

            for ($this->_sections['r']['index'] = $this->_sections['r']['start'], $this->_sections['r']['iteration'] = 1;
                 $this->_sections['r']['iteration'] <= $this->_sections['r']['total'];
                 $this->_sections['r']['index'] += $this->_sections['r']['step'], $this->_sections['r']['iteration']++):
$this->_sections['r']['rownum'] = $this->_sections['r']['iteration'];
$this->_sections['r']['index_prev'] = $this->_sections['r']['index'] - $this->_sections['r']['step'];
$this->_sections['r']['index_next'] = $this->_sections['r']['index'] + $this->_sections['r']['step'];
$this->_sections['r']['first']      = ($this->_sections['r']['iteration'] == 1);
$this->_sections['r']['last']       = ($this->_sections['r']['iteration'] == $this->_sections['r']['total']);
?>
                        <dd>
                            <?php unset($this->_sections['s']);
$this->_sections['s']['name'] = 's';
$this->_sections['s']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrRelativeCat'][$this->_sections['r']['index']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['s']['show'] = true;
$this->_sections['s']['max'] = $this->_sections['s']['loop'];
$this->_sections['s']['step'] = 1;
$this->_sections['s']['start'] = $this->_sections['s']['step'] > 0 ? 0 : $this->_sections['s']['loop']-1;
if ($this->_sections['s']['show']) {
    $this->_sections['s']['total'] = $this->_sections['s']['loop'];
    if ($this->_sections['s']['total'] == 0)
        $this->_sections['s']['show'] = false;
} else
    $this->_sections['s']['total'] = 0;
if ($this->_sections['s']['show']):

            for ($this->_sections['s']['index'] = $this->_sections['s']['start'], $this->_sections['s']['iteration'] = 1;
                 $this->_sections['s']['iteration'] <= $this->_sections['s']['total'];
                 $this->_sections['s']['index'] += $this->_sections['s']['step'], $this->_sections['s']['iteration']++):
$this->_sections['s']['rownum'] = $this->_sections['s']['iteration'];
$this->_sections['s']['index_prev'] = $this->_sections['s']['index'] - $this->_sections['s']['step'];
$this->_sections['s']['index_next'] = $this->_sections['s']['index'] + $this->_sections['s']['step'];
$this->_sections['s']['first']      = ($this->_sections['s']['iteration'] == 1);
$this->_sections['s']['last']       = ($this->_sections['s']['iteration'] == $this->_sections['s']['total']);
?>
                                <a href="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php?category_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrRelativeCat'][$this->_sections['r']['index']][$this->_sections['s']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrRelativeCat'][$this->_sections['r']['index']][$this->_sections['s']['index']]['category_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</a>
                                <?php if (! ((is_array($_tmp=$this->_sections['s']['last'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo ((is_array($_tmp=@SEPA_CATNAVI)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php endif; ?>
                            <?php endfor; endif; ?>
                        </dd>
                    <?php endfor; endif; ?>
                </dl>-->
                
                <!--★詳細メインコメント★-->
                <div class="main_comment"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['main_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</div>

                <!--▼買い物かご-->

                <div class="cart_area clearfix">
                    <input type="hidden" name="mode" value="cart" />
                    <input type="hidden" name="product_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                    <input type="hidden" name="product_class_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_product_class_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" id="product_class_id" />
                    <input type="hidden" name="favorite_product_id" value="" />

                    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_stock_find'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_classcat_find1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                            <div class="classlist">
                                <!--▼規格1-->
                                <ul class="clearfix">
                                    <li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_class_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
：</li>
                                    <li>
                                        <select name="classcategory_id1" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['classcategory_id1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                                        <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrClassCat1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['classcategory_id1']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                                        </select>
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['classcategory_id1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                                        <br /><span class="attention">※ <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_class_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
を入力して下さい。</span>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                <!--▲規格1-->
                                <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_classcat_find2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <!--▼規格2-->
                                <ul class="clearfix">
                                    <li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_class_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
：</li>
                                    <li>
                                        <select name="classcategory_id2" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['classcategory_id2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
                                        </select>
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['classcategory_id2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                                        <br /><span class="attention">※ <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_class_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
を入力して下さい。</span>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                                <!--▲規格2-->
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <!--★数量★-->
                        <!--<dl class="quantity">
                            <dt>数量：</dt>
                            <dd><input type="text" class="box60" name="quantity" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['quantity']['value'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 1) : smarty_modifier_default($_tmp, 1)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@INT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" />
                                <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
                                    <br /><span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['quantity'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                <?php endif; ?>
                            </dd>
                        </dl>-->

                        <div class="cartin">
                            <div class="cartin_btn">
                                <div id="cartbtn_default">
                                    <!--★カゴに入れる★-->
                                    <a class="btn-l btn-blue btn-block mar-b-1" href="#" id="cart-in" target="_self"><i class="icon hidden-phone"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/cart_on.png" alt="カゴの中を見る" /></i><span>カートにいれる</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="attention" id="cartbtn_dynamic"></div>
                    <?php else: ?>
                        <div class="attention">申し訳ございませんが、只今品切れ中です。</div>
                    <?php endif; ?>

                    <!--★お気に入り登録★-->
                    <?php if (((is_array($_tmp=@OPTION_FAVORITE_PRODUCT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) === true): ?>
                        <div class="favorite_btn">
                            <?php $this->assign('add_favorite', "add_favorite".($this->_tpl_vars['product_id'])); ?>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['add_favorite']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <div class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['add_favorite']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</div>
                            <?php endif; ?>
                            <?php if (! ((is_array($_tmp=$this->_tpl_vars['is_favorite'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
                                <a href="javascript:eccube.changeAction('?product_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
'); eccube.setModeAndSubmit('add_favorite','favorite_product_id','<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
');"><img class="hover_change_image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_add_favorite.jpg" alt="お気に入りに追加" /></a>
                            <?php else: ?>
                                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_add_favorite_on.jpg" alt="お気に入り登録済" name="add_favorite_product" id="add_favorite_product" />
                                <script type="text/javascript" src="<?php echo ((is_array($_tmp=@ROOT_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/jquery.tipsy.js"></script>
                                <script type="text/javascript">
                                    var favoriteButton = $("#add_favorite_product");
                                    favoriteButton.tipsy({gravity: $.fn.tipsy.autoNS, fallback: "お気に入りに登録済み", fade: true });

                                    <?php if (((is_array($_tmp=$this->_tpl_vars['just_added_favorite'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == true): ?>
                                    favoriteButton.load(function(){$(this).tipsy("show")});
                                    $(function(){
                                        var tid = setTimeout('favoriteButton.tipsy("hide")',5000);
                                    });
                                    <?php endif; ?>
                                </script>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                 <div class="clearfix mar-b-1">
                    <div class="float-l" id="product-favorites"><button class="favorite-button btn-s btn-red kerning"><i class="icon">♥</i><span>ズッキュン</span></button></div>
                    <div id="widget"><span class="kerning btn-s btn-gray" id="widget-code"><i class="icon"></i><span>サ<span style="letter-spacing:-0.075em">イ</span><span style="letter-spacing:-0.075em">ト</span>で紹介</span></span></div>
                </div>
                <span class="page_view_count mar-b-1">
                <span class="mar-r-1"><i class="icon"></i><span>
                47
                </span><span class="hidden-phone">views</span></span>
                <span><i class="icon">♥</i><span>
                8
                </span><span class="hidden-phone kerning"><span style="letter-spacing:-0.05em">ズ</span><span style="letter-spacing:-0.075em">ッ</span><span style="letter-spacing:-0.05em">キ</span><span style="letter-spacing:-0.05em">ュ</span>ンズ</span></span>
            </span>
            <ul class="share-buttons pad-v-1">
                <li class="share-button share-button-facebook">
                <div class="fb-like fb_iframe_widget" data-action="like" data-layout="button_count" data-share="true" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=607713215973051&amp;href=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 145px; height: 20px;"><iframe name="f338f663c8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=607713215973051&amp;channel=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FKFZn1BJ0LYk.js%3Fversion%3D41%23cb%3Df3e78c00e4%26domain%3Dsuzuri.jp%26origin%3Dhttps%253A%252F%252Fsuzuri.jp%252Ff13cec0d98%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;layout=button_count&amp;locale=ja_JP&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 145px; height: 20px;" class=""></iframe></span></div>
                </li>
                <li class="share-button share-button-twitter">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/tweet_button.5e910aa7872029f6d652d9e5838088b3.ja.html#_=1412326152260&amp;count=horizontal&amp;hashtags=suzurijp&amp;id=twitter-widget-0&amp;lang=ja&amp;original_referer=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;size=m&amp;text=%E3%83%AD%E3%82%B6%E3%83%93%E3%83%BC%20(%20rosavy%20)%E3%81%AE%E3%82%AA%E3%83%94%E3%83%A8T%E3%82%B7%E3%83%A3%E3%83%84%20%E2%88%9E%20SUZURI&amp;url=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 139px; height: 20px;"></iframe>
                </li>
                <li class="share-button share-button-googleplus">
                <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1412326150057" name="I0_1412326150057" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=https%3A%2F%2Fsuzuri.jp&amp;url=https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.t4r-jMKfL1Q.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAItRSTOhh3AtYEbE2JK11RMx5mJii_4HMA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1412326150057&amp;parent=https%3A%2F%2Fsuzuri.jp&amp;pfname=&amp;rpctoken=69147120" data-gapiattached="true" title="+1"></iframe></div>
                </li>
                <li class="share-button share-button-line visible-phone">
                <a href="line://msg/text/%E3%83%AD%E3%82%B6%E3%83%93%E3%83%BC%20%28%20rosavy%20%29%E3%81%AE%E3%82%AA%E3%83%94%E3%83%A8T%E3%82%B7%E3%83%A3%E3%83%84%20%E2%88%9E%20SUZURI%20https%3A%2F%2Fsuzuri.jp%2Frosavy%2F75452%2Ft-shirt%2Fm%2Fnavy">
                <img alt="LINEで送る" height="20" src="https://dijsur42hqnz1.cloudfront.net/assets/linebutton_88x20-1fca5bd48632074dc2aa3e5da4276cfe.png" width="82">
                </a>
                </li>
            </ul>
            <div class="material-description pad-t-1">
                <p class="mar-b-1">オピヨ</p>
            </div>
                
            </div>
            <!--▲買い物かご-->
        </div>
    </form>

    <!--詳細ここまで-->


    <!--▼サブコメント-->
    <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=@PRODUCTSUB_MAX)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php $this->assign('key', "sub_title".($this->_sections['cnt']['index']+1)); ?>
        <?php $this->assign('ikey', "sub_image".($this->_sections['cnt']['index']+1)); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != "" || ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['ikey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
            <div class="sub_area clearfix">
                <h3><!--★サブタイトル★--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h3>
                <?php $this->assign('ckey', "sub_comment".($this->_sections['cnt']['index']+1)); ?>
                <!--▼サブ画像-->
                <?php $this->assign('lkey', "sub_large_image".($this->_sections['cnt']['index']+1)); ?>
                <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['ikey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                    <div class="subtext"><!--★サブテキスト★--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['ckey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</div>
                    <div class="subphotoimg">
                        <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['lkey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                            <a href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['lkey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="expansion" target="_blank" >
                        <?php endif; ?>
                        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['ikey']]['filepath'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct']['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['ikey']]['width'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" height="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrFile'][$this->_tpl_vars['ikey']]['height'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
                        <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['lkey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) >= 1): ?>
                            </a>
                            <span class="mini">
                                <a href="<?php echo ((is_array($_tmp=@IMAGE_SAVE_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['lkey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" class="expansion" target="_blank">
                                    画像を拡大する</a>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <p class="subtext"><!--★サブテキスト★--><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProduct'][$this->_tpl_vars['ckey']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('nl2br_html', true, $_tmp) : smarty_modifier_nl2br_html($_tmp)); ?>
</p>
                <?php endif; ?>
                <!--▲サブ画像-->
            </div>
        <?php endif; ?>
    <?php endfor; endif; ?>
    <!--▲サブコメント-->

</div>
<div class="product-control">
<div class="product-control float-l">
<div class="product-control-btns">
<a class="product-control-btn btn-s btn-gray" data-confirm="この商品を権利侵害の商品として通報しますか？" data-method="post" data-remote="true" href="/materials/75452/report" id="post_report" rel="nofollow" target="_self"><i class="icon">⚠</i><span class="hidden-phone">通報</span></a></div>
</div>
<div class="product-control float-r">
<div class="product-control-btns">
<a class="product-control-btn btn-s btn-darken" data-no-turbolink="true" href="/products/random" target="_self"><i class="icon-nopad">🔀</i><span class="hidden-phone">ランダム表示</span></a><a class="product-control-btn btn-s btn-yellow" href="/rosavy" target="_self"><i class="icon"></i><span class="kerning"><span style="letter-spacing:-0.05em">シ</span><span style="letter-spacing:-0.1em">ョ</span><span style="letter-spacing:-0.075em">ッ</span>プに戻る</span></a></div>
</div>
</div>