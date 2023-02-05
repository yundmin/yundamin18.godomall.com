
    $(document).ready(function () {
    $("#goods_fp").fullpage({

        scrollingSpeed: 1000,
        slidesNavigation: true,
        navigation: true,
        sectionSelector: ".goods_fp_list",
        slideSelector: ".slide",
        slideNavigation: true,
        keyboardScrolling: true,
        paddingTop: "",
        touchSensitivity: 15,
        animateAnchor: true,
        // scrollOverflow: true,
        controlArrows: true,
        responsiveWidth: 750,
        verticalCentered: true,
        // fixedElements : '#header, .footer',
        fitToSection: true,

        navigationPosition: "right",

        css3: true,

    });
    $("로고").click(function () {
    $.fn.fullpage.moveTo(1);
});
});
