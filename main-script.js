var loader = document.getElementById("preloader");

window.addEventListener("load", function(){
  loader.classList.add("fade-out");  // Add fade-out class

  // Wait for the fade-out animation to complete before hiding the element
  loader.addEventListener("transitionend", function() {
    loader.style.display = "none";
  });
});



