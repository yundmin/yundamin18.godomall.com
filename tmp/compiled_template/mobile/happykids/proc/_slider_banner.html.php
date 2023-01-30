<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/proc/_slider_banner.html 000007581 */ 
if (is_array($TPL_VAR["bannerInfo"])) $TPL_bannerInfo_1=count($TPL_VAR["bannerInfo"]); else if (is_object($TPL_VAR["bannerInfo"]) && in_array("Countable", class_implements($TPL_VAR["bannerInfo"]))) $TPL_bannerInfo_1=$TPL_VAR["bannerInfo"]->count();else $TPL_bannerInfo_1=0;
if (is_array($TPL_VAR["bannerImgInfo"])) $TPL_bannerImgInfo_1=count($TPL_VAR["bannerImgInfo"]); else if (is_object($TPL_VAR["bannerImgInfo"]) && in_array("Countable", class_implements($TPL_VAR["bannerImgInfo"]))) $TPL_bannerImgInfo_1=$TPL_VAR["bannerImgInfo"]->count();else $TPL_bannerImgInfo_1=0;?>
<?php if($TPL_VAR["bannerUseFl"]==='y'){?>
<style>
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>>div {
    width: 100%;
    display: table-cell;
}
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>>div img, .slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-slide img {
    width: 100%;
}
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-prev , .slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 45%;
    display: block;
    width: 27px;
    height: 44px;
    padding: 0;
    -webkit-transform: translate(0, -45%);
    -ms-transform: translate(0, -45%);
    transform: translate(0, -45%);
    cursor: pointer;
    z-index:10;
	border:none;
	background:none;
}

.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>   .slick-prev {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23<?php echo str_replace('#','',$TPL_VAR["bannerSideButton"]['activeColor'])?>'%2F%3E%3C%2Fsvg%3E");
    background-repeat:no-repeat;
    left: 10px;
    right: auto;
}
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>    .slick-next {
    background-image:   url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23<?php echo str_replace('#','',$TPL_VAR["bannerSideButton"]['activeColor'])?>'%2F%3E%3C%2Fsvg%3E");
    background-repeat:no-repeat;
    right: 10px;
    left: auto;
}

.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>  .slick-dots {
    position: absolute;
    bottom: 10px;
    display: block;
    width: 100%;
    padding: 0;
    margin: 0;
    text-align: center;
}
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>  .slick-dots li {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    padding: 0;
    cursor: pointer;
}
<?php if($TPL_VAR["bannerPageButton"]['useFl']=='c'){?>
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>  .slick-dots li {
    width:25%;
    margin:0 !important;
}
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>  .slick-dots li button {
    font-size:12px;
    width:100%;
    height:30px;
    text-align:center;
    background:#000000;
    border-radius:0;
    color:#fff;
    opacity:1;
}

.slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li.slick-active button {
    background:#cfcfcf;
}
<?php }else{?>
.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>  .slick-dots li button {
    font-size: 0;
    line-height: 0;
    display: block;
    width: <?php echo $TPL_VAR["bannerPageButton"]['size']?>px;
    height: <?php echo $TPL_VAR["bannerPageButton"]['size']?>px;
    padding: 5px;
    cursor: pointer;
    border: 0;
    outline: none;
    border-radius: <?php echo $TPL_VAR["bannerPageButton"]['radius']?>%;
    background: <?php echo $TPL_VAR["bannerPageButton"]['inactiveColor']?>;
    opacity:0.75;
}

.slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li.slick-active button {
    background: <?php echo $TPL_VAR["bannerPageButton"]['activeColor']?>;
    opacity:1;
}
<?php }?>
</style>

<div  class="slider-wrap slider-banner-<?php echo $TPL_VAR["bannerCode"]?>">
<?php if($TPL_bannerInfo_1){foreach($TPL_VAR["bannerInfo"] as $TPL_V1){?>
    <div>
        <?php echo $TPL_V1?>

    </div>
<?php }}?>

</div >
<script src="/data/skin/mobile/happykids/js/slider/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>').not('.slick-initialized').slick({
<?php if($TPL_VAR["bannerTime"]=='manual'){?>
            autoplay: false,
<?php }else{?>
            autoplay: true,
<?php }?>
<?php if($TPL_VAR["bannerPageButton"]['useFl']!='n'){?>
            dots: true,
<?php }else{?>
            dots: false,
<?php }?>
<?php if($TPL_VAR["bannerSideButton"]['useFl']==='n'){?>
            arrows: false,
<?php }?>
            infinite: true,
            autoplaySpeed : <?php echo $TPL_VAR["bannerSliderTime"]?>,
            speed: <?php echo $TPL_VAR["bannerSpeed"]?>,
            slidesToShow: 1,
<?php if($TPL_VAR["bannerEffect"]==='fade'){?>
            fade: true,
<?php }?>
            adaptiveHeight: true
        });
<?php if($TPL_VAR["bannerPageButton"]['useFl']=='c'){?>
        var slickIndex = $('.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>').slick('getSlick').instanceUid;
        var navWidth, navHeight, defaultNavCSS, defaultNavBtnCSS, activeNavCSS, activeNavBtnCSS;
        var navFontStyle = "font-size:0 !important;";
<?php if($TPL_bannerImgInfo_1){foreach($TPL_VAR["bannerImgInfo"] as $TPL_K1=>$TPL_V1){?>
<?php if($TPL_V1['act']){?>
        navWidth = "width: <?php echo $TPL_V1['act']['width']?>px !important;";
        navHeight = "height: <?php echo $TPL_V1['act']['height']?>px !important;";
        activeNavCSS = ".slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li.slick-active#slick-slide" + slickIndex + "<?php echo sprintf('%d',$TPL_K1)?> \{" + navWidth + navHeight + "\}";
        activeNavBtnCSS = ".slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li.slick-active#slick-slide" + slickIndex + "<?php echo sprintf('%d',$TPL_K1)?> button {" + navWidth + navHeight + navFontStyle + "background: url(<?php echo $TPL_V1['act']['img']?>) no-repeat !important;}";
<?php }?>
<?php if($TPL_V1['inact']){?>
        $(".slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li#slick-slide" + slickIndex + "<?php echo sprintf('%d',$TPL_K1)?>").addClass('default-slick-banner');
        navWidth = "width: <?php echo $TPL_V1['inact']['width']?>px;";
        navHeight = "height: <?php echo $TPL_V1['inact']['height']?>px;";
        defaultNavCSS = ".slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li#slick-slide" + slickIndex + "<?php echo sprintf('%d',$TPL_K1)?>:not(.slick-active) \{" + navWidth + navHeight + "\}";
        defaultNavBtnCSS = ".slider-banner-<?php echo $TPL_VAR["bannerCode"]?> .slick-dots li#slick-slide" + slickIndex + "<?php echo sprintf('%d',$TPL_K1)?>:not(.slick-active) button {" + navWidth + navHeight + navFontStyle + "background: url(<?php echo $TPL_V1['inact']['img']?>) no-repeat;}";
<?php }?>
        $('.slider-banner-<?php echo $TPL_VAR["bannerCode"]?>').siblings('style').append(defaultNavCSS + defaultNavBtnCSS + activeNavCSS + activeNavBtnCSS);
<?php }}?>
<?php }?>
    });
</script>


<?php }?>