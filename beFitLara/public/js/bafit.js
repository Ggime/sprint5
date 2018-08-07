window.onload = function(){
  var prev = document.querySelector('.prev')
  var next = document.querySelector('.next')
  prev.onclick = function(){
    plusSlides(-1)
  }
  next.onclick = function(){
    plusSlides(1)
  }
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var recom = document.getElementsByClassName("reco");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < recom.length; i++) {
        recom[i].className = recom[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    recom[slideIndex-1].className += " active";
  }
}
