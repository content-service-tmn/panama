$(window).on('load', function () {
  $preloader = $('.loaderArea'),
  //   $loader = $preloader.find('.loader');
  // $loader.fadeOut();
  $preloader.fadeOut('slow');
  //make animations

  setTimeout(function(){
    $(".header__slider").addClass('animate');
    $(".events__wrapper").addClass('animate');
    $(".scheme-start__wrapper").addClass('animate');
  }, 1000);
  setTimeout(function(){
    $(".events__wrapper").addClass('disappear');
    $(".scheme-start__wrapper").addClass('disappear');
  }, 3000);
});

$('.loader').ready(function() {
  $('.loader').addClass('active');
});

function Progress() {
  $('.loaderArea__preloader').width(currentCount*100.0/imagesCount+'%');
}

var imagesCount = $('img').length+$('div').length;
var currentCount = 0;
$('img').each(function() {
  $(this).on('load',function() {
    currentCount++;
    Progress();
  });
});
$('div').each(function() {
  $(this).ready(function() {
    currentCount++;
    Progress();
  });
});
