// query selectors
const body = document.querySelector("body");
const header = document.getElementById("header");
const burger = document.querySelector(".burger");
const footer = document.getElementById("footer");
const nav = document.getElementById("nav");
const listItems = document.querySelectorAll("#nav li");
const close = document.querySelector(".close");
const slider = document.getElementById("slider");
const sliderItems = document.getElementById("slides");
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const heroH1 = document.querySelector(".hero h1");
const cards = document.querySelectorAll(".card");

// initializations
//nav animation delays
listItems.forEach((listItem, i) => {
  listItem.style.animationDelay = i * 0.2 + "s";
});
// get slide width
let slideSize = sliderItems.getElementsByClassName("slide")[0].offsetWidth;
// set slide index
let index = 0;
//slider function
//by Claudia Conceicao
function slide(items, prev, next) {
  let posX1 = 0,
    posX2 = 0,
    posInitial,
    posFinal,
    threshold = 100,
    slides = items.getElementsByClassName("slide"),
    slidesLength = slides.length,
    allowShift = true;
  // Mouse events
  items.onmousedown = dragStart;

  // Touch events
  items.addEventListener("touchstart", dragStart, { passive: true });
  items.addEventListener("touchend", dragEnd);
  items.addEventListener("touchmove", dragAction, { passive: true });

  // Click events
  prev.addEventListener("click", function () {
    if (index !== 0) shiftSlide(-1);
  });
  next.addEventListener("click", function () {
    if (index !== slidesLength - 1) shiftSlide(1);
  });

  // Transition events
  items.addEventListener("transitionend", checkIndex);

  function dragStart(e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;

    if (e.type == "touchstart") {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  function dragAction(e) {
    e = e || window.event;

    if (e.type == "touchmove") {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    items.style.left = items.offsetLeft - posX2 + "px";
  }

  function dragEnd(e) {
    posFinal = items.offsetLeft;
    if (posFinal - posInitial < -threshold && index !== slidesLength - 1) {
      shiftSlide(1, "drag");
    } else if (posFinal - posInitial > threshold && index !== 0) {
      shiftSlide(-1, "drag");
    } else {
      items.style.left = posInitial + "px";
    }

    document.onmouseup = null;
    document.onmousemove = null;
  }

  function shiftSlide(dir, action) {
    items.classList.add("shifting");

    if (allowShift) {
      if (!action) {
        posInitial = items.offsetLeft;
      }

      if (dir == 1) {
        items.style.left = posInitial - slideSize + "px";
        index++;
      } else if (dir == -1) {
        items.style.left = posInitial + slideSize + "px";
        index--;
      }
    }

    switch (index) {
      case 0:
        prev.style.display = "none";
        break;
      case 1:
        prev.style.display = "block";
        break;
      case slidesLength - 2:
        next.style.display = "block";
        break;
      case slidesLength - 1:
        next.style.display = "none";
    }

    allowShift = false;
  }

  function checkIndex() {
    items.classList.remove("shifting");

    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }

    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }

    allowShift = true;
  }
}

// event functions
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
// letter follow mouse
const follow = (e) => {
  const letter = e.target.querySelector(".letter");
  const rect = e.target.getBoundingClientRect();
  const x = e.clientX - rect.left; //x position within the element.
  const y = e.clientY - rect.top; //y position within the element.
  const w = getComputedStyle(e.target).width.match(/\d+/)["0"];
  const h = getComputedStyle(e.target).height.match(/\d+/)["0"];
  letter.style.lineHeight = h + "px";
  letter.style.top = y + "px";
  letter.style.left = x + "px";
  letter.style.backgroundPosition = `${w / 2 - x}px ${h / 2 - y}px`;
};
// window resize
const updateSize = (e) => {
  if (e.target.innerWidth >= 1600) {
    slideSize = Math.min(e.target.innerWidth, (e.target.innerHeight * 0.9 * 4) / 3);
  } else {
    slideSize = Math.min(e.target.innerWidth, (e.target.innerHeight * 0.7 * 4) / 3);
  }
  sliderItems.style.left = -1 * index * slideSize + "px";
};

// event listeners
burger.addEventListener("click", navOpen);
close.addEventListener("click", navClose);
cards.forEach((card) => card.addEventListener("mousemove", follow));
addEventListener("resize", updateSize);

// logic
//slider
slide(sliderItems, prev, next);
// typewriting
heroH1.textContent = "";
const typewriter = new Typewriter(heroH1);
typewriter.typeString("The Best Coffee Ever!").start();
