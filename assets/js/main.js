$(document).ready( function() {
  // START:: OWL CAROUSEL
  $('#testemonials_slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    center:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    rtl: true, 
  });

  $('#videos_slider').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    margin:10,
    nav:true,
    dots: false,
    items:1,
    rtl: true, 
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
        items:2,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });
  // START:: OWL CAROUSEL

  // START:: TOGGLE FORMS
  $('#toggle_forms').on('click', function() {
    $('#login_form_wraper').css('display', 'none');
    $('#signup_form_wraper').css('display', 'block');
  });
  // END:: TOGGLE FORMS

  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

});
