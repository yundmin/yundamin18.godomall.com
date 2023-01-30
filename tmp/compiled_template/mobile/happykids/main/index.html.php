<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/main/index.html 000003267 */  $this->include_("includeWidget","dataBanner");?>
<?php $this->print_("header",$TPL_SCP,1);?>

<div class="main">
	<!-- 상단메뉴 -->
	<ul class="main_top_menu">
		<li><a href="../mypage/wish_list.php"><?php echo __('찜리스트')?></a></li>
		<li><a href="../goods/goods_today.php"><?php echo __('최근본상품')?></a></li>
		<li><a href="../board/list.php?bdId=<?php echo $TPL_VAR["goodsReviewBdId"]?>"><?php echo __('상품후기')?></a></li>
		<li><a href="../board/list.php?bdId=<?php echo $TPL_VAR["goodsQaBdId"]?>"><?php echo __('상품문의')?></a></li>
	</ul>
	<!-- 슬라이더 -->
	<div class="main_slide">
		 <?php echo includeWidget('proc/_slider_banner.html','bannerCode','3606671697')?>

	</div>
	<!-- 메인배너 -->
	<div class="main_banner_box">
		<div class="main_banner_box_left">
<?php if((is_array($TPL_R1=dataBanner('2505697183'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
		</div>
		<div class="main_banner_box_right">
<?php if((is_array($TPL_R1=dataBanner('81393231'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
		</div>
	</div>
	<div class="main_slide2">
		<?php echo includeWidget('proc/_slider_banner.html','bannerCode','3837421641')?>

	</div>
	<div class="best_prd">
		<!-- 메인 상품 노출 --><?php echo includeWidget('goods/_goods_display_main.html','sno','4')?><!-- 메인 상품 노출 -->
	</div>
	<div class="recommend_prd">
		<div class="recommend_banner_box">
<?php if((is_array($TPL_R1=dataBanner('1772932566'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
		</div>
		<div class="recommend_txt">
<?php if((is_array($TPL_R1=dataBanner('86599979'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
		</div>
		<!-- 메인 상품 노출 --><?php echo includeWidget('goods/_goods_display_main.html','sno','5')?><!-- 메인 상품 노출 -->
	</div>
	<div class="main_banner_box2">
		<div><?php if((is_array($TPL_R1=dataBanner('3502198586'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></div>
		<div><?php if((is_array($TPL_R1=dataBanner('850944674'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></div>
	</div>
	<div class="new_prd">
		<?php echo includeWidget('goods/_goods_display_main.html','sno','6')?>

	</div>
</div>
<!-- //main -->
<?php $this->print_("footer",$TPL_SCP,1);?>