<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/proc/_recom_goods.html 000005932 */ ?>
<?php if($TPL_VAR["config"]["mobileDisplayFl"]=='y'){?>
<div class="latest_search_tab" data-type="recom"><h3><?php echo __('추천상품')?></h3></div>
<ul class="latest_search_list_box dn">
    <li class="goods_prd_item_s">
<?php if(in_array('img',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["img"]){?>
		<div class="goods_prd_img">
			<div class="img_box">
				<a href="../goods/goods_view.php?goodsNo=<?php echo $TPL_VAR["data"]["goodsNo"]?>">
					<div class="img"><img src="<?php echo $TPL_VAR["data"]["img"]?>" alt="<?php echo $TPL_VAR["data"]["goodsNm"]?>" ></div>
<?php if($TPL_VAR["data"]["soldOutFl"]=='y'||($TPL_VAR["data"]["stockFl"]=='y'&&$TPL_VAR["data"]["totalStock"]== 0)){?>
					<span class="soldout_img" title="<?php echo __('품절상품입니다.')?>" style="background-image:url('<?php echo $TPL_VAR["soldoutDisplay"]["soldout_overlay_img"]?>');"><?php echo __('품절')?></span>
<?php }?>
				</a>
			</div>
		</div>
<?php }?>
<?php if(in_array('goodsColor',$TPL_VAR["config"]["displayField"])){?>
		<?php echo $TPL_VAR["data"]["goodsColor"]?>

<?php }?>
		<div class="goods_prd_content">
			<div class="goods_list_info">
				<a href="../goods/goods_view.php?goodsNo=<?php echo $TPL_VAR["data"]["goodsNo"]?>">
					<ul class="goods_info_list">
<?php if(in_array('brandCd',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["cateNm"]){?>
						<li class="brand_name"><strong>[<?php echo $TPL_VAR["data"]["cateNm"]?>] <?php if(in_array('makerNm',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["makerNm"]){?><?php echo $TPL_VAR["data"]["makerNm"]?><?php }?></strong></li>
<?php }else{?>
<?php if(in_array('makerNm',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["makerNm"]){?>
						<li class="maker_name"><strong><?php echo $TPL_VAR["data"]["makerNm"]?></strong></li>
<?php }?>
<?php }?>
<?php if(in_array('goodsNm',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["goodsNm"]){?>
						<li class="prd_name"><?php echo $TPL_VAR["data"]["goodsNm"]?></li>
<?php }?>
<?php if(in_array('shortDescription',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["shortDescription"]){?>
						<li class="short_des"><?php echo $TPL_VAR["data"]["shortDescription"]?></li>
<?php }?>
<?php if(in_array('goodsPrice',$TPL_VAR["config"]["displayField"])){?>
<?php if($TPL_VAR["data"]["goodsPriceString"]){?>
						<li class="fixed_price"><?php echo $TPL_VAR["data"]["goodsPriceString"]?></li>
<?php }else{?>
<?php if($TPL_VAR["data"]["soldOutFl"]=='y'||($TPL_VAR["data"]["stockFl"]=='y'&&$TPL_VAR["data"]["totalStock"]== 0)){?>
						<li><?php echo __('품절')?></li>
<?php }else{?>
<?php if($TPL_VAR["data"]["goodsPrice"]){?>
						<li class="price" style="<?php if($TPL_VAR["data"]["timeSaleFl"]){?><?php }else{?><?php if(in_array('goodsPrice',$TPL_VAR["config"]["priceStrike"])&&((in_array('coupon',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["couponPrice"]!=''&&$TPL_VAR["data"]["goodsPriceDisplayFl"]=='y')||(in_array('goodsDiscount',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["dcPrice"]> 0))){?>text-decoration:line-through<?php }?><?php }?>"><?php echo __('판매가')?>: <?php echo gd_currency_symbol()?><?php echo gd_money_format($TPL_VAR["data"]["goodsPrice"])?><?php echo gd_currency_string()?></li>
<?php }?>
<?php }?>
<?php }?>
<?php }?>
<?php if(in_array('goodsDiscount',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["dcPrice"]> 0){?>
						<li class="price">
							<?php echo __('할인가')?> : <?php echo gd_currency_symbol()?><?php echo gd_global_money_format($TPL_VAR["data"]["goodsPrice"]-$TPL_VAR["data"]["dcPrice"])?><?php echo gd_currency_string()?> <?php echo gd_global_add_currency_display($TPL_VAR["data"]["goodsPrice"]-$TPL_VAR["data"]["dcPrice"])?><?php if(in_array('dcRate',$TPL_VAR["config"]["displayAddField"])&&gd_isset($TPL_VAR["data"]["goodsDcRate"])){?> <span>(<?php echo $TPL_VAR["data"]["goodsDcRate"]?>%)</span><?php }?>
						</li>
<?php }?>
<?php if(in_array('fixedPrice',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["fixedPrice"]> 0&&$TPL_VAR["data"]["goodsPriceDisplayFl"]=='y'){?>
						<li class="price" style="<?php if(in_array('fixedPrice',$TPL_VAR["config"]["priceStrike"])){?>text-decoration:line-through;<?php }?>"><?php echo __('정가')?> : <?php echo gd_currency_symbol()?><?php echo gd_money_format($TPL_VAR["data"]["fixedPrice"])?><?php echo gd_currency_string()?></li>
<?php }?>
<?php if(in_array('coupon',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["couponPrice"]&&$TPL_VAR["data"]["goodsPriceDisplayFl"]=='y'){?>
						<li class="coupon_price">
							<?php echo __('쿠폰가')?> : <span class="coupon_price1"><?php echo gd_currency_symbol()?><?php echo gd_money_format($TPL_VAR["data"]["couponPrice"])?><?php echo gd_currency_string()?></span>
<?php if(in_array('dcRate',$TPL_VAR["config"]["displayAddField"])&&gd_isset($TPL_VAR["data"]["couponDcRate"])){?> <span class="recom_number_box">(<?php echo $TPL_VAR["data"]["couponDcRate"]?>%)</span><?php }?>
						</li>
<?php }?>
<?php if(in_array('mileage',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["mileage"]&&$TPL_VAR["data"]["goodsPriceDisplayFl"]=='y'){?>
						<li class="list_mileage"><?php echo __('마일리지')?> : <?php echo $TPL_VAR["data"]["mileage"]?></li>
<?php }?>
<?php if(in_array('goodsModelNo',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["goodsModelNo"]){?>
						<li class="model_no"><?php echo __('모델번호')?>: <?php echo $TPL_VAR["data"]["goodsModelNo"]?></li>
<?php }?>
<?php if(in_array('goodsNo',$TPL_VAR["config"]["displayField"])&&$TPL_VAR["data"]["goodsNo"]){?>
						<li class="prd_code"><?php echo __('상품코드')?> : <?php echo $TPL_VAR["data"]["goodsNo"]?></li>
<?php }?>
					</ul>
				</a>
			</div>
		</div>
    </li>
</ul>
<?php }?>