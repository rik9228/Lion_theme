"use strict";

const url = location.href;
const tabs = document.querySelectorAll(".posts__listItem");

tabs.forEach((tab) => {
  if (url.includes(tab.id)) {
    tab.firstElementChild.classList.add("tab-current");
  }
});
