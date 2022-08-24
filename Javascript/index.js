//Taken from https://stackoverflow.com/questions/40638969/automatic-and-manual-slideshow 
//automatic + manual slide show
var slideIndex = 1;
var timer = null;
showSlides(slideIndex);

//change to the next slide
function plusSlides(n) {
  clearTimeout(timer);
  showSlides(slideIndex += n);
}

//change to previous slide
function currentSlide(n) {
  clearTimeout(timer);
  showSlides(slideIndex = n);
}

//auto show slides
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("img");
  var dots = document.getElementsByClassName("dot");

  if (n==undefined){n = ++slideIndex}
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  timer = setTimeout(showSlides, 6000); //change slide every 6 seconds
} 