$(document).ready(function () {
  $('.gallery-slider').slick({
    centerMode: true,
    slidesToShow: 3,
    infinite: false,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          centerMode: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $('.single-item').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 5000,
  slidesToScroll: 1,
  slidesToShow: 1,
  });

  $('.three-item').slick({
  dots: true,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll:1,
  arrows: true,
  });
  
});


