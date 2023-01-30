<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/proc/_global_select.html 000003983 */ 
if (is_array($TPL_VAR["mallList"])) $TPL_mallList_1=count($TPL_VAR["mallList"]); else if (is_object($TPL_VAR["mallList"]) && in_array("Countable", class_implements($TPL_VAR["mallList"]))) $TPL_mallList_1=$TPL_VAR["mallList"]->count();else $TPL_mallList_1=0;?>
<?php if($TPL_VAR["mallCnt"]> 1){?>
<div class="tit">Language</div>
<div class="language_box">
	<div class="mod_language">
<?php if($TPL_VAR["iconType"]=='check'){?>
			<ul class="language_list3">
<?php if($TPL_mallList_1){foreach($TPL_VAR["mallList"] as $TPL_K1=>$TPL_V1){?>
				<li><img class="mall hand" data-domain-fl="<?php echo $TPL_V1["domainFl"]?>" data-domain="<?php echo $TPL_V1["domain"]?>" src="<?php echo $TPL_VAR["uriCommon"]?>/<?php echo $TPL_VAR["mallIcon"][$TPL_K1]?>" alt="<?php echo $TPL_VAR["mallNm"][$TPL_K1]?>"/>
<?php }}?>
			</ul>
<?php }elseif($TPL_VAR["iconType"]=='select_flag'){?>
			<div class="language_tit language_tit2"><span><img src="<?php echo $TPL_VAR["uriCommon"]?>/<?php echo $TPL_VAR["mallIcon"][$TPL_VAR["nowMall"]]?>" alt="<?php echo $TPL_VAR["mallList"][$TPL_VAR["nowMall"]]["languageFl"]?>"></span></div>
			<ul class="language_list language_list2">
<?php if($TPL_mallList_1){foreach($TPL_VAR["mallList"] as $TPL_K1=>$TPL_V1){?>
					<li data-domain-fl="<?php echo $TPL_V1["domainFl"]?>" data-domain="<?php echo $TPL_V1["domain"]?>"><img src="<?php echo $TPL_VAR["uriCommon"]?>/<?php echo $TPL_VAR["mallIcon"][$TPL_K1]?>" data-domain="<?php echo $TPL_V1["domain"]?>" alt="<?php echo $TPL_V1["languageFl"]?>"></li>
<?php }}?>
			</ul>
<?php }elseif($TPL_VAR["iconType"]=='select_language'){?>
			<div class="language_tit"><span><img src="<?php echo $TPL_VAR["uriCommon"]?>/<?php echo $TPL_VAR["mallIcon"][$TPL_VAR["nowMall"]]?>" alt="<?php echo $TPL_VAR["mallList"][$TPL_VAR["nowMall"]]["languageFl"]?>"><?php echo $TPL_VAR["mallList"][$TPL_VAR["nowMall"]]["languageFl"]?></span></div>
			<ul class="language_list">
<?php if($TPL_mallList_1){foreach($TPL_VAR["mallList"] as $TPL_K1=>$TPL_V1){?>
					<li data-domain-fl="<?php echo $TPL_V1["domainFl"]?>"  data-domain="<?php echo $TPL_V1["domain"]?>"><img src="<?php echo $TPL_VAR["uriCommon"]?>/<?php echo $TPL_VAR["mallIcon"][$TPL_K1]?>" alt="<?php echo $TPL_V1["languageFl"]?>" ><?php echo $TPL_V1["languageFl"]?></li>
<?php }}?>
			</ul>
<?php }?>
	</div>
</div>
<script type="text/javascript">
$(function(){
    $('.mall').click(function(){
        var url = $(this).data('domain');
        var lastStr = url.substr(url.length - 1);
        if (lastStr != '/') {
            url = url+'/';
        }
        switch($(this).data('domain-fl')) {
            case 'kr':
                window.open(url+'main/index.php', "_blank");
                break;
            default:
                window.open(url, "_blank");
                break;
        }
    });
    $('.language_list li, .language_list2 li').click(function(){
        var url = $(this).data('domain');
        var lastStr = url.substr(url.length - 1);
        if (lastStr != '/') {
            url = url+'/';
        }
        switch($(this).data('domain-fl')) {
            case 'kr':
                window.open(url+'main/index.php', "_blank");
                break;
            default:
                window.open(url, "_blank");
                break;
        }
    });
	/* 다국어 선택 */
        $('.mod_language .language_tit').on({
            'click':function(){
                if($(this).parent().find('.language_list').css('display') =='none'){
                    $(this).parent().find('.language_list').slideDown('fast');
                    $(this).find('span').addClass('on');
                }else{
                    $(this).parent().find('.language_list').slideUp('fast');
                    $(this).find('span').removeClass('on');
                }
            }
        });
})
</script>
<?php }?>