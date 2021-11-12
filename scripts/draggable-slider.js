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
});
