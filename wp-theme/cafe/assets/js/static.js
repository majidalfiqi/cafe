// query selectors
const body = document.querySelector("body");
const header = document.getElementById("header");
const burger = document.querySelector(".burger");
const footer = document.getElementById("footer");
const nav = document.getElementById("nav");
const listItems = document.querySelectorAll("#nav li");
const close = document.querySelector(".close");
const currentItem = document.querySelector(".current_page_item a");

// initializations
//nav animation delays
listItems.forEach((listItem, i) => {
  listItem.style.animationDelay = i * 0.2 + "s";
});
try {
  currentItem.classList.add("active");
} catch {
  //you are in a post page
}

// event functions
// scroll down
const scrolled = () => {
  if (scrollY > 100) header.classList.remove("expanded");
  else header.classList.add("expanded");
};

// open navbar
const navOpen = () => {
  nav.style.display = "block";
  setTimeout(() => nav.classList.add("open"), 1);
  body.style.overflow = "hidden";
};
// close navbar
const navClose = () => {
  nav.classList.remove("open");
  setTimeout(() => {
    nav.style.display = "none";
    body.style.overflow = "auto";
  }, 100);
};

// event listeners
addEventListener("scroll", scrolled);
burger.addEventListener("click", navOpen);
close.addEventListener("click", navClose);
