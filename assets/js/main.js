$(document).ready( function() {
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
    // rtl: true, 
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
    // rtl: true, 
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
});