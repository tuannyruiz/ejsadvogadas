// CARROSSEL

$('.depoimentos-carrossel').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true
      }
    }
  ]
});

