<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/outline/_header.html 000011722 */  $this->include_("setBrowserCache","includeFile","includeWidget");
if (is_array($TPL_VAR["headerMeta"])) $TPL_headerMeta_1=count($TPL_VAR["headerMeta"]); else if (is_object($TPL_VAR["headerMeta"]) && in_array("Countable", class_implements($TPL_VAR["headerMeta"]))) $TPL_headerMeta_1=$TPL_VAR["headerMeta"]->count();else $TPL_headerMeta_1=0;
if (is_array($TPL_VAR["snsShareMetaTag"])) $TPL_snsShareMetaTag_1=count($TPL_VAR["snsShareMetaTag"]); else if (is_object($TPL_VAR["snsShareMetaTag"]) && in_array("Countable", class_implements($TPL_VAR["snsShareMetaTag"]))) $TPL_snsShareMetaTag_1=$TPL_VAR["snsShareMetaTag"]->count();else $TPL_snsShareMetaTag_1=0;
if (is_array($TPL_VAR["headerStyle"])) $TPL_headerStyle_1=count($TPL_VAR["headerStyle"]); else if (is_object($TPL_VAR["headerStyle"]) && in_array("Countable", class_implements($TPL_VAR["headerStyle"]))) $TPL_headerStyle_1=$TPL_VAR["headerStyle"]->count();else $TPL_headerStyle_1=0;?>
<!doctype html>
<html lang="ko">
<head>
	<title><?php echo $TPL_VAR["gMall"]["mallTitle"]?></title>
	<meta charset="utf-8" />
	<meta name="author" content="<?php echo $TPL_VAR["gMall"]["mallAuthor"]?>" />
	<meta name="description" content="<?php echo $TPL_VAR["gMall"]["mallDescription"]?>" />
	<meta name="keywords" content="<?php echo $TPL_VAR["gMall"]["mallKeyword"]?>" />
	<meta name="csrf-token" content="<?php echo $TPL_VAR["token"]?>" />
	<meta name="viewport" content="user-scalable=yes,<?php if($TPL_VAR["gCurrentPageName"]!='goods/goods_view'){?> initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,<?php }?> width=device-width" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />


<?php if(is_array(gd_isset($TPL_VAR["headerMeta"]))){?>
	<!-- Add Meta : start -->
<?php if($TPL_headerMeta_1){foreach($TPL_VAR["headerMeta"] as $TPL_V1){?>
	<?php echo $TPL_V1?>

<?php }}?>
	<!-- Add Meta : end -->
<?php }?>

<?php if($TPL_snsShareMetaTag_1){foreach($TPL_VAR["snsShareMetaTag"] as $TPL_V1){?>
	<?php echo $TPL_V1?>

<?php }}?>

<?php if($TPL_VAR["gMall"]["mallFavicon"]){?>
	<link rel="icon" href="/data/common/favicon.ico" type="image/x-icon" />
<?php }?>

<?php if(isset($TPL_VAR["gMobile"]["mobileShopIcon"])!==false){?>
	<link rel="apple-touch-icon-precomposed" href="<?php echo $TPL_VAR["gMobile"]["mobileShopIcon"]?>" />
	<link rel="shortcut icon" href="<?php echo $TPL_VAR["gMobile"]["mobileShopIcon"]?>">
<?php }else{?>
	<link rel="apple-touch-icon-precomposed" href="/data/commonimg/defaultShopIcon.png" />
	<link rel="shortcut icon" href="/data/commonimg/defaultShopIcon.png">
<?php }?>
<?php if($TPL_VAR["gMall"]["robotsFl"]=='n'){?>
	<meta name="robots" content="noindex, nofollow" />
	<meta name="robots" content="noarchive" />
<?php }?>
	<!--<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/plugins/sidebarEffects.css')?>">-->
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/plugins/modalEffects.css')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/plugins/multiMenuEffects.css')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/gd_reset.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/gd_layout.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/gd_common.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/gd_button.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/proc/proc.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache(PATH_MOBILE_SKIN.'css/'.$TPL_VAR["gThisDirName"].'/'.$TPL_VAR["gThisDirName"].'.css')?>" />
<?php if(($TPL_VAR["gCurrentPageName"]=='mypage/my_page')){?>
	<!-- 회원정보입력 / 회원정보수정과 동일 CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/member/member.css')?>" />
<?php }?>
<?php if(($TPL_VAR["gCurrentPageName"]=='goods/goods_view')){?>
	<!-- 상품상세 REVIEW/Q&A CSS -->
	<link type="text/css" rel="stylesheet" href="<?php echo setBrowserCache('/data/skin/mobile/happykids/css/board/board.css')?>" />
<?php }?>

<?php if(is_array(gd_isset($TPL_VAR["headerStyle"]))){?>
	<!-- Add style : start -->
<?php if($TPL_headerStyle_1){foreach($TPL_VAR["headerStyle"] as $TPL_V1){?>
	<link type="text/css" rel="stylesheet" href="<?php echo $TPL_V1?>" />
<?php }}?>
	<!-- Add style : end -->
<?php }?>

	<script type="text/javascript">
        <?php echo includeFile($TPL_VAR["gGlobal"]["languageJson"])?>

	</script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/gd_gettext.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/vendor/modernizr.custom.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/vendor/underscore-min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/jquery/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/numeral/numeral.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/global/accounting.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/global/money.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/jquery/validation/jquery.validate.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/jquery/validation/additional-methods.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/copyclipboard/clipboard.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/iscroll/iscroll.js')?>"></script>

	<script type="text/javascript">
        // 고도몰5 상점대표 도메인
        var gdGlobalHomeUri = '<?php echo URI_OVERSEAS_MOBILE?>';

        // 고도몰5 통화정책
        var gdCurrencyDecimal = <?php echo $TPL_VAR["gGlobalCurrency"]["decimal"]?>;
        var gdCurrencyDecimalFormat = '<?php echo $TPL_VAR["gGlobalCurrency"]["decimalFormat"]?>';
        var gdCurrencyCode = '<?php echo $TPL_VAR["gGlobalCurrency"]["code"]?>';
        var gdCurrencyAddDecimal = <?php echo gd_isset($TPL_VAR["gGlobalCurrency"]["addDecimal"], 0)?>;
        var gdCurrencyAddDecimalFormat = '<?php echo $TPL_VAR["gGlobalCurrency"]["addDecimalFormat"]?>';
        var gdCurrencyAddCode = '<?php echo $TPL_VAR["gGlobalCurrency"]["addCode"]?>';
        var gdLocale = '<?php echo $TPL_VAR["gGlobal"]["locale"]?>';
        var gdCurrencySymbol = '<?php echo gd_global_currency_symbol()?>';
        var gdCurrencyString = '<?php echo gd_global_currency_string()?>';

        // 환율변환 정책
        fx.base = "KRW";
        fx.settings = {
            from : "KRW",
            to : gdCurrencyCode
        };
        fx.rates = {
            "KRW" : 1,
<?php if((is_array($TPL_R1=$TPL_VAR["gGlobalCurrency"]["perRate"])&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_K1=>$TPL_V1){?>
            "<?php echo $TPL_K1?>" : <?php echo $TPL_V1?>,
<?php }}?>
        }
	</script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/gd_common.js')?>"></script>
	<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/gd_ui.js')?>"></script>


	<style type="text/css">
		body {
<?php if($TPL_VAR["layout"]["outbg_img"]){?>background: url("<?php echo $TPL_VAR["layout"]["outbg_img"]?>") repeat left top;<?php }?>
<?php if($TPL_VAR["layout"]["outbg_color"]){?>background-color: #<?php echo str_replace('#','',$TPL_VAR["layout"]["outbg_color"])?>;<?php }?>
		}

		/* body > #wrap > #top : 상단 영역 */
		header .header_box{
<?php if($TPL_VAR["layout"]["outbg_color"]){?>background-color: #<?php echo str_replace('#','',$TPL_VAR["layout"]["outbg_color"])?>;<?php }?>
<?php if($TPL_VAR["layout"]["topbg_img"]){?>background: url("<?php echo $TPL_VAR["layout"]["topbg_img"]?>") repeat 0 0;<?php }?>
		}

		/* body > #wrap > #container : 메인 영역 */
		#container {
<?php if($TPL_VAR["layout"]["inbg_img"]){?>background: url("<?php echo $TPL_VAR["layout"]["inbg_img"]?>") repeat 0 0;<?php }?>
<?php if($TPL_VAR["layout"]["inbg_color"]){?>background-color: <?php echo $TPL_VAR["layout"]["inbg_color"]?>;<?php }?>
		}
	</style>

	<?php echo $TPL_VAR["customHeader"]?>


</head>

<body>
<div id="wrap">
	<!-- 추후 변경 -->
	<div class="top_area"></div>
	<div class="st-container" id="stContainter">
		<div class="ly_pop ly_srch" id="popupSearch">
			<div class="ly_wrap">
				<!-- 검색 폼 -->
				<?php echo includeWidget('proc/_header_search.html')?>

				<!-- 검색 폼 -->
			</div>
		</div>
		<div class="ly_pop ly_effect_3" id="popupBoard"></div>
		<div class="ly_pop ly_effect_3" id="popupBoardWrite"></div>
		<div class="ly_pop ly_effect_3" id="popupBoardView"></div>
		<div class="ly_pop ly_effect_3" id="popupOption"></div>
		<div class="ly_pop ly_effect_3" id="popupCouponApply"></div>
		<div class="ly_pop ly_effect_3" id="popupSelectGoods"></div><!--게시판 상품연동-->
		<div class="ly_pop ly_effect_3" id="popupShippingGoodsSelect"></div>
<?php if($TPL_VAR["gCurrentPageName"]=='goods/goods_view'){?>
		<div class="ly_pop ly_effect_3" id="popupCoupon"></div>
		<div class="ly_pop ly_effect_3" id="popupDetailInfo"></div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]=='mypage/order_list'||$TPL_VAR["gCurrentPageName"]=='mypage/order_view'){?>
		<div class="ly_pop ly_effect_3" id="popupRefund"></div>
		<div class="ly_pop ly_effect_3" id="popupBack"></div>
		<div class="ly_pop ly_effect_3" id="popupExchange"></div>
		<div class="ly_pop ly_effect_3" id="popupReason"></div>
		<div class="ly_pop ly_effect_3" id="popupDeliveryMethod"></div>
		<div class="ly_pop ly_effect_3" id="popupSettle"></div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]=='mypage/order_view'){?>
		<div class="ly_pop ly_effect_3" id="popupCashReceiptRequest"></div>
		<div class="ly_pop ly_effect_3" id="popupTaxInvoiceRequest"></div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]=='mypage/shipping'||$TPL_VAR["gCurrentPageName"]=='order/order'){?>
		<div class="ly_pop ly_effect_3" id="popupShipping"></div>
<?php }?>
		<div class="ly_pop ly_effect_3" id="popupGhostDepositor"></div>
		<div class="ly_pop ly_effect_3" id="popupAlikeSearch"></div>
		<div class="ly_overlay"></div>

<?php if($TPL_VAR["tpls"]["header_inc"]){?>
<?php $this->print_("header_inc",$TPL_SCP,1);?>

<?php }?>

		<!-- //추후 변경 -->