// query selectors
const body = document.querySelector("body");
const header = document.getElementById("header");
const burger = document.querySelector(".burger");
const footer = document.getElementById("footer");
const nav = document.getElementById("nav");
const listItems = document.querySelectorAll("#nav li");
const close = document.querySelector(".close");
const heroH1 = document.querySelector(".hero h1");

// initializations
//nav animation delays
listItems.forEach((listItem, i) => {
  listItem.style.animationDelay = i * 0.2 + "s";
});

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

// logic
// typewriting
heroH1.textContent = "";
const typewriter = new Typewriter(heroH1);
typewriter
  .typeString("You're looking for the best coffee?")
  .pauseFor(1000)
  .deleteChars(7)
  .typeString("experts?")
  .pauseFor(2500)
  .deleteAll()
  .typeString("You just found the right place!")
  .start();
