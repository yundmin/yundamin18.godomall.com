<?php /* Template_ 2.2.7 2022/12/14 21:08:16 /www/yundamin18_godomall_com/data/skin/front/happykids/outline/header/standard.html 000003893 */  $this->include_("includeWidget","dataCartGoodsCnt","dataBanner");?>
<div id="header">

    <div class="header_top">
        <div class="header_top_cont">
			
			<div>
			<!--스크롤 게시글 시작-->
            <?php echo includeWidget('board/board_article_scrolling','bdId',$TPL_VAR["noticeBdId"],'listCount', 1,'strCut', 25)?>

            <!--스크롤 게시글 끝-->
			</div>

			<ul class="top_member_box">
<?php if(gd_is_login()===false){?>
				<li><a href="../member/login.php"><?php echo __('로그인')?></a><span class="txt_bar"></span></li>
				<li><a href="../member/join_method.php"><?php echo __('회원가입')?></a><span class="txt_bar"></span>
					<!--<span class="accent">
						<span><strong>2,000 P</strong></span>
					</span>-->
				</li>
<?php }else{?>
				<li><a href="../member/logout.php?returnUrl=<?php echo $TPL_VAR["logoutReturnUrl"]?>"><?php echo __('로그아웃')?></a><span class="txt_bar"></span></li>
<?php }?>
				<li>
					<div class="top_mypage_cont">
						<span class="top_mypage_tit"><a href="../mypage/index.php"><?php echo __('마이페이지')?></a></span>
						<ul style="display:none;">
							<li><a href="../mypage/order_list.php"><?php echo __('주문조회')?></a></li>
							<li><a href="../mypage/my_page_password.php"><?php echo __('내정보수정')?></a></li>
							<li><a href="../mypage/wish_list.php"><?php echo __('찜 리스트')?></a></li>
							<li><a href="../mypage/mypage_qa.php">1:1 <?php echo __('문의')?></a></li>
						</ul>
					</div>
					<span class="txt_bar"></span>
				</li>
				<li class="header_cart"><a href="../order/cart.php"><?php echo __('장바구니')?> <strong><?php echo dataCartGoodsCnt()?></strong></a><span class="txt_bar"></span></li>
				<li><a href="../service/index.php"><?php echo __('고객센터')?></a></li>
			</ul>
        </div>
        <!-- //header_top_cont -->
    </div>
    <!-- //header_top -->
    <div class="header_search">
        <div class="header_search_cont">
			<div class="global_sel_box">
				<!-- 멀티상점 선택 -->
				<?php echo includeWidget('proc/_global_select.html')?>

				<!-- 멀티상점 선택 -->
			</div>
            <div class="h1_logo"><?php if((is_array($TPL_R1=dataBanner('4238483832'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></div>

            <!-- 검색 폼 -->
            <?php echo includeWidget('proc/_header_search.html')?>

            <!-- 검색 폼 -->

        </div>
        <!-- //header_search_cont -->
    </div>
    <!-- //header_search -->
    <div class="header_gnb">
       
		<div class="gnb">
			<div class="main_gnb">
				<!-- 전체 카테고리 출력 레이어 시작 -->
				<?php echo includeWidget("proc/category_all.html")?>

				<!-- 전체 카테고리 출력 레이어 끝 -->

				<!-- 상단 카테고리 출력 시작 -->
				<?php echo includeWidget('proc/category_side','type','top','cateType','cate','menuType','all')?>

				<!-- 상단 카테고리 출력 끝 -->
			</div>
			<div class="side_gnb">
				<ul>
                    <li><a href="../service/notice.php">NOTICE</a></li>
                    <li><a href="../service/faq.php">FAQ</a></li>
                </ul>
			</div>
        </div>
        <!-- //gnb -->
        <!-- //gnb_allmenu -->
    </div>
    <!-- //header_gnb -->
	<script>
		$(window).scroll(function(){
			if($(window).scrollTop() >= 150){
				$('#header_warp').addClass('headerFix');
				$('#container').css({'padding-top':'198px'});
			}else{
				$('#header_warp').removeClass('headerFix');
				$('#container').removeAttr('style');
			}
		});
	</script>
</div>
<!-- //header -->