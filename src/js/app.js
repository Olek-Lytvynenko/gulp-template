import * as flsFunction from "./modules/function.js";

flsFunction.isWebp();

import Swiper, { Navigation, Pagination } from "swiper";

const swiper = new Swiper();

window.addEventListener("hashchange", () => {
  if (window.location.hash === "#menu") {
    document.body.classList.add("page__body--with-menu");
  } else {
    document.body.classList.remove("page__body--with-menu");
  }
});
