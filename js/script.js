"use strict";

// 最小幅のみ
new ViewportExtra(375);

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

$("#js-headerToggle").click(function () {
  $(".header__toggle,.navi-header").toggleClass("active");
});

// SP幅：100vhでツールバー下に要素を被らせなくする処理
function setHeight() {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
}

setHeight();

window.addEventListener("resize", setHeight);
// 100vhでツールバー下に要素を被らせなくする処理 ここまで

// レスポンシブの360px未満対応を終わらせる処理
const viewport = document.querySelector('meta[name="viewport"]');
function switchViewport() {
  const value = window.outerWidth > 360 ? "width=device-width,initial-scale=1" : "width=360";
  if (viewport.getAttribute("content") !== value) {
    viewport.setAttribute("content", value);
  }
}
addEventListener("resize", switchViewport, false);
switchViewport();

// #で始まるa要素をクリックした場合に処理
$("a[href^='#']").click(function () {
  const adjust = 0;
  const speed = 1000;
  const href = $(this).attr("href");
  const target = $(href == "#" || href == "" ? "html" : href);
  const position = target.offset().top + adjust;
  $("body,html").animate({ scrollTop: position }, speed, "swing");
  return false;
});

const news = $("#js-news").offset().top;
const speed = 1000;
$("#js-scrollDown").click(function () {
  $("html, body").animate({ scrollTop: news }, speed, "swing");
});

$("#js-navi-menu,#js-navi-aboutHifu").click(function () {
  $(".navi-header,.header__toggle").removeClass("active");
});
