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
}