<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/outline/footer/standard.html 000005030 */  $this->include_("dataEggBanner");?>
</div>
	<!-- //contents_wrap -->
</div>
<!-- //container -->
<div id="footer">
	<footer>
		<div class="ft_btn_top">
            <a href="#" class="btn_top"><span>TOP</span></a>
        </div>
		<div class="main_info_box">
			<div class="main_info">
				<dl>
					<dt><span><?php echo __('고객센터')?></span></dt>
					<dd>
						<p class="phone"><a href="tel:<?php echo $TPL_VAR["gMall"]["centerPhone"]?>"><?php echo $TPL_VAR["gMall"]["centerPhone"]?></a></p>
						<p class="business_hours">
							<?php echo nl2br($TPL_VAR["gMall"]["centerHours"])?>

						</p>
						<p class="business_txt">
							전화량 폭주 시,영업시간 외에는<br />1:1게시판을 이용해주세요.
						</p>
					</dd>
				</dl>
<?php if(!$TPL_VAR["gGlobal"]["isFront"]){?>
				<dl>
					<dt><span><?php echo __('무통장입금')?></span></dt>
					<dd>
						<p class="account_num"><?php echo $TPL_VAR["gBank"]["accountNumber"]?></p>
						<p class="account_bank"><?php echo $TPL_VAR["gBank"]["bankName"]?></p>
						<p class="account_holder"><?php echo __('예금주')?>: <strong><?php echo $TPL_VAR["gBank"]["depositor"]?></strong></p>
						<p class="account_txt">
							입금 전 계좌번호와 예금주를<br />반드시 확인하고 보내주세요.
						</p>
						<!-- //main_bank -->
					</dd>
				</dl>
<?php }?>
			</div>
			<!-- //main_info -->
		</div>
		<!-- //main_info_box -->
		<div class="ft_button_box">
			<ul>
				<li><a href="tel:<?php echo $TPL_VAR["gMall"]["centerPhone"]?>"><?php echo __('고객센터')?></a></li>
				<li><a href="<?php echo URI_OVERSEAS_HOME?>main/index.php?pcView=y"><?php echo __('PC화면')?></a></li>
			</ul>
		</div>
		<!-- //main_button_box -->
		<div class="ft_info2_box">
			<ul class="ft_menu">
				<li><a href="../service/company.php"><?php echo __('회사소개')?></a></li>
				<li><a href="../service/agreement.php"><?php echo __('이용약관')?></a></li>
				<li><a href="../service/private.php" class="privacy"><?php echo __('개인정보처리방침')?></a></li>
				<li><a href="../service/guide.php"><?php echo __('이용안내')?></a></li>
			</ul>
			<!-- //ft_menu -->
			<p class="ft_address">
				<?php echo __('상호')?> : <?php echo $TPL_VAR["gMall"]["companyNm"]?> <?php echo __('대표')?> : <?php echo $TPL_VAR["gMall"]["ceoNm"]?> <br>
				<?php echo __('주소')?> : <?php echo $TPL_VAR["gMall"]["address"]?> <?php echo $TPL_VAR["gMall"]["addressSub"]?> <br>
				<?php echo __('사업자번호')?> : <?php echo $TPL_VAR["gMall"]["businessNo"]?> <?php echo __('통신판매업신고')?> : <?php echo $TPL_VAR["gMall"]["onlineOrderSerial"]?> <br>
				<?php echo __('대표번호')?> : <?php echo $TPL_VAR["gMall"]["phone"]?> <?php echo __('이메일')?> : <?php echo $TPL_VAR["gMall"]["email"]?><br>
				<?php echo __('호스팅제공 : 엔에이치엔커머스(주)')?>

			</p>
			<!-- //ft_address -->
			<!--
			<ul class="ft_sns_btn">
				<li><a href="#"><img src="/data/skin/mobile/happykids/img/icon/icon_facebook.png" alt="FACEBOOK"></a></li>
				<li><a href="#"><img src="/data/skin/mobile/happykids/img/icon/icon_instagram.png" alt="INSTAGRAM"></a></li>
				<li><a href="#"><img src="/data/skin/mobile/happykids/img/icon/icon_blog.png" alt="NAVER BLOG"></a></li>
			</ul>
			-->
			<!-- //ft_sns_btn -->
			<address class="ft_copy">copyright. <?php echo $TPL_VAR["gMall"]["startYear"]?>. <strong><?php echo $TPL_VAR["gMall"]["mallDomain"]?></strong>. All rights reserved.<br/></address>
			<div class="shortcut">
				<a href="#footer" class="js_add_favorite" data-title="<?php echo $TPL_VAR["gMall"]["mallNm"]?>" style="display:none;">
					<span style="background-image:url(<?php echo $TPL_VAR["gMobile"]["mobileShopIcon"]?>);"><em><?php echo $TPL_VAR["gMall"]["mallNm"]?></em> <?php echo __('바로가기 아이콘 추가하기')?></span>
					<iframe id="ifrmAddFavoriteLauncher" src="/blank.php" style="display:none" width="0" height="0"></iframe>
				</a>
			</div>
		</div>
		<!-- //ft_info2_box -->
		<div class="foot_certify">
<?php if($TPL_VAR["gFairTrade"]['logoFl']=='default'){?>
			<span><a href="https://www.ftc.go.kr/www/cop/bbs/selectBoardList.do?key=201&bbsId=BBSMSTR_000000002320&bbsTyCode=BBST01" target="_blank"><img alt="<?php echo __('공정거래위원회')?>" src="/data/skin/mobile/happykids/img/certify/logo_kftc.png"></a></span>
<?php }elseif($TPL_VAR["gFairTrade"]['logoFl']=='upload'){?>
			<span><img alt="<?php echo __('공정거래위원회')?>" src="<?php echo $TPL_VAR["gFairTrade"]['uploadLogoPath']?>"></span>
<?php }?>
			<span><?php echo $TPL_VAR["displaySSLSeal"]?></span>
			<span><?php echo dataEggBanner()?></span>
			<span><?php echo $TPL_VAR["dataReceiptBanner"]?></span>
		</div>
		<!-- //foot_certify -->
	</footer>
</div>
<a href="#" class="fixed_btn_top" style="display:none;"><span>TOP</span></a>
<!-- //footer -->