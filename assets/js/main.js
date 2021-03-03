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
});