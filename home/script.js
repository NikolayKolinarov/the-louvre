const nav = document.querySelector("nav");
const navItems = document.querySelector("#navbarsExample05");
const navBrand = document.querySelector(".navbar-brand");

window.addEventListener("scroll", function () {
  if (window.pageYOffset > 0) {
    nav.classList.add("bg-dark", "shadow");
    navItems.classList.add("navbar-dark","shadow");
  } else {
    nav.classList.remove("bg-dark", "shadow");
    navItems.classList.remove("navbar-dark","shadow");
  }
});
