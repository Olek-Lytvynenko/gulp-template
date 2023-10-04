window.addEventListener("hashchange", () => {
  if (window.location.hash === "#menu") {
    document.body.classList.add("page__body--with-menu");
    document.body.style.overflow = "hidden";
  } else {
    document.body.classList.remove("page__body--with-menu");
    document.body.style.overflow = "unset";
  }
});
