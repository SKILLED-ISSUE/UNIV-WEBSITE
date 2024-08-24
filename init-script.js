const header = document.querySelector(".init-header"),
  spacer = document.querySelector(".spacer");

document.addEventListener("DOMContentLoaded", function () {
  let lastScrollTop = 0;
  const scrollThreshold = 20;

  window.addEventListener("scroll", function () {
    let currentScrollTop =
      window.scrollY || document.documentElement.scrollTop;

    if (
      currentScrollTop > lastScrollTop &&
      currentScrollTop > scrollThreshold
    ) {
      header.classList.add("header-container");
      spacer.style.height = '0em';
    } else if (currentScrollTop <= scrollThreshold) {
      header.classList.remove("header-container");
      spacer.style.height = '28em';
    }

    lastScrollTop = currentScrollTop;
  });
});