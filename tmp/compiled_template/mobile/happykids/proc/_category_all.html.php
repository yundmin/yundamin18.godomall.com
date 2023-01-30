<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/proc/_category_all.html 000003413 */ 
if (is_array($TPL_VAR["data"])) $TPL_data_1=count($TPL_VAR["data"]); else if (is_object($TPL_VAR["data"]) && in_array("Countable", class_implements($TPL_VAR["data"]))) $TPL_data_1=$TPL_VAR["data"]->count();else $TPL_data_1=0;?>
<ul class="category_side">
<?php if($TPL_data_1){foreach($TPL_VAR["data"] as $TPL_V1){?>
	<li>
<?php if($TPL_V1["children"]){?>
		<a href="#;"><?php echo $TPL_V1["cateNm"]?><span class="icon_plus">ICON</span></a>
		<ul>
			<li><a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V1["cateCd"]?>" class="icon_arrow"><?php echo __('전체보기')?></a></li>
<?php if((is_array($TPL_R2=$TPL_V1["children"])&&!empty($TPL_R2)) || (is_object($TPL_R2) && in_array("Countable", class_implements($TPL_R2)) && $TPL_R2->count() > 0)) {foreach($TPL_R2 as $TPL_V2){?>
			<li>
<?php if($TPL_V2["children"]){?>
				<a href="#;"><?php echo $TPL_V2["cateNm"]?><span class="icon_plus">ICON</span> </a>
				<ul>
					<li><a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V2["cateCd"]?>" class="icon_arrow"><?php echo __('전체보기')?></a></li>
<?php if((is_array($TPL_R3=$TPL_V2["children"])&&!empty($TPL_R3)) || (is_object($TPL_R3) && in_array("Countable", class_implements($TPL_R3)) && $TPL_R3->count() > 0)) {foreach($TPL_R3 as $TPL_V3){?>
					<li>
<?php if($TPL_V3["children"]){?>
						<a href="#;"><?php echo $TPL_V3["cateNm"]?><span class="icon_plus">ICON</span> </a>
						<ul>
							<li><a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V3["cateCd"]?>" class="icon_arrow"> - <?php echo __('전체보기')?></a></li>
<?php if((is_array($TPL_R4=$TPL_V3["children"])&&!empty($TPL_R4)) || (is_object($TPL_R4) && in_array("Countable", class_implements($TPL_R4)) && $TPL_R4->count() > 0)) {foreach($TPL_R4 as $TPL_V4){?>
							<li>
<?php if($TPL_V2["divisionFl"]=='n'){?>
								<a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V4["cateCd"]?>" class="icon_arrow"> - <?php echo $TPL_V4["cateNm"]?></a>
<?php }else{?>
								<a href="#;"> - <?php echo $TPL_V4["cateNm"]?><span class="icon_plus">ICON</span> </a>
<?php }?>
							</li>
<?php }}?>
						</ul>
<?php }else{?>
<?php if($TPL_V3["divisionFl"]=='n'){?>
							<a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V3["cateCd"]?>" class="icon_arrow"><?php echo $TPL_V3["cateNm"]?></a>
<?php }else{?>
							<a href="#;"><?php echo $TPL_V3["cateNm"]?><span class="icon_plus">ICON</span> </a>
<?php }?>
<?php }?>
					</li>
<?php }}?>
				</ul>
<?php }else{?>
<?php if($TPL_V2["divisionFl"]=='n'){?>
					<a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V2["cateCd"]?>" class="icon_arrow"><?php echo $TPL_V2["cateNm"]?></a>
<?php }else{?>
					<a href="#;"><?php echo $TPL_V2["cateNm"]?></a>
<?php }?>
<?php }?>
			</li>
<?php }}?>
		</ul>
<?php }else{?>
<?php if($TPL_V1["divisionFl"]=='n'){?>
		<a href="../goods/goods_list.php?<?php echo $TPL_VAR["cateCd"]?>=<?php echo $TPL_V1["cateCd"]?>" class="icon_arrow"><?php echo $TPL_V1["cateNm"]?></a>
<?php }else{?>
		<a href="#;"><?php echo $TPL_V1["cateNm"]?></a>
<?php }?>

<?php }?>
	</li>
<?php }}?>
</ul>