$(document).ready(function(){
  $('.modal__cell a').hover(
    function() {
      var id_attr = $(this).attr('data-id');
      var color_attr = $(this).attr('data-color');
      var div_img = $('.modal__img[data-id='+id_attr+']');
      if (div_img!=undefined && !div_img.hasClass('active')) {
        $('.modal__img').removeClass('active');
        div_img.addClass('active');
      }
      if (color_attr!=undefined) {
        $('.modal').css('background-color',color_attr);
      }
      else {
        $('.modal').css('background-color','');
      }
    }
  );
});
