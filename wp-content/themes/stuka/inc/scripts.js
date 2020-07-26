$(document).ready(function () {
  $(".mobile-menu-ackapa").click(function () {
    $(".mobile-menu").toggleClass("mobile-menu-show-hide");
  });
});

$(".anasayfa-slider").owlCarousel({
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  lazyLoad: true,
  loop: true,
  items: 1,
  dots: false,
  nav: true,
  navText: [
    '<i class="fa fa-chevron-left"></i>',
    '<i class="fa fa-chevron-right"></i>'
  ]
});
