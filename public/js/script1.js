/*****navbar******/
function sideBar() {
  var x = document.getElementById("maNav");
  if (x.className === "Nav") {
    x.className += " responsive";
  } else {
    x.className = "Nav";
  }
}



var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}

slides[slideIndex-1].style.display = "block";

}

/*****************poopup********************* */



/***faq js */




