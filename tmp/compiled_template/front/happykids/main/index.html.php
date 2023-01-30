<?php /* Template_ 2.2.7 2022/12/14 21:08:16 /www/yundamin18_godomall_com/data/skin/front/happykids/main/index.html 000002837 */  $this->include_("includeWidget","dataBanner");?>
<?php $this->print_("header",$TPL_SCP,1);?>


<div class="main_visual">
    <?php echo includeWidget('proc/_slider_banner.html','bannerCode','511517418')?>

</div>
<!-- //main_visual -->
<div class="main_content">
    <div class="main_slide_ban">
        <div class="main_ban_img01">
<?php if((is_array($TPL_R1=dataBanner('378864211'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
        </div>
        <!-- //main_slide -->
        <div class="main_banner">
            <div class="main_ban_img02">
<?php if((is_array($TPL_R1=dataBanner('735864301'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
            </div>
            <div class="main_slide02">
				<?php echo includeWidget('proc/_slider_banner.html','bannerCode','2881525519')?>

            </div>
        </div>
        <!-- //main_banner -->
    </div>
    <!-- //main_slide_ban -->
    <div class="main_goods_cont">
        <!-- 메인 상품 노출 --><?php echo includeWidget('goods/_goods_display_main.html','sno','1')?><!-- 메인 상품 노출 -->
    </div>
    <!-- //main_goods_cont -->
	 <div class="main_ban_img03">
<?php if((is_array($TPL_R1=dataBanner('3959528376'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?>
	</div>

    <div class="main_goods_cont best_prd">
        <!-- 메인 상품 노출 --><?php echo includeWidget('goods/_goods_display_main.html','sno','2')?><!-- 메인 상품 노출 -->
    </div>
    <!-- //main_goods_cont -->
	
	<div class="main_banner02">
		<ul>
			<li><?php if((is_array($TPL_R1=dataBanner('701821562'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></li>
			<li><?php if((is_array($TPL_R1=dataBanner('1317624213'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></li>
		</ul>
	</div>


	<div class="main_goods_cont">
		<!-- 메인 상품 노출 --><?php echo includeWidget('goods/_goods_display_main.html','sno','3')?><!-- 메인 상품 노출 -->
	</div>
</div>
<!-- //main_content -->



<?php $this->print_("footer",$TPL_SCP,1);?>