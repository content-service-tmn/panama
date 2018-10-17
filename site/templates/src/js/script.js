$(document).ready(function(){
  console.log('test');
  $('.stocks__slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3
  });
});
