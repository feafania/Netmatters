export default function initSlick() {
  $('.banner-slider').slick(
    {
      slidesToShow: 1,
      slidesToScroll: 1,

      infinite: true,

      autoplay: true,
      autoplaySpeed: 4000,

      dots: true,
      dotsClass: 'banner-slider__dots',
      draggable: false,
      arrows: false,

      pauseOnHover: true,
      pauseOnFocus: true,

      adaptiveHeight: true,

      speed: 300
    }
  );

    $('.logo-strip__list').slick(
      {
          variableWidth: true,
          slidesToScroll: 1,
          slidesToShow: 10,

          infinite: true,

          autoplay: true,
          autoplaySpeed: 3000,

          dots: false,
          draggable: false,
          arrows: false,

          pauseOnHover: true,
          pauseOnFocus: true,

          adaptiveHeight: true,

          speed: 250
      }
    );
}