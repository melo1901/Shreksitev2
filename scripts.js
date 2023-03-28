/* Reavling elements */
window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 150;

    if (revealtop < windowheight - revealpoint) {
        reveals[i].classList.add("active");
    } else {
        reveals[i].classList.remove("active");
    }
    }
}


/* GET SHREKED play/stop on click */
function toggle_on() {
    var shreking = document.querySelector(".shreking");
    var video = document.querySelector("video");
    shreking.classList.toggle("active");
    video.play();
    video.volume = 0.2;
    video.currentTime = 0;
}
function toggle_off() {
    var shreking = document.querySelector(".shreking");
    var video = document.querySelector("video");
    shreking.classList.toggle("active");
    video.pause();
    video.currentTime = 0;
}


/* Form validation */
function validateFormReview() {
    let x = document.forms["review"]["name"].value;
    let y = document.forms["review"]["email"].value;
    let z = document.forms["review"]["textarea"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    if (y.indexOf(".") == -1 || y.indexOf("@") == -1) {
        alert("Key character of email missing");
        return false;
    }
    else if (y == "") {
        alert("Email must be filled out");
        return false;
      }
    if (z == "") {
        alert("You can not send an empty review");
        return false;
      }      
    
  }

  function validateFormContact() {

    let a = document.forms["contact"]["name"].value;
    let b = document.forms["contact"]["email"].value;
    let c = document.forms["contact"]["textarea"].value;
    if (c == "") {
      alert("You can not send an empty message");
      return false;
    } 
    if (a == "") {
      alert("Name must be filled out");
      return false;
    }
    if (b == "") {
      alert("Email must be filled out");
      return false;
    }
    else if (b.indexOf(".") == -1 || y.indexOf("@") == -1) {
        alert("Invalid email format");
        return false;
    }
    
  }

/* Menu animation trigger */
  const menu = document.getElementById("menu");

  Array.from(document.getElementsByClassName("menu-item"))
    .forEach((item, index) => {
      item.onmouseover = () => {
        menu.dataset.activeIndex = index;
      }
    });
    

/* Carousel Navigation */

let activeIndex = 0;

const slides = document.getElementsByTagName("article");

const handleLeftClick = () => {
  const nextIndex = activeIndex - 1 >= 0 ? activeIndex - 1 : slides.length - 1;
  
  const currentSlide = document.querySelector(`[data-index="${activeIndex}"]`),
        nextSlide = document.querySelector(`[data-index="${nextIndex}"]`);
        
  currentSlide.dataset.status = "after";
  
  nextSlide.dataset.status = "becoming-active-from-before";
  
  setTimeout(() => {
    nextSlide.dataset.status = "active";
    activeIndex = nextIndex;
  });
}

const handleRightClick = () => {
  const nextIndex = activeIndex + 1 <= slides.length - 1 ? activeIndex + 1 : 0;
  
  const currentSlide = document.querySelector(`[data-index="${activeIndex}"]`),
        nextSlide = document.querySelector(`[data-index="${nextIndex}"]`);
  
  currentSlide.dataset.status = "before";
  
  nextSlide.dataset.status = "becoming-active-from-after";
  
  setTimeout(() => {
    nextSlide.dataset.status = "active";
    activeIndex = nextIndex;
  });
}    
