"use strict";!function(e,i){var t=new Swiper(".swiper-technologies-container",{slidesPerView:5,loop:!0,speed:6e3,centeredSlides:!0,mode:"horizontal",roundLengths:!0,grabCursor:!0,autoplay:{delay:0,disableOnInteraction:!1,reverseDirection:!0},breakpoints:{1439:{slidesPerView:4},1179:{slidesPerView:3},767:{slidesPerView:2}}});t.update(),i.addEventListener("resize",function(){t.autoplay.stop(),t.autoplay.start()}),i.addEventListener("load",function(){t.update()})}(document,window);