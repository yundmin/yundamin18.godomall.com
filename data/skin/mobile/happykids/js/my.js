
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
        afterResponsive: function (isResponsive) {},
        responsiveHeight: 600,
        afterResponsive: function (isResponsive) {},
        afterLoad: function (origin, destination, direction) {
            $(destination.item).find("wow").addClass("animated fadeInUp");
        },
        navigationPosition: "right",
        navigationTooltips: ["섹션1", "섹션2", "섹션3", "섹션4"],
        css3: true,
        onLeave: function (index, nextIndex, direction) {
            //lazyload background
            if (nextIndex === 3) {
                var destinationSection = $(".section4").eq(nextIndex - 1);
                destinationSection.addClass("맨마지막백그라운드");
            }
        },
    });
    $("로고").click(function () {
    $.fn.fullpage.moveTo(1);
});
});
