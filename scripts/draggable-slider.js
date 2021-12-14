$(document).ready(function () {
  $(".gallery-slider").slick({
    centerMode: true,
    slidesToShow: 3,
    infinite: false,
    dots: true,
    arrows: true,
    prevArrow:
      "<div class='slick-prev slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
    nextArrow:
      "<div class='slick-next slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
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

  $(".single-item").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToScroll: 1,
    slidesToShow: 1,
    arrows: true,
    prevArrow:
      "<div class='slick-prev slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
    nextArrow:
      "<div class='slick-next slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        },
      },
    ],
  });

  $(".three-item").slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      "<div class='slick-prev slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
    nextArrow:
      "<div class='slick-next slick-arrow'><img src='/images/arrow-slider.svg' /></div>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        },
      },
    ],
  });
});
