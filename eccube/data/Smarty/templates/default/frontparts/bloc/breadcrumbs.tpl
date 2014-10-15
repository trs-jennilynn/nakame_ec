<div id="tpbrd">
<!--{* ▼BREAD CRUMBS *}-->
<div class="bread fL"><!--{$TopicPath}-->
        <a href="<!--{$smarty.const.HTTP_URL}-->">TOP</a><img src="<!--{$TPL_URLPATH}-->img/common/link_arrow.png" >
        <!--{section name=r loop=$arrRelativeCat}-->
                        <!--{section name=s loop=$arrRelativeCat[r]}-->
                            <a href="<!--{$smarty.const.ROOT_URLPATH}-->products/list.php?category_id=<!--{$arrRelativeCat[r][s].category_id}-->"><!--{$arrRelativeCat[r][s].category_name}--></a>
                            <!--{if !$smarty.section.s.last}--><img src="<!--{$TPL_URLPATH}-->img/common/link_arrow.png" ><!--{/if}-->
                        <!--{/section}-->
                <!--{/section}-->
                 <!--{if $arrProduct.name != ""}--><img src="<!--{$TPL_URLPATH}-->img/common/link_arrow.png" ><!--{/if}--><span> <!--{$arrProduct.name|h}--></span>
</div> 
<!--{* ▲BREAD CRUMBS *}-->
</div>