<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/goods/_goods_display_main.html 000009013 */ ?>
<?php if($TPL_VAR["mainData"]["displayFl"]=='y'){?>
<div class="_goods_display_main">
<?php if(($TPL_VAR["mainData"]["kind"]=='event'&&$TPL_VAR["mainData"]["displayCategory"]=='g'&&$TPL_VAR["firstGroup"]=='y')){?>
	<div class="item_display_wrap">
<?php if($TPL_VAR["mainData"]["eventThemeName"]){?>
		<h3><?php echo __($TPL_VAR["mainData"]["eventThemeName"])?></h3>
<?php }?>

<?php if($TPL_VAR["mainData"]["eventThemeMobileContents"]){?>
		<div class="contents">
			<?php echo $TPL_VAR["mainData"]["eventThemeMobileContents"]?>

		</div>
<?php }?>
<?php if($TPL_VAR["mainData"]["otherEventData"]){?>
		<div class="inp_sel">
			<select name="otherEventData" onchange="javascript:location.href='/goods/event_sale.php?sno=' + this.value;">
<?php if((is_array($TPL_R1=$TPL_VAR["mainData"]["otherEventData"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?>
				<option value="<?php echo $TPL_V1['sno']?>"><?php echo $TPL_V1['themeNm']?></option>
<?php }}?>
			</select>
		</div>
<?php }?>
	</div>
<?php }?>
	<div class="js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?>">
<?php if($TPL_VAR["mainData"]["themeNm"]){?>
			<h3><?php echo __($TPL_VAR["mainData"]["themeNm"])?>

<?php if($TPL_VAR["mainData"]["moreTopFl"]=='y'){?>
					<div class="more_btn_box">
<?php if($TPL_VAR["mainData"]["displayCategory"]=='g'){?>
						<a class="main_more_btn2" href="../goods/goods_main.php?sno=<?php echo $TPL_VAR["mainData"]["sno"]?>&groupSno=<?php echo $TPL_VAR["mainData"]["groupSno"]?>"><?php echo __('더보기')?></a>
<?php }else{?>
						<a class="main_more_btn2" href="../goods/goods_main.php?sno=<?php echo $TPL_VAR["mainData"]["sno"]?>"><?php echo __('더보기')?></a>
<?php }?>
					</div>
<?php }?>
			</h3>
<?php }?>
<?php if($TPL_VAR["mainData"]["mobileContents"]){?>
		<div class="contents">
			<?php echo $TPL_VAR["mainData"]["mobileContents"]?>

		</div>
<?php }?>

<?php if($TPL_VAR["mainData"]["kind"]=='event'&&$TPL_VAR["mainData"]["displayCategory"]!='g'){?>
<?php if($TPL_VAR["mainData"]["otherEventData"]){?>
			<div class="inp_sel">
				<select name="otherEventData" onchange="javascript:location.href='/goods/event_sale.php?sno=' + this.value;">
<?php if((is_array($TPL_R1=$TPL_VAR["mainData"]["otherEventData"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?>
					<option value="<?php echo $TPL_V1['sno']?>"><?php echo $TPL_V1['themeNm']?></option>
<?php }}?>
				</select>
			</div>
<?php }?>
<?php }?>

		<ul class="main_prd_list goods_content<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?>">
<?php $this->print_("goodsTemplate",$TPL_SCP,1);?>

		</ul>
<?php if($TPL_VAR["totalPage"]> 1&&$TPL_VAR["mainData"]["moreBottomFl"]=='y'&&$TPL_VAR["themeInfo"]["displayType"]!='04'&&$TPL_VAR["themeInfo"]["displayType"]!='06'&&$TPL_VAR["themeInfo"]["displayType"]!='07'){?>
		<div class="btn_box">
			<button type="button" class="main_more_btn btn_main_bottom_more" data-page="2"><?php echo __('더보기')?> </button>
		</div>
<?php }?>
	</div>
</div>

<script type="text/javascript">
    <!--
    var keyValue<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?> = '<?php echo $TPL_VAR["gGlobal"]["locale"]+$TPL_VAR["mainData"]["sno"]?>' + 'G<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>';
    var key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?> = {
        html: 'html' + keyValue<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>,
        page: 'page' + keyValue<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>

    };
    var gdStorage<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?> = gd_load_session(key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>.html);
    var page<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?> = gd_load_session(key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>.page);

    $(document).ready(function(){
        var totalPage = '<?php echo $TPL_VAR["totalPage"]?>';
        if (gdStorage<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>) {
            $('.goods_content<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?>').html(gdStorage<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>);
            if (page<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>) {
                $('.js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?> .btn_main_bottom_more').attr('data-page',page<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>);
            }
        }

        $('.js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?> .btn_main_bottom_more').on('click', function(e){
            gd_get_list<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>($(this).data('page'));
        });

        if (totalPage == page<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>) {
            $('.js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?> .btn_main_bottom_more').closest('.btn_box').addClass('dn');
        }

        $(document).off().on('click','.btn_alert_login',function (e){
            alert("<?php echo __('로그인하셔야 본 서비스를 이용하실 수 있습니다.')?>");
            document.location.href = "../member/login.php";
            return false;
        });

<?php if($TPL_VAR["themeInfo"]["displayType"]=='11'){?>
        $('body').on('click', '.goods_content<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?> .js_option_layer', function(e){
            var params = {
                type : $(this).data('type'),
                sno: $(this).data('sno'),
                goodsNo: $(this).data('goodsno'),
                mainSno : '<?php echo $TPL_VAR["mainData"]["sno"]?>',
            };

            $('#popupOption').modal({
                remote: '../goods/layer_option.php',
                cache: false,
                params: params,
                type : 'POST',
                show: true
            });
        });
<?php }?>

    });


    function gd_get_list<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>(page){
        $.post('../goods/goods_ps.php', {'mode' : 'get_main', 'more' : page, 'mainSno' : '<?php echo $TPL_VAR["mainData"]["sno"]?>', 'groupSno' : '<?php echo $TPL_VAR["mainData"]["groupSno"]?>'}, function (data) {

            $(".goods_content<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?>").html(data);
            gd_save_session(key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>.html, data);
            if(parseInt(page)+1 > <?php echo $TPL_VAR["totalPage"]?>) {
                $('.js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?> .btn_main_bottom_more').hide();
                gd_save_session(key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>.page, parseInt(page));
            } else {
                $('.js_main_wrap_<?php echo $TPL_VAR["mainData"]["sno"]?>_<?php echo $TPL_VAR["mainData"]["groupSno"]?> .btn_main_bottom_more').data('page',parseInt(page)+1);
                gd_save_session(key<?php echo $TPL_VAR["mainData"]["sno"]?>g<?php echo $TPL_VAR["mainData"]["groupSno"]?><?php echo $TPL_VAR["loginFl"]?>.page, parseInt(page)+1);
            }
        });
    }

    //-->
</script>
<?php }?>