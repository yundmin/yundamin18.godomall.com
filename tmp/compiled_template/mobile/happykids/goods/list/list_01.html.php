<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/goods/list/list_01.html 000010870 */ 
if (is_array($TPL_VAR["goodsList"])) $TPL_goodsList_1=count($TPL_VAR["goodsList"]); else if (is_object($TPL_VAR["goodsList"]) && in_array("Countable", class_implements($TPL_VAR["goodsList"]))) $TPL_goodsList_1=$TPL_VAR["goodsList"]->count();else $TPL_goodsList_1=0;?>
<?php if($TPL_VAR["goodsList"]){?>
<?php if($TPL_goodsList_1){foreach($TPL_VAR["goodsList"] as $TPL_V1){?>
<?php if((is_array($TPL_R2=$TPL_V1)&&!empty($TPL_R2)) || (is_object($TPL_R2) && in_array("Countable", class_implements($TPL_R2)) && $TPL_R2->count() > 0)) {foreach($TPL_R2 as $TPL_V2){?>
<li class="goods_prd_item2 <?php if($TPL_VAR["themeInfo"]["lineCnt"]> 1){?>list_num_<?php echo $TPL_VAR["themeInfo"]["lineCnt"]?><?php }?>">
	<div class="goods_prd_item2_box">
		<div class="goods_prd_img">
			<div class="img_box">
				<a href="<?php echo gd_goods_url($TPL_V2["goodsUrl"],$TPL_V2["goodsNo"], 1)?>" target="<?php if($TPL_VAR["themeInfo"]["relationLinkFl"]=='blank'){?>_blank<?php }else{?>_self<?php }?>">
<?php if(in_array('img',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsImage"])){?><div class="img"><?php echo $TPL_V2["goodsImage"]?></div><?php }?>
<?php if($TPL_VAR["themeInfo"]["soldOutIconFl"]=='y'&&$TPL_V2["soldOut"]=='y'&&$TPL_VAR["soldoutDisplay"]["soldout_overlay"]!='0'){?>
					<span class="soldout_img" title="<?php echo __('품절상품입니다.')?>" style="background-image:url('<?php echo $TPL_VAR["soldoutDisplay"]["soldout_overlay_img"]?>');"><?php echo __('품절')?></span>
<?php }?>
<?php if($TPL_V2["timeSaleFl"]){?>
					<span class="timesale_img"><img src="/data/skin/mobile/happykids/img/icon/icon_timesale.png" alt="<?php echo __('타임세일')?>"><?php echo __('타임세일')?></span>
<?php }?>
<?php if(in_array('coupon',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["couponPrice"]!=''){?>
					<span class="coupon_img" <?php if(!in_array('img',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsImage"])){?>style="right:initial;" <?php }?>>
						<img src="/data/skin/mobile/happykids/img/icon/icon_coupon_img.png" alt="<?php echo __('상품쿠폰')?>">
					</span>
<?php }?>
				</a>
			</div>
		</div>
<?php if(in_array('goodsColor',$TPL_VAR["themeInfo"]["displayField"])){?>
		<?php echo $TPL_V2["goodsColor"]?>

<?php }?>
		<div class="goods_prd_content">
			<div class="goods_list_info">
				<a href="<?php echo gd_goods_url($TPL_V2["goodsUrl"],$TPL_V2["goodsNo"], 1)?>" target="<?php if($TPL_VAR["themeInfo"]["relationLinkFl"]=='blank'){?>_blank<?php }else{?>_self<?php }?>">
<?php if($TPL_VAR["themeInfo"]["iconFl"]=='y'){?>
				<div class="goods_prd_icon"><?php echo $TPL_V2["goodsIcon"]?></div>
<?php }?>
<?php if($TPL_VAR["themeInfo"]["soldOutIconFl"]=='y'&&$TPL_V2["soldOut"]=='y'&&$TPL_VAR["soldoutDisplay"]["soldout_icon"]!='disable'){?>
				<div class="goods_prd_soldout"><img src="<?php echo $TPL_VAR["soldoutDisplay"]["soldout_icon_img"]?>" alt="<?php echo __('품절')?>"></div>
<?php }?>
					<ul class="goods_info_list">
<?php if(in_array('brandCd',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["brandNm"])){?>
						<li class="brand_name"><?php echo $TPL_V2["brandNm"]?></li>
<?php }?>
<?php if(in_array('makerNm',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["makerNm"])){?>
						<li class="maker_name"><?php echo $TPL_V2["makerNm"]?></li>
<?php }?>
<?php if(in_array('goodsNm',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsNm"])){?>
						<li class="prd_name"><?php echo $TPL_V2["goodsNm"]?></li>
<?php }?>
<?php if(in_array('shortDescription',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["shortDescription"])){?>
						<li class="short_des"><?php echo $TPL_V2["shortDescription"]?></li>
<?php }?>
<?php if(in_array('fixedPrice',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["fixedPrice"])&&$TPL_V2["fixedPrice"]> 0&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
						<li class="<?php if(in_array('fixedPrice',$TPL_VAR["themeInfo"]["priceStrike"])){?>fixed_price<?php }?>">
							<?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["fixedPrice"])?><?php echo gd_global_currency_string()?>

							<span class='add_currency'><?php echo gd_global_add_currency_display($TPL_V2["fixedPrice"])?></span>
						</li>
<?php }?>
<?php if(in_array('goodsPrice',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsPrice"])){?>
						<li class="price<?php if(!$TPL_V2["timeSaleFl"]){?><?php if(in_array('goodsPrice',$TPL_VAR["themeInfo"]["priceStrike"])&&((in_array('coupon',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["couponPrice"]!=''&&$TPL_V2["goodsPriceDisplayFl"]=='y')||(in_array('goodsDiscount',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["dcPrice"]> 0))){?> fixed_price<?php }?><?php }?>">
							<span <?php if(!(in_array('coupon',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["couponPrice"]!='')){?>class="c_price"<?php }?>>
<?php if($TPL_VAR["themeInfo"]["soldOutIconFl"]=='y'&&$TPL_V2["soldOut"]=='y'&&$TPL_VAR["soldoutDisplay"]["soldout_price"]=='text'){?>
								<?php echo $TPL_VAR["soldoutDisplay"]["soldout_price_text"]?>

<?php }elseif($TPL_VAR["themeInfo"]["soldOutIconFl"]=='y'&&$TPL_V2["soldOut"]=='y'&&$TPL_VAR["soldoutDisplay"]["soldout_price"]=='custom'){?>
								<img src="<?php echo $TPL_VAR["soldoutDisplay"]["soldout_price_img"]?>" alt="<?php echo $TPL_VAR["soldoutDisplay"]["soldout_price_img_filename"]?>" />
<?php }else{?>
<?php if($TPL_V2["goodsPriceString"]!=''){?>
								<?php echo $TPL_V2["goodsPriceString"]?>

<?php }else{?>
<?php if($TPL_V2["timeSaleFl"]&&$TPL_V2["timeSaleGoodsPriceViewFl"]=='y'&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
								<span class="ori_price"> <?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["oriGoodsPrice"])?><?php echo gd_global_currency_string()?> <span class='add_currency'><?php echo gd_global_add_currency_display($TPL_V2["oriGoodsPrice"])?></span></span><br/>
								<?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["goodsPrice"])?></em><?php echo gd_global_currency_string()?> <i class="i_time_icon"></i><?php if(gd_isset($TPL_V2["timeSaleLeftTimeTxt"])){?><span class='time_sale_text'> <?php echo $TPL_V2["timeSaleLeftTimeTxt"]?></span><?php }?>
<?php }else{?>
								<?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["goodsPrice"])?></em><?php echo gd_global_currency_string()?>

<?php }?>
								<span class='add_currency'><?php echo gd_global_add_currency_display($TPL_V2["goodsPrice"])?></span>
<?php }?>
<?php }?>
							</span>
						</li>
<?php }?>
<?php if(in_array('goodsDiscount',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["dcPrice"]> 0&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
						<li class="price">
							<?php echo __('할인가')?> : <?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["goodsPrice"]-$TPL_V2["dcPrice"])?><?php echo gd_global_currency_string()?> <?php echo gd_global_add_currency_display($TPL_V2["goodsPrice"]-$TPL_V2["dcPrice"])?><?php if(in_array('dcRate',$TPL_VAR["themeInfo"]["displayAddField"])&&gd_isset($TPL_V2["goodsDcRate"])){?> <span>(<?php echo $TPL_V2["goodsDcRate"]?>%)</span><?php }?>
						</li>
<?php }?>
<?php if(in_array('coupon',$TPL_VAR["themeInfo"]["displayField"])&&$TPL_V2["couponPrice"]!=''&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
						<li class="coupon_price">
							<?php echo __('쿠폰가')?> :
							<span class="coupon_price1">
								<?php echo gd_global_currency_symbol()?><?php echo gd_global_money_format($TPL_V2["couponPrice"])?><?php echo gd_global_currency_string()?>

								<span class='add_currency'><?php echo gd_global_add_currency_display($TPL_V2["couponPrice"])?></span>
<?php if(in_array('dcRate',$TPL_VAR["themeInfo"]["displayAddField"])&&gd_isset($TPL_V2["couponDcRate"])){?> <span>(<?php echo $TPL_V2["couponDcRate"]?>%)</span><?php }?>
							</span>
						</li>
<?php }?>
<?php if(in_array('goodsDcPrice',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsDcPrice"])&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
						<li class="dc_price"><?php echo __('상품할인')?> : <?php echo gd_global_money_format($TPL_V2["goodsDcPrice"])?> <?php echo gd_global_currency_string()?></li>
<?php }?>
<?php if(in_array('mileage',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["mileageBasic"])&&$TPL_V2["goodsPriceDisplayFl"]=='y'){?>
						<li class="list_mileage"><?php echo $TPL_VAR["mileageData"]['name']?> :  <?php echo $TPL_V2["mileageBasic"]?> <?php echo $TPL_VAR["mileageData"]['unit']?></li>
<?php }?>
<?php if(in_array('goodsModelNo',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsModelNo"])){?>
						<li class="model_no"><?php echo __('모델번호')?> : <?php echo $TPL_V2["goodsModelNo"]?></li>
<?php }?>
<?php if(in_array('goodsNo',$TPL_VAR["themeInfo"]["displayField"])&&gd_isset($TPL_V2["goodsNo"])){?>
						<li class="prd_code"><?php echo __('상품코드')?> : <?php echo $TPL_V2["goodsNo"]?></li>
<?php }?>
					</ul>
				</a>
			</div>
		</div>
	</div>
</li>
<?php }}?>
<?php }}?>
<?php }else{?>
<li class="no_bx">
    <p><strong><?php echo __('상품이 존재하지 않습니다.')?></strong></p>
</li>
<?php }?>
<?php if($TPL_VAR["totalPage"]> 1&&$TPL_VAR["timeSaleInfo"]["moreBottomFl"]=='y'&&$TPL_VAR["themeInfo"]["displayType"]!='04'&&$TPL_VAR["themeInfo"]["displayType"]!='05'&&$TPL_VAR["themeInfo"]["displayType"]!='06'&&$TPL_VAR["themeInfo"]["displayType"]!='07'){?>
<div class="btn_goods_down_more">
	<input type="hidden" name="totalPage" value="<?php echo $TPL_VAR["totalPage"]?>" />
	<button type="button" class="main_more_btn btn_time_sale_bottom_more" data-page="2"><?php echo __('더보기')?></button>
</div>
<?php }?>
<script type="text/javascript">
    $(document).ready(function () {
        // 타임세일 더보기
        $('.btn_time_sale_bottom_more').on('click', function(e){
            gd_get_list_more($(this).data('page'));
        });
    });

    // 타임세일 더보기
    function gd_get_list_more(page) {
        var displayType = $('input[name="displayType"]').val();
        var sort = $('select[name="goods_sort"]').val();
        var totalPage = $('input[name="totalPage"]').val();

        $.post('./time_sale_ps.php', {'mode' : 'get_more', 'more' : page, 'displayType' : displayType, 'sno' : '<?php echo $TPL_VAR["timeSaleInfo"]["sno"]?>','sort' : sort}, function (data) {
            $(".goods_product_list").html(data);
            if (parseInt(page) + 1 > totalPage) {
                $('.btn_time_sale_bottom_more').hide();
            } else {
                $('.btn_time_sale_bottom_more').data('page', parseInt(page) + 1);
            }
        });
    }
</script>