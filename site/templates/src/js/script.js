$(document).ready(function(){
  $('.menu').clone().appendTo('.menu-wrapper');
  if ($(window).scrollTop() > 500) {
    $('.menu-wrapper').addClass('js-active');
  }
  else {
    $('.menu-wrapper').removeClass('js-active');
  };
  $(window).scroll(function(){
    if ($(this).scrollTop() > 500) {
      $('.menu-wrapper').addClass('js-active');
    }
    else {
      $('.menu-wrapper').removeClass('js-active');
    };
  });
  $('.stocks__slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $('.cinema__slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
  });
  $('.header__slider').slick({
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows:false
  });
  $('.gallery__slider').slick({
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000
  });
  $('.gallery__bottom-slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    centerMode:true,
    centerPadding:0,
    slidesToScroll: 1
  });

  //stick 2 sliders
  $('.gallery__slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.gallery__bottom-slider').slick('slickGoTo',nextSlide);
  });
  $('.gallery__bottom-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.gallery__slider').slick('slickGoTo',nextSlide);
  });

  $('.renters-gallery__slider').slick({
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2000
  });
  $('.renters-gallery__slider-bottom').slick({
    infinite: true,
    arrows:false,
    speed: 300,
    slidesToShow: 5,
    centerMode:true,
    centerPadding:0,
    slidesToScroll: 1
  });

  $('.renters-gallery__slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.renters-gallery__slider-bottom').slick('slickGoTo',nextSlide);
  });
  $('.renters-gallery__slider-bottom').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.renters-gallery__slider').slick('slickGoTo',nextSlide);
  });
});
