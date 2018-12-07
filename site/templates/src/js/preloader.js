$(window).on('load', function () {
  $preloader = $('.loaderArea'),
    $loader = $preloader.find('.loader');
  $loader.fadeOut();
  $preloader.delay(350).fadeOut('slow');
});

$('.loader').ready(function() {
  $('.loaderArea__preloader').width('100%');
  $('.loader').addClass('active');
});

var imagesCount = $('img').length + $('div').length+1;
var currentCount = 0;
$('img,div').each(function() {
  $(this).ready(function() {
    currentCount++;
    $('.loaderArea__preloader').width(currentCount*100.0/imagesCount+'%');
  });
});
