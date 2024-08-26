var loader = document.getElementById("preloader");
var coll = document.getElementsByClassName("collapsible");
var i;

window.addEventListener("load", function(){
  loader.classList.add("fade-out");  // Add fade-out class

  // Wait for the fade-out animation to complete before hiding the element
  loader.addEventListener("transitionend", function() {
    loader.style.display = "none";
  });
});

document.querySelectorAll('.scroll-link').forEach(link => {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    const headerOffset = 100; // Adjust based on your fixed header height
    const elementPosition = targetElement.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
    });
  });
});

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

