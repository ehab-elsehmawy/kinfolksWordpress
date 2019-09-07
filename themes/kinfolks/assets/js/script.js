jQuery(document).ready(function ($) {
  // Add smooth scrolling to all links
  if ($('.navbar').offset().top >= 100) {

    $('.navbar').addClass('scrolled-nav');
    // $('#navbar').css({'padding-top':'0px'});
  } else {
    $('#navbar').removeClass('scrolled-nav');
    // $('#navbar').css({'padding-top':'80px'});
  }
  $(window).scroll(function () {
    scrollTop = $(window).scrollTop();

    if (scrollTop >= 100) {
      $('.navbar').addClass('scrolled-nav');
    } else if (scrollTop < 100) {
      $('.navbar').removeClass('scrolled-nav');
    }
  });
  $(".navbar .nav-link").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      // event.preventDefault();
      //mPS2id-highlight
      // Store hash
      var hash = this.hash;
      console.log($(hash).offset().top)
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 0

      }, 800, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $('.r-section .nav-tabs .nav-item:hover .nav-link').click(function (event) {

    event.preventDefault();

  });
});

///team slider ////
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 30,
  responsiveClass: true,
  autoplay: true,
  nav: true,
  navText: ["<div class='icon icon-arrow-left7'><i class='fas fa-angle-left'></i></div>", "<div class='icon icon-arrow-right7' ><i class='fas fa-angle-right'></div>"], items: 1,
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    992: {
      items: 2,
      nav: false
    },
    1000: {
      items: 2,
      nav: true,
      loop: false
    }
  }
})