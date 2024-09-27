import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css/bundle";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper-banner");

new Swiper(".js-swiper-news");

new Swiper(".js-swiper-gallery");

new Swiper(".js-swiper-videos");

new Swiper(".js-swiper-general-posts-editorials");

// new Swiper(".js-swiper-magazine-banner", {
//   modules: [Navigation, Pagination],
//   slidesPerView: 1,

//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },

//   pagination: {
//     el: ".swiper-pagination",
//     type: "bullets",
//   },
// });

new Swiper(".js-swiper-parishes", {
  modules: [Navigation, Pagination],
  slidesPerView: 3,
  spaceBetween: 16,

  navigation: {
    nextEl: ".js-swiper-button-next-parishes",
    prevEl: ".js-swiper-button-prev-parishes",
  },

  // pagination: {
  //   el: ".swiper-pagination",
  //   type: "bullets",
  // },
});
