<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/proc/_header_search.html 000003494 */  $this->include_("includeWidget");
if (is_array($TPL_VAR["recentKeyword"])) $TPL_recentKeyword_1=count($TPL_VAR["recentKeyword"]); else if (is_object($TPL_VAR["recentKeyword"]) && in_array("Countable", class_implements($TPL_VAR["recentKeyword"]))) $TPL_recentKeyword_1=$TPL_VAR["recentKeyword"]->count();else $TPL_recentKeyword_1=0;?>
<div class="_header_search">
	<div class="layer_search_box">
		<form name="frmSearchTop" id="frmSearchTop" action="../goods/goods_search.php" method="get">
<?php if($TPL_VAR["adUrl"]){?>
			<input type="hidden" name="adUrl" value="<?php echo $TPL_VAR["adUrl"]?>"/>
<?php }?>
			<fieldset>
				<legend><?php echo __('검색하기')?></legend>
				<dl>
					<dt><label for="sch"><?php echo __('검색')?></label></dt>
					<dd>
						<div class="keyword_box">
							<input type="search" name="keyword" class="js_auto_focus" title="<?php echo $TPL_VAR["adKeyword"]?>" placeholder="<?php echo $TPL_VAR["adKeyword"]?>" id="sch" placeholder="<?php echo __('검색어를 입력해주세요.')?>" autocomplete="off"/>
							<button type="button" class="bn_wrg" style="display:block"><?php echo __('취소')?></button>
						</div>
					</dd>
				</dl>
			</fieldset>
			<button type="submit" class="h_search_btn"><?php echo __('검색')?></button>
			<button type="button" class="h_search_close_btn ly_btn_close"><?php echo __('닫기')?></button>
		</form>
	</div>
	<!-- //layer_search_box -->
	<div class="layer_search_content ly_ct">
		<div class="search_bx_area">
<?php if($TPL_VAR["recentCount"]> 0){?>
			<div class="latest_search_tab on" data-type="recent"><h3><?php echo __('최근검색어')?></h3></div>
			<div class="latest_search_list_box recent_list">
				<ul class="latest_search_list">
<?php if($TPL_VAR["recentKeyword"]){?>
<?php if($TPL_recentKeyword_1){foreach($TPL_VAR["recentKeyword"] as $TPL_V1){?>
					<li>
						<div class="link"><a href="../goods/goods_search.php?keyword=<?php echo urlencode($TPL_V1[ 0])?>"><?php echo $TPL_V1[ 0]?></a></div>
						<div class="date"><?php echo $TPL_V1[ 1]?></div>
						<div class="keyword_delete"><button type="button" class="js_recent_keyword_delete" data-recent-keyword="<?php echo $TPL_V1[ 0]?>"><?php echo __('삭제')?></button></div>
					</li>
<?php }}?>
<?php }else{?>
					<li><a><?php echo __('최근 검색어가 없습니다.')?></a></li>
<?php }?>
				</ul>
<?php if($TPL_VAR["recentKeyword"]){?>
				<div class="js_recent_all_delete latest_search_del"><?php echo __('전체삭제')?></div>
<?php }?>
			</div>
<?php }?>
<?php if($TPL_VAR["hitKeywordConfig"]["keyword"]){?>
			<div class="latest_search_tab <?php if($TPL_VAR["recentCount"]== 0){?>on<?php }?>" data-type="top"><h3><?php echo __('인기검색어')?></h3></div>
			<div class="latest_search_list_box <?php if($TPL_VAR["recentCount"]> 0){?>dn<?php }?>">
				<ul class="latest_search_list">
<?php if((is_array($TPL_R1=$TPL_VAR["hitKeywordConfig"]["keyword"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?>
					<li class="popular"><a href="../goods/goods_search.php?keyword=<?php echo urlencode($TPL_V1)?>"><?php echo $TPL_V1?></a></li>
<?php }}?>
				</ul>
			</div>
<?php }?>
			<?php echo includeWidget('proc/_recom_goods.html')?>

		</div>
		
	</div>
</div>
<!-- //layer_search -->