<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/outline/_footer.html 000003339 */  $this->include_("setBrowserCache","plusShop");
if (is_array($TPL_VAR["headerScript"])) $TPL_headerScript_1=count($TPL_VAR["headerScript"]); else if (is_object($TPL_VAR["headerScript"]) && in_array("Countable", class_implements($TPL_VAR["headerScript"]))) $TPL_headerScript_1=$TPL_VAR["headerScript"]->count();else $TPL_headerScript_1=0;
if (is_array($TPL_VAR["footerScript"])) $TPL_footerScript_1=count($TPL_VAR["footerScript"]); else if (is_object($TPL_VAR["footerScript"]) && in_array("Countable", class_implements($TPL_VAR["footerScript"]))) $TPL_footerScript_1=$TPL_VAR["footerScript"]->count();else $TPL_footerScript_1=0;?>
<?php if($TPL_VAR["tpls"]["footer_inc"]){?>
<?php $this->print_("footer_inc",$TPL_SCP,1);?>

<?php }?>
	</div>
	<!-- //st-container -->
</div>
<!-- //wrap -->

<!-- //개발용 코드 st-pusher,st-container,st-content,st-content-inner -->
<!-- 절대! 지우지마세요 : Start -->
<iframe name="ifrmProcess" frameborder="0" src='/blank.php' style="display:none<?php if(!$TPL_VAR["isProduction"]){?>block<?php }?>" width="100%" height="<?php if(!$TPL_VAR["isProduction"]){?>50<?php }?>0" bgcolor="#000"></iframe>
<!-- 절대! 지우지마세요 : End -->
<div id="background"></div>
<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/jquery.hashchange.min.js')?>"></script>
<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/lib/storage.js')?>"></script>
<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/lib/network.js')?>" charset="euc-kr"></script>
<!--<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/sidebarEffects.js')?>"></script>-->
<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/modalEffects.js')?>"></script>
<!--<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/idangerous.swiper.js')?>"></script>-->
<!--<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/jquery.touchSwipe.js')?>"></script>-->
<!--<script type="text/javascript" src="<?php echo setBrowserCache('/data/skin/mobile/happykids/js/plugins/numeral.js')?>"></script>-->

<?php if(is_array(gd_isset($TPL_VAR["headerScript"]))){?>
<!-- Add script : start -->
<?php if($TPL_headerScript_1){foreach($TPL_VAR["headerScript"] as $TPL_V1){?>
<script type="text/javascript" src="<?php echo $TPL_V1?>"></script>
<?php }}?>
<!-- Add script : end -->
<?php }?>

<?php if(is_array(gd_isset($TPL_VAR["footerScript"]))){?>
<!-- Add footer script : start -->
<?php if($TPL_footerScript_1){foreach($TPL_VAR["footerScript"] as $TPL_V1){?>
<script type="text/javascript" src="<?php echo $TPL_V1?>"></script>
<?php }}?>
<!-- Add footer script : end -->
<?php }?>

<!-- 회원가입 유도 푸시 -->
<?php echo plusShop('proc/_simple_join_push.html')?>

<!-- //회원가입 유도 푸시 -->

<?php echo $TPL_VAR["pgScript"]?>

<!-- 외부 스크립트 -->
<?php echo $TPL_VAR["customFooter"]?>

</body>
</html>