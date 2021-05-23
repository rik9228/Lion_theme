"use strict";
const $ = jQuery.noConflict();

// IE対策
objectFitImages();

$("#js-headerToggle").click(function () {
  $(".header__toggle,.navi-header").toggleClass("active");
});

// SP幅：100vhでツールバー下に要素を被らせなくする処理
function setHeight() {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
}

setHeight();

window.addEventListener("resize", setHeight, { passive: true });
// 100vhでツールバー下に要素を被らせなくする処理 ここまで

// レスポンシブの360px未満対応を終わらせる処理
const viewport = document.querySelector('meta[name="viewport"]');
function switchViewport() {
  const value = window.outerWidth > 360 ? "width=device-width,initial-scale=1" : "width=360";
  if (viewport.getAttribute("content") !== value) {
    viewport.setAttribute("content", value);
  }
}
addEventListener("resize", switchViewport, false, { passive: true });
switchViewport();

// AOS
AOS.init();
