<?php /* Template_ 2.2.7 2022/12/14 21:08:16 /www/yundamin18_godomall_com/data/skin/front/happykids/member/login.html 000011849 */ ?>
<?php $this->print_("header",$TPL_SCP,1);?>

<div class="content_box">
	<div class="member_wrap">
		<div class="member_tit">
			<h2><?php echo __('로그인')?></h2>
		</div>
		<!-- //member_tit -->
		<div class="member_cont">

			<form id="formLogin" method="post" action="<?php echo $TPL_VAR["loginActionUrl"]?>">
				<input type="hidden" id="mode" name="mode" value="<?php echo $TPL_VAR["modeLogin"]?>"/>
				<input type="hidden" id="returnUrl" name="returnUrl" value="<?php echo $TPL_VAR["returnUrl"]?>"/>
				<input type="hidden" id="secretKey" name="secretKey" value="<?php echo $TPL_VAR["secretKey"]?>"/>
				<input type="hidden" id="encryptFl" name="encryptFl" value="Y"/>
				<div class="member_login_box">
					<h3><?php echo __('회원 로그인')?></h3>
					<div class="login_input_sec">
						<div>
							<input type="text" id="loginId" name="loginId" value="<?php echo $TPL_VAR["data"]["loginId"]?>" placeholder="<?php echo __('아이디')?>" required="true"/>
							<input type="password" id="loginPwd" name="loginPwd" value="" placeholder="<?php echo __('비밀번호')?>" required="true"/>
						</div>
						<button type="submit" class="member_login_order_btn"><?php echo __('로그인')?></button>
					</div>
					<div class="id_chk">
						<span class="form_element">
							<input type="checkbox" id="saveId" name="saveId" value="y" checked="<?php if(!empty($TPL_VAR["data"]["loginId"])){?>true<?php }?>"/>
			                <label for="saveId" class="<?php if(!empty($TPL_VAR["data"]["loginId"])){?>on<?php }?>"><?php echo __('아이디 저장')?></label>
						</span>
						<p class="dn js_caution_msg1"><?php echo __('아이디, 비밀번호가 일치하지 않습니다. 다시 입력해 주세요.')?></p>
					</div>
				</div>
				<!-- //login_box -->
				<div class="member_sns_login">
<?php if($TPL_VAR["usePaycoLogin"]){?>
					<a class="btn_payco_login js_btn_payco_login" href="#"><img src="/data/skin/front/happykids/img/etc/pc_payco.png" alt="<?php echo __('PAYCO')?> <?php echo __('아이디 로그인')?>"></a>
<?php }?>
<?php if($TPL_VAR["useFacebookLogin"]){?>
					<a href="#" class="btn_facebook_login js_btn_facebook_login" href="#" data-facebook-url="<?php echo $TPL_VAR["facebookUrl"]?>"><img src="/data/skin/front/happykids/img/etc/pc_facebook.png" alt="<?php echo __('FACEBOOK')?> <?php echo __('아이디 로그인')?>"></a>
<?php }?>
<?php if($TPL_VAR["useNaverLogin"]){?>
					<a href="#" class="btn_naver_login js_btn_naver_login" href="#" data-naver-url="<?php echo $TPL_VAR["naverUrl"]?>"><img src="/data/skin/front/happykids/img/etc/pc_naver.png" alt="<?php echo __('네이버')?> <?php echo __('아이디 로그인')?>"></a>
<?php }?>
<?php if($TPL_VAR["useKakaoLogin"]){?>
					<a href="#" class="btn_kakao_login js_btn_kakao_login" data-kakao-type="login" data-return-url="<?php echo $TPL_VAR["kakaoReturnUrl"]?>"> <img src="/data/skin/front/happykids/img/etc/pc_kakao.png" alt="<?php echo __('카카오')?> <?php echo __('아이디 로그인')?>"></a>
<?php }?>
<?php if($TPL_VAR["useWonderLogin"]){?>
					<a href="#" class="btn_wonder_login js_btn_wonder_login" data-wonder-type="login" data-wonder-url="<?php echo $TPL_VAR["wonderReturnUrl"]?>"> <img src="/data/skin/front/happykids/img/etc/pc_wonder.png" alt="<?php echo __('위메프')?> <?php echo __('아이디로 로그인')?>"></a>
<?php }?>
<?php if($TPL_VAR["useAppleLogin"]){?>
					<a href="#" class="btn_apple_login js_btn_apple_login">
						<img id="apple_btn" src="/data/skin/front/happykids/img/etc/pc_apple.png" alt="<?php echo __('Apple')?> <?php echo __('아이디 로그인')?>">
						<div id="appleid-signin" style="display: none"></div>
					</a>
<?php }?>
				</div>
				<div class="btn_login_box">
					<ul>
						<li><button id="btnJoinMember" class="btn_member_join"><?php echo __('회원가입')?></button></li>
						<li><button id="btnFindId" class="btn_member_white"><?php echo __('아이디 찾기')?></button></li>
						<li><button id="btnFindPwd" class="btn_member_white"><?php echo __('비밀번호 찾기')?></button></li>
					</ul>
				</div>
				<!-- //btn_login_box -->
			</form>

<?php if($TPL_VAR["isMemberOrder"]==false){?>
			<form action="../member/member_ps.php" method="post">
				<input type="hidden" name="mode" value="guest"/>
				<input type="hidden" name="returnUrl" value="<?php echo $TPL_VAR["returnUrl"]?>"/>
				<div class="nonmember_join_box">
					<h3><?php echo __('비회원 주문하기')?></h3>
					<div class="btn_center_box">
						<button type="submit" class="btn_member_black"><?php echo __('비회원 주문하기')?></button>
					</div>
				</div>
			</form>
<?php }?>

			<!-- //nonmember_join_box -->
<?php if($TPL_VAR["hasGuestOrder"]==false){?>
			<form id="formOrderLogin" action="../member/member_ps.php" method="post">
				<input type="hidden" name="mode" value="guestOrder"/>
				<input type="hidden" name="returnUrl" value="../mypage/order_view.php"/>
				<div class="nonmember_order_box">
					<h3><?php echo __('비회원 주문조회 하기')?></h3>
					<div class="order_input_sec">
						<div>
							<input type="text" name="orderNm" placeholder="<?php echo __('주문자명')?>"/>
							<input type="text" name="orderNo" placeholder="<?php echo __('주문번호')?>" data-max-length="<?php echo $TPL_VAR["orderNoMaxLength"]?>" />
						</div>
						<button type="submit"><?php echo __('확인')?></button>
					</div>
					<p class="js_caution_msg2"><?php echo __('주문번호와 비밀번호를 잊으신 경우, 고객센터로 문의하여 주시기 바랍니다.')?></p>
				</div>
			</form>
<?php }?>
		</div>
		<!-- //member_cont -->
	</div>
	<!-- //member_wrap -->
</div>
<!-- //content_box -->

<script type="text/javascript" src="/data/skin/front/happykids/js/jquery/jquery.serialize.object.js"></script>
<script type="text/javascript">
	var $formLogin;

	/**
	 * 로그인 정보 암호화 처리
	 */
	var Encryption = {
		get encryptMethod() {
			return 'AES-256-CBC';
		},
		get encryptMethodLength() {
			var encryptMethod = this.encryptMethod;
			var aesNumber = encryptMethod.match(/\d+/)[0];
			return parseInt(aesNumber);
		},
		encrypt : function (string, key) {
			var iv = CryptoJS.lib.WordArray.random(16);
			var salt = CryptoJS.lib.WordArray.random(256);
			var iterations = 999;
			var encryptMethodLength = (this.encryptMethodLength/4);
			var hashKey = CryptoJS.PBKDF2(key, salt, {'hasher': CryptoJS.algo.SHA512, 'keySize': (encryptMethodLength/8), 'iterations': iterations});
			var encrypted = CryptoJS.AES.encrypt(string, hashKey, {'mode': CryptoJS.mode.CBC, 'iv': iv});
			var encryptedString = CryptoJS.enc.Base64.stringify(encrypted.ciphertext);

			var output = {
				'ciphertext': encryptedString,
				'iv': CryptoJS.enc.Hex.stringify(iv),
				'salt': CryptoJS.enc.Hex.stringify(salt),
				'iterations': iterations
			};

			return CryptoJS.enc.Base64.stringify(CryptoJS.enc.Utf8.parse(JSON.stringify(output)));
		}
	}

	/**
	 * form serialize 값 변경
	 *
	 * @param values 폼명
	 * @param k 변경할 inputName
	 * @param v 변경할 inputValue
	 */
	function changeSerialize(values, k, v) {
		var found = false;
		for (i = 0; i < values.length && !found; i++) {
			if (values[i].name == k) {
				values[i].value = v;
				found = true;
			}
		}

		if (!found) {
			values.push({name: k,value: v});
		}
		return values;
	}

	$(document).ready(function () {
	    var order_no_max_length = $('input[name=orderNo]').data('max-length');
		$('#btnJoinMember').click(function (e) {
			e.preventDefault();
			location.href = '../member/join_method.php';
		});
		$('#btnFindId').click(function (e) {
			e.preventDefault();
			location.href = '../member/find_id.php';
		});
		$('#btnFindPwd').click(function (e) {
			e.preventDefault();
			location.href = '../member/find_password.php';
		});

		$('#loginId, #loginPwd').focusin(function () {
			$('.js_caution_msg1', '#formLogin').addClass('dn');
		});

		$formLogin = $('#formLogin');
		$formLogin.validate({
			dialog: false,
			rules: {
				loginId: {
					required: true
				},
				loginPwd: {
					required: true
				}
			},
			messages: {
				loginId: {
					required: "<?php echo __('아이디를 입력해주세요')?>"
				},
				loginPwd: {
					required: "<?php echo __('패스워드를 입력해주세요')?>"
				}
			}, submitHandler: function (form) {
				$('.member_login_order_btn').attr('disabled', true);
			    if (window.location.search) {
                    var _tempUrl = window.location.search.substring(1);
                    var _tempVal = _tempUrl.split('=');

                    if (_tempVal[1] == 'lnCouponDown') {
                        $('#returnUrl').val(document.referrer);
                    }
                }

			    // 로그인 정보 암호화 처리 (보안이슈)
				var encryptLoginId = Encryption.encrypt($('#loginId').val(),$('#secretKey').val());
				var encryptLoginPwd = Encryption.encrypt($('#loginPwd').val(),$('#secretKey').val());

				var params = $(form).serializeArray();
				params = changeSerialize(params, 'loginId', encryptLoginId); // 암호화 된 아이디로 변경
				params = changeSerialize(params, 'loginPwd', encryptLoginPwd); // 암호화 된 패스워드로 변경
				$.post('../member/login_ps.php', params).done(function (data) {
					var code = data.code;
					var message = data.message;
					var url = data.url;
					if (_.isUndefined(code) && _.isUndefined(message)) {
						var returnUrl = '<?php echo urldecode($TPL_VAR["returnUrl"])?>';
						if (_.isEmpty(returnUrl)) {
							location.href = '/';
						} else {
							window.location.href = returnUrl;
						}
					} else {
						alert(message);
						if (_.isUndefined(url) === false) {
							location.href = url;
						}
					}
					$('.member_login_order_btn').attr('disabled', false);
				});
			}
		});

		// 비회원 주문조회 폼 체크
		$('#formOrderLogin').validate({
			rules: {
				orderNm: 'required',
				orderNo: {
					required: true,
					number: true,
					maxlength: order_no_max_length
				}
			},
			messages: {
				orderNm: {
					required: "<?php echo __('주문자명을 입력해주세요.')?>"
				},
				orderNo: {
					required: "<?php echo __('주문번호를 입력해주세요.')?>",
					number: "<?php echo __('숫자로만 입력해주세요.')?>",
					maxlength: "<?php echo __('주문번호는 " + order_no_max_length + "자리입니다.')?>"
				}
			},
			submitHandler: function (form) {
				$.post(form.action, $(form).serializeObject()).done(function (data, textStatus, jqXhr) {
					console.log(data);
					if (data.result == 0) {
						location.replace('../mypage/order_view.php?orderNo=' + data.orderNo);
					} else {
						$('.js_caution_msg2').empty().html("<?php echo __('주문자명과 주문번호가 일치하는 주문이 존재하지 않습니다. 다시 입력해 주세요.')?><br><span><?php echo __('주문번호와 비밀번호를 잊으신 경우, 고객센터로 문의하여 주시기 바랍니다.')?></span>");
					}
				});
				return false;
			}
		});

<?php if($TPL_VAR["useAppleLogin"]){?>
		$("#apple_btn").on("click", startClicked);
		function startClicked(){
			$("#appleid-signin").click();
		}
<?php }?>
	});
</script>

<?php if($TPL_VAR["useAppleLogin"]){?>
<script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
<script type="text/javascript">
	AppleID.auth.init({
		clientId : '<?php echo $TPL_VAR["client_id"]?>',
		scope : 'name email',
		redirectURI: '<?php echo $TPL_VAR["redirectURI"]?>',
		state: '<?php echo $TPL_VAR["state"]?>',
		// usePopup: true
	});
</script>
<?php }?>

<?php $this->print_("footer",$TPL_SCP,1);?>