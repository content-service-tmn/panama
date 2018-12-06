$(document).ready(function(){
  var tabs = $('.map__switcher li');
  var groups = $('.map__group');
  var active = -1;
  ChangeActive(0);

  $('.map__search input').on('input',function(){
    $('.map__catalog li').removeClass('hidden');
    $('.map__catalog ul').removeClass('hidden');
    var substr = $(this).val().toUpperCase();
    $('.map__catalog li').each(function(){
      if ($(this).is(':first-child')) return;
      var str = $(this).text().toUpperCase();
      if (str.indexOf(substr)!=0) $(this).addClass('hidden')
    });
    $('.map__catalog ul').each(function(){
      if ($(this).find('li').length-1==$(this).find('li.hidden').length) $(this).addClass('hidden');
    });
  });
  $('.map__marker').click(function(){
    var id = $(this).attr('data-id');
    $(".info").removeClass('active');
    $(".info[data-id='"+id+"']").addClass('active');
    $('html, body').animate({
       scrollTop: $(".info[data-id='"+id+"']").offset().top
   }, 500);
  });
  $('.map__catalog li:not(:first-child)').click(function(){
    var id = $(this).attr('data-id');
    console.log(id);
    var group = $('.map__marker[data-id="'+id+'"]').closest('.map__group');
    var index = $('.map__group').index(group);
    ChangeActive(2-index);
    $('.map__marker').removeClass('fade');
    group.find('.map__marker[data-id!="'+id+'"]').addClass('fade');

  });
  function ChangeActive(index) {
    if (index<0 || index>2 || index==active) return;
    active = index;
    tabs.removeClass('active');
    tabs.eq(active).addClass('active');
    SelectFloor(active);
  }
  function SelectFloor(index) {
    groups.removeClass('active').removeClass('hide').removeClass('second').removeClass('third');
    groups.eq(2-index).addClass('active');
    switch (index) {
      case 0:
        groups.eq(1).addClass('second');
        groups.eq(0).addClass('third');
        break;
      case 1:
        groups.eq(2).addClass('hide');
        groups.eq(0).addClass('second');
        break;
      case 2:
        groups.eq(2).addClass('hide');
        groups.eq(1).addClass('hide');
        break;
    }
    $('.map__marker').removeClass('visible').removeClass('fade');
    var markers = groups.eq(2-index).find(".map__marker");
    var delay = 500.0/markers.length;
    var i = 0;
    markers.each(function(index){
      var self = $(this);
      setTimeout(function () {
            self.addClass('visible');
      }, i);
      i+=delay;
    });
  }
  tabs.click(function(){
    ChangeActive(tabs.index($(this)));
  });
});
