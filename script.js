$(document).ready(function () {
    $(".menu-toggle").click(function () {
      $(".menu-toggle").toggleClass("menu-open");
      $(".menu").toggleClass("active");
    });
    $(".link").click(function () {
      $(".menu-toggle").toggleClass("menu-open");
      $(".menu").toggleClass("active");
    });
    $(".videoOne").click(function () {
      $(".overlayOne").toggleClass("active");
    });
    $(".videoTwo").click(function () {
      console.log("i was clicked");
      $(".overlayTwo").toggleClass("active");
    });
    $(".videoThree").click(function () {
      $(".overlayThree").toggleClass("active");
    });
    $(".videoFour").click(function () {
      $(".overlayFour").toggleClass("active");
    });
    $(".closeOverlayOne").click(function () {
      $(".overlayOne").toggleClass("active");
    });
    $(".closeOverlayTwo").click(function () {
      console.log("i was clicked");
      $(".overlayTwo").toggleClass("active");
    });
    $(".closeOverlayThree").click(function () {
      $(".overlayThree").toggleClass("active");
    });
    $(".closeOverlayFour").click(function () {
      $(".overlayFour").toggleClass("active");
    });
  });
  

  document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();  // prevent actual form submission
    document.querySelector('.flipper').style.transform = 'rotateY(180deg)';
    
    // You can add any additional form submission logic here.
});
