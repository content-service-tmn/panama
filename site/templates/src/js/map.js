$(document).ready(function(){
  var tabs = $('.map__switcher li');
  var groups = $('.map__group');
  var active = -1;
  ChangeActive(0);
  var category = "";
  var subcategory = "";
  var title="";

  var hash = $(location).attr('hash');
  if (hash!="") {
    SetFilter(hash);
    UIkit.Utils.scrollToElement(UIkit.$($("#main-scheme"), { duration: 500 }));
  }
  //работа с инпутом
  function Result() {
    $('.search__grid').removeClass('active');
    $('.search__result').addClass('active');
    $('.search__result p:first-child').text(title);
    $('.search__result li').removeClass('hidden');
    if (title!="") {
      $('.search__result li').addClass('hidden');
    }
    if (category!="")
      $('.search__result li[data-category="'+category+'"]').removeClass('hidden');
    if (subcategory!="")
      $('.search__result li[data-subcategory="'+subcategory+'"]').removeClass('hidden');
  }
  function Back() {
    category="";
    subcategory="";
    title="";
    $('.search input').val("");
    $('.search__result').removeClass('active');
    $('.search__grid').addClass('active');
  }
  function Input(val) {
    if (val!="") {
      Result();
      $('.search__result li').each(function(){
        var str = $(this).text().toUpperCase();
        if (str.indexOf(val)!=0) $(this).addClass('hidden')
      });
    }
    else Back();
  }
  $('.search__result li').click(function(){
    var id = $(this).attr('data-id');
    var group = $('.map__marker[data-id="'+id+'"]').closest('.map__group');
    var index = $('.map__group').index(group);
    ChangeActive(index);
    $('.map__marker').removeClass('fade');
    group.find('.map__marker[data-id!="'+id+'"]').addClass('fade');
    UIkit.modal("#search").hide();
  });
  $('.search__result p:last-child').click(function(){
    Back();
  });
  $('.search__cell li').click(function(){
    category = $(this).attr('data-category');
    subcategory = $(this).attr('data-subcategory');
    title = $(this).text();
    Result();
  });
  $('.search input').on('input',function() {
    Input($(this).val().toUpperCase());
  });
  $('.map__marker[data-id]').click(function(){
    var id = $(this).attr('data-id');
    $(".info").removeClass('active');
    $(".info[data-id='"+id+"']").addClass('active');
    var data_bg = $(".info[data-id='"+id+"'] .info__img").attr("data-bg");
    $(".info[data-id='"+id+"'] .info__img").css('background-image',data_bg);
    UIkit.Utils.scrollToElement(UIkit.$($(".info[data-id='"+id+"']"), { duration: 500 }));
  });
  $('.scheme-start__cell .about-item__link').click(function(){
    var filter = $(this).attr('data-filter');
    SetFilter(filter);
  });
  $('.map__catalog li:not(:first-child)').click(function(){
    var id = $(this).attr('data-id');
    var group = $('.map__marker[data-id="'+id+'"]').closest('.map__group');
    var index = $('.map__group').index(group);
    ChangeActive(index);
    $('.map__marker').removeClass('fade');
    group.find('.map__marker[data-id!="'+id+'"]').addClass('fade');
  });
  $('.map__catalog li:first-child').click(function(){
    var cat = $(this).attr('data-category');
    SetFilter(cat);
  });
  function SetFilter(filter) {
    if (filter=="") return;
    var group = groups.eq(active);
    $('.map__marker').removeClass('fade');
    group.find('.map__marker[data-category!="'+filter+'"]').addClass('fade');
  }
  function ChangeActive(index) {
    if (index<0 || index>2 || index==active) return;
    active = index;
    tabs.removeClass('active');
    tabs.eq(active).addClass('active');
    SelectFloor(active);
  }
  function SelectFloor(index) {
    groups.removeClass('active').removeClass('hide').removeClass('second').removeClass('third');
    groups.eq(index).addClass('active');
    switch (index) {
      case 0:
        groups.eq(1).addClass('hide');
        groups.eq(2).addClass('hide');
        break;
      case 1:
        groups.eq(0).addClass('second');
        groups.eq(2).addClass('hide');
        break;
      case 2:
        groups.eq(0).addClass('third');
        groups.eq(1).addClass('second');
        break;
    }
    $('.map__marker').removeClass('visible').removeClass('fade');
    var markers = groups.eq(index).find(".map__marker");
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
