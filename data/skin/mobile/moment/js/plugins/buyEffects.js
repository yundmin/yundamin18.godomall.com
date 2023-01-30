/**
 * buyEffects.js
 *
 * @author qnibus <qnibus@godo.co.kr>
 */
var buyEffects = (function() {
    function mobilecheck() {
        var check = false;
        (function(a) {
            if (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
                check = true
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    }

    function init() {


        var container = $('.st-container'),
            menu = container.find('.st_buy'),
            buttons = $('.st_btn_buy, .st_buy_close'),
            // eventType = mobilecheck() ? 'touchend' : 'click'; 아래 작업 백업
            eventType = mobilecheck() ? 'click' : 'click'; // mobile이든 아니든 click으로만 한정 지었습니다. 스와이프 끝났을 때 실행 방지 차원 -201160726 윤태건
//			eventType = 'click',
        resetBuy = function() {
            container.removeClass('st_buy_open');
            container.find('.detail_open_close').removeClass('on');
            $('body').css({overflow:'','-webkit-overflow-scrolling':'touch'});
            $('html').css({overflow:'','-webkit-overflow-scrolling':'touch'});
        },
            bodyBuyClickFn = function(event) {

                container.find('.st_buy').css("bottom","100");

                // document click시 어디를 눌렀는지 확인하여 처리
                var target = $(event.target);
                //쿠폰적용하기 클릭시에는 옵션창 닫히지 않음
                if(target.closest('.delete_goods').length == 0 && target.closest('#popupCouponApply').length =='0' && $(target).closest('.js_coupon_apply_close').length ==0) {
//                    if (target.closest('.st-buy-close').length || !target.parents('.st-buy').length) {
                    if (target.closest('.st_buy_close').length) {

                        $('.goods_view_image_slider').trigger('beforeChange');
                        resetBuy();
                        $(document).off(eventType, bodyBuyClickFn);

                        $('.js_multi_option').each(function () {
                            if($(this).find("div.optbx").css("display") =='block') {
                                $(this).find(".js_option_select ").click();
                                $(this).css("position","");
                                $(this).css("z-index","");
                                $(this).css("top","");
                                $(this).css("height","");
                            }
                        });

                        setTimeout(function() {
                            $(".js_goods_add_pay").hide();
                            $(".st_buy_content").hide();
                            $(".js_goods_view_buy_btn").show();
                            $(".st_buy_top_btn").height("90px");
                            $(".st_btn_buy_outer").removeClass("hidden");
                        }, 100);

                    }
                }
            };

        buttons.each(function(i) {
            var effect = $(this).data('effect');
            if(!menu.hasClass(effect)) menu.addClass(effect);

            var pay = $(this).data('pay');

            $(this).on(eventType, function(ev) {
                if (!container.hasClass('st_buy_open')) {
                    $(".js_goods_add_pay").show();
                    $(".st_buy_content").show();

                    $(".js_goods_view_buy_btn").hide();
                    $(".st_buy_top_btn").height("16px");

                    ev.stopPropagation();
                    ev.preventDefault();

                    container.attr('class', 'st-container'); // clear
                    container.addClass(effect);

                    setTimeout(function() {
                        //menu.css("bottom","0");
                        container.addClass('st_buy_open');
						container.find('.detail_open_close').addClass('on');
                    }, 25);

                    $(document).on(eventType, bodyBuyClickFn);
                }
            });
        });
    }
    init();
})();
