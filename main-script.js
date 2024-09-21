var loader = document.getElementById("preloader");
var coll = document.getElementsByClassName("collapsible");
var i;

window.addEventListener("load", function () {
  loader.classList.add("fade-out"); // Add fade-out class

  // Wait for the fade-out animation to complete before hiding the element
  loader.addEventListener("transitionend", function () {
    loader.style.display = "none";
  });
});

document.querySelectorAll(".scroll-link").forEach((link) => {
  link.addEventListener("click", function (event) {
    event.preventDefault();
    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);
    const headerOffset = 100; // Adjust based on your fixed header height
    const elementPosition = targetElement.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth",
    });
  });
});

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  const faders = document.querySelectorAll(".fade-in");

  const appearOptions = {
    threshold: 0.1, // How much of the element should be visible before triggering the animation
    rootMargin: "0px 0px -50px 0px", // Adjust if you want to trigger sooner or later
  };

  const appearOnScroll = new IntersectionObserver(function (
    entries,
    appearOnScroll,
  ) {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add("visible");
        appearOnScroll.unobserve(entry.target); // Stop observing once the element is visible
      }
    });
  }, appearOptions);

  faders.forEach((fader) => {
    appearOnScroll.observe(fader);
  });
});

if (window.innerWidth < 768) {
  document.getElementById("warning-overlay").style.display = "flex";
  document.body.classList.add("no-scroll"); // Prevent background scrolling
}

// Popup DialogBox
function syllabiDialog() {
  document.getElementById("syllabi-dialog").style.display = "block";
}

// CAROUSEL TEST

let slideIndex = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".carousel-item");
  const totalSlides = slides.length;

  if (index >= totalSlides) {
    slideIndex = 0;
  } else if (index < 0) {
    slideIndex = totalSlides - 1;
  } else {
    slideIndex = index;
  }

  const offset = -slideIndex * 100;
  document.querySelector(".carousel-inner").style.transform =
    `translateX(${offset}%)`;
}

function moveSlide(step) {
  showSlide(slideIndex + step);
}

showSlide(slideIndex);

setInterval(() => moveSlide(1), 3000);
