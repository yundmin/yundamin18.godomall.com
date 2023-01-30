<?php /* Template_ 2.2.7 2022/12/14 21:07:59 /www/yundamin18_godomall_com/data/skin/mobile/happykids/outline/header/standard.html 000006994 */  $this->include_("dataCartGoodsCnt","dataBanner","dataCategoryPosition","includeWidget");
if (is_array($TPL_VAR["defaultBoardList"])) $TPL_defaultBoardList_1=count($TPL_VAR["defaultBoardList"]); else if (is_object($TPL_VAR["defaultBoardList"]) && in_array("Countable", class_implements($TPL_VAR["defaultBoardList"]))) $TPL_defaultBoardList_1=$TPL_VAR["defaultBoardList"]->count();else $TPL_defaultBoardList_1=0;?>
<div id="header_wrap">
	<header>
		<div class="header_box">
			<!-- 좌측 메뉴 -->
			<ul class="left_menu">
				<li><a href="#" class="side_menu"><span><?php echo __('메뉴')?></span></a></li>
				<li><a href="../mypage/index.php" class="mypage"><span>=__('마이페이지')}</span></a></li>
			</ul>
			<!-- 우측 메뉴 -->
			<ul class="right_menu">
				<li>
					<a href="../order/cart.php" class="cart"><span>=__('장바구니')}</span></a>
					<span class="cart_count"><?php echo dataCartGoodsCnt()?></span>
				</li>
				<li><button class="top_search bn_srch"><span><?php echo __('검색')?></span></button></li>
			</ul>
			<!-- 네비게이터 -->
		</div>
	</header>
</div>
<!-- //header_wrap -->
<div class="h_logo"><?php if((is_array($TPL_R1=dataBanner('3669836725'))&&!empty($TPL_R1)) || (is_object($TPL_R1) && in_array("Countable", class_implements($TPL_R1)) && $TPL_R1->count() > 0)) {foreach($TPL_R1 as $TPL_V1){?><?php echo $TPL_V1["tag"]?><?php }}?></div> <!-- 로고 -->
<?php if($TPL_VAR["layout"]["current_page"]=='y'&&$TPL_VAR["layout"]["page_name"]){?>
<div class="navi_g">
	<ul>
		<li><?php echo __('홈')?></li>
<?php if($TPL_VAR["gCurrentPageName"]=='goods/goods_list'){?>
		<li><?php echo dataCategoryPosition($TPL_VAR["cateCd"],'</li>
		<li>',$TPL_VAR["cateType"])?></li>
<?php }else{?>
		<li><?php echo $TPL_VAR["layout"]["page_name"]?></li>
<?php }?>
	</ul>
</div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]!='main/index'){?>
<div class="sub_top">
	<div class="sub_top_left">
<?php if($TPL_VAR["gReturnUrl"]){?>
		<a href="<?php echo $TPL_VAR["gReturnUrl"]?>" class="all_page_prev"><?php echo __('이전')?></a>
<?php }else{?>
		<a href="<?php echo $TPL_VAR["gReferer"]?>" class="all_page_prev js_bn_back"><?php echo __('이전')?></a>
<?php }?>
	</div>
	<h2><a href="#" class="js_page_reload "><?php if($TPL_VAR["gPageName"]){?><?php echo $TPL_VAR["gPageName"]?><?php }else{?><?php echo $TPL_VAR["layout"]["page_name"]?><?php }?></a></h2>
<?php if(($TPL_VAR["gCurrentPageName"]=='board/list'||$TPL_VAR["gCurrentPageName"]=='mypage/mypage_qa'||$TPL_VAR["gCurrentPageName"]=='mypage/mypage_goods_qa'||$TPL_VAR["gCurrentPageName"]=='mypage/mypage_goods_review')&&$TPL_VAR["bdList"]["cfg"]["auth"]["write"]=='y'){?>
	<div class="sub_top_right2"><a href="../board/write.php?bdId=<?php echo $TPL_VAR["req"]["bdId"]?>&mypageFl=<?php echo $TPL_VAR["req"]["mypageFl"]?>&goodsNo=<?php echo $TPL_VAR["goodsView"]["goodsNo"]?>&gboard=r&noheader=y" data-toggle="modal" data-target="#popupBoard" class="board_btn"><?php echo __('글쓰기')?></a></div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]=='board/view'){?>
	<div class="sub_top_right2"><a href="../board/list.php?bdId=<?php echo $TPL_VAR["req"]["bdId"]?>&mypageFl=<?php echo $TPL_VAR["req"]["mypageFl"]?>" class="board_btn"><?php echo __('목록가기')?></a></div>
<?php }?>
<?php if($TPL_VAR["gCurrentPageName"]=='board/plus_review_article'||$TPL_VAR["gCurrentPageName"]=='board/plus_review_photo'||$TPL_VAR["gCurrentPageName"]=='board/plus_review_goods'){?>
	<div class="sub_top_right2 btn_plus_review_register"><a href="../board/plus_review_popup_write.php?mode=addPopup" class="ogl_reviewrite" data-toggle="modal" data-target="#popupBoard"><?php echo __('리뷰등록')?></a></div>
<?php }?>
</div>
<?php }?>
<nav>
	<div class="bg"></div>
	<div class="left_close"></div>
	<div class="nav_bg_box">
		<div class="nav_box">
			<div class="nav_iscroll_box">
				<div class="nav_content_box">
					<div class="nav_language">
						<?php echo includeWidget('proc/_global_select.html')?>

					</div>
					<!-- //nav_language -->
					<div class="nav_banner">
<?php if(gd_is_login()===false){?>
<?php }else{?>
						<div class="login_txt">
							<?php echo __('%s님%s방문을 환영합니다.','<p class="name"><strong>'.gd_get_login_name().'</strong>','</p>')?>

						</div>
<?php }?>
						<div class="nav_login">
							<ul>
<?php if(gd_is_login()===false){?>
								<li><a href="../member/login.php"><?php echo __('로그인')?></a></li>
								<li><a href="../member/join_method.php"><?php echo __('회원가입')?></a></li>
<?php }else{?>
								<li><a href="../member/logout.php"><?php echo __('로그아웃')?></a></li>
								<li><a href="../mypage/index.php"><?php echo __('마이페이지')?></a></li>
<?php }?>
							</ul>
						</div>
						<div class="nav_link">
							<ul>
								<li><a href="../board/list.php?bdId=goodsqa"><?php echo __('Q&A')?></a></li>
								<li><a href="../goods/goods_today.php"><?php echo __('최근본상품')?></a></li>
								<li><a href="../mypage/wish_list.php"><?php echo __('찜리스트')?></a></li>
							</ul>
						</div>
						<!-- //nav_link -->
					</div>
					<!-- //nav_banner -->
					<div class="nav_category">
						<div class="nav_tabmenu_box">
							
							<div class="nav_tab_list">
								<span class="nav_tabmenu_tit">BRAND</span>
								<div class="tab_menu1" style="display:none">
									<div class="brand_cate">
										<a href="../goods/brand.php" class="btn_nav_brand_search"><?php echo __('브랜드 검색')?></a>
										<?php echo includeWidget("proc/category_all.html",'cateType','brand')?>

									</div>
									<!-- //brand_cate -->
								</div>
								<!-- //tab_menu1 -->
							</div>

							<div class="nav_tab_list">
								<span class="nav_tabmenu_tit on">CATEGORY</span>
								<div class="tab_menu0">
									<div class="prd_cate">
										<?php echo includeWidget("proc/category_all.html",'cateType','category')?>

									</div>
									<!-- //prd_cate -->
								</div>
								<!-- //tab_menu0 -->
							</div>

							<div class="nav_tab_list nav_community_box">
								<p class="nav_tabmenu_tit">COMMUNITY</p>
								<ul class="board_cate" style="display:none">
<?php if($TPL_defaultBoardList_1){foreach($TPL_VAR["defaultBoardList"] as $TPL_K1=>$TPL_V1){?>
									<li><a href="../board/list.php?bdId=<?php echo $TPL_K1?>"><?php echo __($TPL_V1)?></a></li>
<?php }}?>
									<li><a href="../service/faq_list.php"><?php echo __('FAQ')?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- //nav_content_box -->
			</div>
		</div>
		<!-- //nav_box -->
	</div>
	<!-- //nav_bg_box -->
</nav>
<div id="container">
	<div id="contents_wrap">