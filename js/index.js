"use strict";

$("#js-mainVisual")
  .on("init", function (event, slick) {
    $(".current").text(0 + `${slick.currentSlide + 1}`);
    $(".total").text(0 + `${slick.slideCount}`);
  })
  .slick({
    infinite: true,
    autoplay: true,
    speed: 1000,
    fade: true,
    cssEase: "linear",
  })
  .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    $(".current").text(0 + `${nextSlide + 1}`);
  });

$("#js-newsSlider").slick({
  infinite: true,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        centerMode: true,
        variableWidth: true,
        dots: true,
      },
    },
  ],
});

$("#sbi_images").slick({
  variableWidth: true,
  centerMode: true,
});

const news = $("#js-news").offset().top;
const speed = 1000;
$("#js-scrollDown").click(function () {
  $("html, body").animate({ scrollTop: news }, speed, "swing");
});

$("#js-navi-menu,#js-navi-aboutHifu").click(function () {
  $(".navi-header,.header__toggle").removeClass("active");
});

// new ScrollHint(".js-scrollable", {
//   scrollHintIconAppendClass: "scroll-hint-icon-white", // white-icon will appear
//   applyToParents: true,
//   i18n: {
//     scrollable: "スクロールできます",
//     remainingTime: -1,
//   },
// });
