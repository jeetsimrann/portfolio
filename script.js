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
  
// Form submission
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();  // Prevent the form's default submission

        var formData = new FormData(e.target);  // Get form data

        fetch('https://formspree.io/f/xleybaan', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => {
            if (response.status === 200 || response.status === 201) {
                // Flip effect on successful form submission
                document.querySelector('.flipper').style.transform = 'rotateY(180deg)';
            } else {
                // Handle errors or show a message
                alert('There was an error. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error. Please try again.');
        });
    });

});

