$(window).on('load', function () {
  $preloader = $('.loaderArea'),
    $loader = $preloader.find('.loader');
  $loader.fadeOut();
  $preloader.delay(350).fadeOut('slow');
});

$('.loader').ready(function() {
  $('.loader').addClass('active');
});

function Progress() {
  $('.loaderArea__preloader').width(currentCount*100.0/imagesCount+'%');
}

var imagesCount = $('img').length;
var currentCount = 0;
$('img').each(function() {
  $(this).on('load',function() {
    currentCount++;
    Progress();
  });
});
