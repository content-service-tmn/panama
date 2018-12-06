$(document).ready(function(){
  var tabs = $('.map__switcher li');
  var groups = $('.map__group');
  var active = -1;
  ChangeActive(0);
  function ChangeActive(index) {
    if (index<0 || index>2) return;
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
    $('.map__marker').removeClass('visible');
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
