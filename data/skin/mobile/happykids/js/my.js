
$(document).ready(function () {

    $(document).on('click', '.quick_box a:nth-of-type(1)', function(){
        window.location.href='http://m.yundamin18.godomall.com/goods/goods_list.php?cateCd=001'
    })

    $("#goods_fp").fullpage({

        scrollingSpeed: 1000,

        // navigation: true,
        sectionSelector: ".goods_fp_list",
        slideSelector: ".slide",
        // slideNavigation: true,
        // keyboardScrolling: true,
        paddingTop: "",
        touchSensitivity: 15,
        // animateAnchor: true,
        scrollOverflow: true,
        // controlArrows: true,
        verticalCentered: true,
        fitToSection: true,
        navigationPosition: "right",
        css3: true,
    });

});
