var source = "";
$(document).ready(function() {
  $('a[href="#callback"]').click(function(){
    source = $(this).closest('.renters-contacts__item').find('.renters-contacts__name').text();
    console.log(source);
  });
  $('.js-input').on('focus focusout', function(e) {
    e.preventDefault();
    $(e.target).parent().toggleClass('is_focused');
    if(e.type == 'focusout') {
      $(e.target).val($.trim($(e.target).val()));
    }
  });
  $('.js-input').on('change keyup', function(e) {
    e.preventDefault();
    $(e.target).parent().removeClass('error');
    if($.trim($(e.target).val()) !== '' && !$(e.target).hasClass('is_filled')) {
      $(e.target).parent().addClass('is_filled');
    } else {
      $(e.target).parent().removeClass('is_filled');
    }
  });
  $('.js-phone').on('focusout', function(e) {
    e.preventDefault();
    var val = $(this).val().replace(/[^0-9]/gi,'');
    if(val.substr(0, 1) == 7) {
      val = '+7' + val.substr(1, val.length - 1);
    }
    $(this).val(val);
  });

  $("#callback__form").on('submit', function (e) {
      var name_filed = $("#name");
      var phone_filed = $("#phone");
      var message_filed = $("#message");

      var regex_phone = new RegExp(/\+?[7-8]\d{10}/);
      var regex_name = new RegExp(/.+/);
      var regex_message = new RegExp(/.+/);

      var hasErr = false;

      if (!regex_name.test(name_filed.val())) {
          name_filed.parent().addClass("error");
          hasErr = true;
      }
      if (!regex_phone.test(phone_filed.val())) {
          phone_filed.parent().addClass("error");
          hasErr = true;
      }
      if (!regex_message.test(message_filed.val())) {
          phone_filed.parent().addClass("error");
          hasErr = true;
      }
      if (hasErr) {
          return false;
      }

      var data = {
          name: name_filed.val(),
          phone: phone_filed.val(),
          message: message_filed.val(),
          source: source
      };
      $.ajax({
          url: "/ajax-handler/",
          type: 'POST',
          data: {data: data},
          success: function (result) {
              UIkit.offcanvas.hide([force = false]);
              UIkit.notify({
                  message: (result == "success") ? 'Ваше сообщение успешно отправлено!' : 'Ошибка отправки сообщения',
                  status: (result == "success") ? 'result':'warning',
                  timeout: 3000,
                  pos: 'top-right'
              });
              name_filed.val("").parent().removeClass('is_filled');
              phone_filed.val("").parent().removeClass('is_filled');
              message_filed.val("").parent().removeClass('is_filled');
              $( "input:checked" ).each(function(i, sel){
                  $(sel).prop("checked", false)
              });
          },
          error: function (result) {
              UIkit.notify({
                  message: 'Ошибка отправки сообщения',
                  status: 'warning',
                  timeout: 3000,
                  pos: 'top-right'
              });
          }
      });

      e.preventDefault();
  });
});
