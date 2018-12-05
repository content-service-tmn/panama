$(window).on('load', function () {
  $preloader = $('.loaderArea'),
    $loader = $preloader.find('.loader');
  $loader.fadeOut();
  $preloader.delay(350).fadeOut('slow');
});

$('.loader').ready(function() {
  $('.loader').addClass('active');
});

var imagesCount = $('img').length + $('div').length;
var currentCount = 0;
$('img,div').each(function() {
  $(this).ready(function() {
    currentCount++;
    console.log(currentCount);
    $('.loaderArea__preloader').width(currentCount*100.0/imagesCount+'%');
  });
});
