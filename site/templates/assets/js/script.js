$(document).ready(function(){$(".menu").clone().appendTo(".menu-wrapper"),500<$(window).scrollTop()?$(".menu-wrapper").addClass("js-active"):$(".menu-wrapper").removeClass("js-active"),$(window).scroll(function(){500<$(this).scrollTop()?$(".menu-wrapper").addClass("js-active"):$(".menu-wrapper").removeClass("js-active")}),$(".stocks__slider").slick({infinite:!0,speed:300,slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:960,settings:{slidesToShow:2,slidesToScroll:2,dots:!0}},{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1,dots:!0}}]}),$(".cinema__slider").slick({infinite:!0,speed:300,slidesToShow:3,slidesToScroll:3,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3,dots:!0,arrows:!1}},{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:3,dots:!0,arrows:!1}}]}),$(".header__slider").slick({infinite:!0,speed:600,autoplay:!0,autoplaySpeed:2e3,arrows:!1}),$(".header__prev").click(function(){$(".header__slider").slick("slickPrev")}),$(".header__next").click(function(){$(".header__slider").slick("slickNext")}),$(".gallery__slider").slick({infinite:!0,speed:300,autoplay:!0,autoplaySpeed:2e3,responsive:[{breakpoint:960,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1}},{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1,arrows:!1}}]}),$(".gallery__bottom-slider").slick({infinite:!0,speed:300,slidesToShow:5,centerMode:!0,centerPadding:0,slidesToScroll:1,responsive:[{breakpoint:960,settings:{slidesToShow:3,slidesToScroll:3,dots:!0,arrows:!1}},{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:3,dots:!0,arrows:!1}}]}),$(".gallery__slider").on("beforeChange",function(e,s,o,l){$(".gallery__bottom-slider").slick("slickGoTo",l)}),$(".gallery__bottom-slider").on("beforeChange",function(e,s,o,l){$(".gallery__slider").slick("slickGoTo",l)}),$(".renters-gallery__slider").slick({infinite:!0,speed:300,autoplay:!0,autoplaySpeed:2e3}),$(".renters-gallery__slider-bottom").slick({infinite:!0,arrows:!1,speed:300,slidesToShow:5,centerMode:!0,centerPadding:0,slidesToScroll:1}),$(".renters-gallery__slider").on("beforeChange",function(e,s,o,l){$(".renters-gallery__slider-bottom").slick("slickGoTo",l)}),$(".renters-gallery__slider-bottom").on("beforeChange",function(e,s,o,l){$(".renters-gallery__slider").slick("slickGoTo",l)})});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdC5qcyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsImNsb25lIiwiYXBwZW5kVG8iLCJ3aW5kb3ciLCJzY3JvbGxUb3AiLCJhZGRDbGFzcyIsInJlbW92ZUNsYXNzIiwic2Nyb2xsIiwidGhpcyIsInNsaWNrIiwiaW5maW5pdGUiLCJzcGVlZCIsInNsaWRlc1RvU2hvdyIsInNsaWRlc1RvU2Nyb2xsIiwicmVzcG9uc2l2ZSIsImJyZWFrcG9pbnQiLCJzZXR0aW5ncyIsImRvdHMiLCJhcnJvd3MiLCJhdXRvcGxheSIsImF1dG9wbGF5U3BlZWQiLCJjbGljayIsImNlbnRlck1vZGUiLCJjZW50ZXJQYWRkaW5nIiwib24iLCJldmVudCIsImN1cnJlbnRTbGlkZSIsIm5leHRTbGlkZSJdLCJtYXBwaW5ncyI6IkFBQUFBLEVBQUVDLFVBQVVDLE1BQU0sV0FDaEJGLEVBQUUsU0FBU0csUUFBUUMsU0FBUyxpQkFDQSxJQUF4QkosRUFBRUssUUFBUUMsWUFDWk4sRUFBRSxpQkFBaUJPLFNBQVMsYUFHNUJQLEVBQUUsaUJBQWlCUSxZQUFZLGFBRWpDUixFQUFFSyxRQUFRSSxPQUFPLFdBQ1csSUFBdEJULEVBQUVVLE1BQU1KLFlBQ1ZOLEVBQUUsaUJBQWlCTyxTQUFTLGFBRzVCUCxFQUFFLGlCQUFpQlEsWUFBWSxlQUduQ1IsRUFBRSxtQkFBbUJXLE1BQU0sQ0FDekJDLFVBQVUsRUFDVkMsTUFBTyxJQUNQQyxhQUFjLEVBQ2RDLGVBQWdCLEVBQ2hCQyxXQUFZLENBQ1YsQ0FDRUMsV0FBWSxJQUNaQyxTQUFVLENBQ1JKLGFBQWMsRUFDZEMsZUFBZ0IsRUFDaEJJLE1BQU0sSUFHVixDQUNFRixXQUFZLElBQ1pDLFNBQVUsQ0FDUkosYUFBYyxFQUNkQyxlQUFnQixFQUNoQkksTUFBTSxPQUtkbkIsRUFBRSxtQkFBbUJXLE1BQU0sQ0FDekJDLFVBQVUsRUFDVkMsTUFBTyxJQUNQQyxhQUFjLEVBQ2RDLGVBQWdCLEVBQ2hCQyxXQUFZLENBQ1YsQ0FDRUMsV0FBWSxJQUNaQyxTQUFVLENBQ1JKLGFBQWMsRUFDZEMsZUFBZ0IsRUFDaEJJLE1BQU0sRUFDTkMsUUFBTyxJQUdYLENBQ0VILFdBQVksSUFDWkMsU0FBVSxDQUNSSixhQUFjLEVBQ2RDLGVBQWdCLEVBQ2hCSSxNQUFNLEVBQ05DLFFBQU8sT0FLZnBCLEVBQUUsbUJBQW1CVyxNQUFNLENBQ3pCQyxVQUFVLEVBQ1ZDLE1BQU8sSUFDUFEsVUFBVSxFQUNWQyxjQUFlLElBQ2ZGLFFBQU8sSUFJVHBCLEVBQUUsaUJBQWlCdUIsTUFBTSxXQUN2QnZCLEVBQUUsbUJBQW1CVyxNQUFNLGVBRTdCWCxFQUFFLGlCQUFpQnVCLE1BQU0sV0FDdkJ2QixFQUFFLG1CQUFtQlcsTUFBTSxlQUU3QlgsRUFBRSxvQkFBb0JXLE1BQU0sQ0FDMUJDLFVBQVUsRUFDVkMsTUFBTyxJQUNQUSxVQUFVLEVBQ1ZDLGNBQWUsSUFDZk4sV0FBWSxDQUNWLENBQ0VDLFdBQVksSUFDWkMsU0FBVSxDQUNSSixhQUFjLEVBQ2RDLGVBQWdCLEVBQ2hCSyxRQUFPLElBR1gsQ0FDRUgsV0FBWSxJQUNaQyxTQUFVLENBQ1JKLGFBQWMsRUFDZEMsZUFBZ0IsRUFDaEJLLFFBQU8sT0FLZnBCLEVBQUUsMkJBQTJCVyxNQUFNLENBQ2pDQyxVQUFVLEVBQ1ZDLE1BQU8sSUFDUEMsYUFBYyxFQUNkVSxZQUFXLEVBQ1hDLGNBQWMsRUFDZFYsZUFBZ0IsRUFDaEJDLFdBQVksQ0FDVixDQUNFQyxXQUFZLElBQ1pDLFNBQVUsQ0FDUkosYUFBYyxFQUNkQyxlQUFnQixFQUNoQkksTUFBTSxFQUNOQyxRQUFPLElBR1gsQ0FDRUgsV0FBWSxJQUNaQyxTQUFVLENBQ1JKLGFBQWMsRUFDZEMsZUFBZ0IsRUFDaEJJLE1BQU0sRUFDTkMsUUFBTyxPQVFmcEIsRUFBRSxvQkFBb0IwQixHQUFHLGVBQWdCLFNBQVNDLEVBQU9oQixFQUFPaUIsRUFBY0MsR0FDNUU3QixFQUFFLDJCQUEyQlcsTUFBTSxZQUFZa0IsS0FFakQ3QixFQUFFLDJCQUEyQjBCLEdBQUcsZUFBZ0IsU0FBU0MsRUFBT2hCLEVBQU9pQixFQUFjQyxHQUNuRjdCLEVBQUUsb0JBQW9CVyxNQUFNLFlBQVlrQixLQUcxQzdCLEVBQUUsNEJBQTRCVyxNQUFNLENBQ2xDQyxVQUFVLEVBQ1ZDLE1BQU8sSUFDUFEsVUFBVSxFQUNWQyxjQUFlLE1BRWpCdEIsRUFBRSxtQ0FBbUNXLE1BQU0sQ0FDekNDLFVBQVUsRUFDVlEsUUFBTyxFQUNQUCxNQUFPLElBQ1BDLGFBQWMsRUFDZFUsWUFBVyxFQUNYQyxjQUFjLEVBQ2RWLGVBQWdCLElBR2xCZixFQUFFLDRCQUE0QjBCLEdBQUcsZUFBZ0IsU0FBU0MsRUFBT2hCLEVBQU9pQixFQUFjQyxHQUNwRjdCLEVBQUUsbUNBQW1DVyxNQUFNLFlBQVlrQixLQUV6RDdCLEVBQUUsbUNBQW1DMEIsR0FBRyxlQUFnQixTQUFTQyxFQUFPaEIsRUFBT2lCLEVBQWNDLEdBQzNGN0IsRUFBRSw0QkFBNEJXLE1BQU0sWUFBWWtCIiwiZmlsZSI6InNjcmlwdC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcbiAgJCgnLm1lbnUnKS5jbG9uZSgpLmFwcGVuZFRvKCcubWVudS13cmFwcGVyJyk7XHJcbiAgaWYgKCQod2luZG93KS5zY3JvbGxUb3AoKSA+IDUwMCkge1xyXG4gICAgJCgnLm1lbnUtd3JhcHBlcicpLmFkZENsYXNzKCdqcy1hY3RpdmUnKTtcclxuICB9XHJcbiAgZWxzZSB7XHJcbiAgICAkKCcubWVudS13cmFwcGVyJykucmVtb3ZlQ2xhc3MoJ2pzLWFjdGl2ZScpO1xyXG4gIH07XHJcbiAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpe1xyXG4gICAgaWYgKCQodGhpcykuc2Nyb2xsVG9wKCkgPiA1MDApIHtcclxuICAgICAgJCgnLm1lbnUtd3JhcHBlcicpLmFkZENsYXNzKCdqcy1hY3RpdmUnKTtcclxuICAgIH1cclxuICAgIGVsc2Uge1xyXG4gICAgICAkKCcubWVudS13cmFwcGVyJykucmVtb3ZlQ2xhc3MoJ2pzLWFjdGl2ZScpO1xyXG4gICAgfTtcclxuICB9KTtcclxuICAkKCcuc3RvY2tzX19zbGlkZXInKS5zbGljayh7XHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIHNwZWVkOiAzMDAsXHJcbiAgICBzbGlkZXNUb1Nob3c6IDMsXHJcbiAgICBzbGlkZXNUb1Njcm9sbDogMyxcclxuICAgIHJlc3BvbnNpdmU6IFtcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDk2MCxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgc2xpZGVzVG9TaG93OiAyLFxyXG4gICAgICAgICAgc2xpZGVzVG9TY3JvbGw6IDIsXHJcbiAgICAgICAgICBkb3RzOiB0cnVlXHJcbiAgICAgICAgfVxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgYnJlYWtwb2ludDogNzY4LFxyXG4gICAgICAgIHNldHRpbmdzOiB7XHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDEsXHJcbiAgICAgICAgICBzbGlkZXNUb1Njcm9sbDogMSxcclxuICAgICAgICAgIGRvdHM6IHRydWVcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIF1cclxuICB9KTtcclxuICAkKCcuY2luZW1hX19zbGlkZXInKS5zbGljayh7XHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIHNwZWVkOiAzMDAsXHJcbiAgICBzbGlkZXNUb1Nob3c6IDMsXHJcbiAgICBzbGlkZXNUb1Njcm9sbDogMyxcclxuICAgIHJlc3BvbnNpdmU6IFtcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDk2MCxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgc2xpZGVzVG9TaG93OiAzLFxyXG4gICAgICAgICAgc2xpZGVzVG9TY3JvbGw6IDMsXHJcbiAgICAgICAgICBkb3RzOiB0cnVlLFxyXG4gICAgICAgICAgYXJyb3dzOmZhbHNlXHJcbiAgICAgICAgfVxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgYnJlYWtwb2ludDogNzY4LFxyXG4gICAgICAgIHNldHRpbmdzOiB7XHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDMsXHJcbiAgICAgICAgICBzbGlkZXNUb1Njcm9sbDogMyxcclxuICAgICAgICAgIGRvdHM6IHRydWUsXHJcbiAgICAgICAgICBhcnJvd3M6ZmFsc2VcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIF1cclxuICB9KTtcclxuICAkKCcuaGVhZGVyX19zbGlkZXInKS5zbGljayh7XHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIHNwZWVkOiA2MDAsXHJcbiAgICBhdXRvcGxheTogdHJ1ZSxcclxuICAgIGF1dG9wbGF5U3BlZWQ6IDIwMDAsXHJcbiAgICBhcnJvd3M6ZmFsc2VcclxuICAgIC8vbGF6eUxvYWQ6ICdvbmRlbWFuZCdcclxuICB9KTtcclxuICAvL3BzZXVkbyBhcnJvd3NcclxuICAkKCcuaGVhZGVyX19wcmV2JykuY2xpY2soZnVuY3Rpb24oKSB7XHJcbiAgICAkKCcuaGVhZGVyX19zbGlkZXInKS5zbGljaygnc2xpY2tQcmV2Jyk7XHJcbiAgfSk7XHJcbiAgJCgnLmhlYWRlcl9fbmV4dCcpLmNsaWNrKGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLmhlYWRlcl9fc2xpZGVyJykuc2xpY2soJ3NsaWNrTmV4dCcpO1xyXG4gIH0pO1xyXG4gICQoJy5nYWxsZXJ5X19zbGlkZXInKS5zbGljayh7XHJcbiAgICBpbmZpbml0ZTogdHJ1ZSxcclxuICAgIHNwZWVkOiAzMDAsXHJcbiAgICBhdXRvcGxheTogdHJ1ZSxcclxuICAgIGF1dG9wbGF5U3BlZWQ6IDIwMDAsXHJcbiAgICByZXNwb25zaXZlOiBbXHJcbiAgICAgIHtcclxuICAgICAgICBicmVha3BvaW50OiA5NjAsXHJcbiAgICAgICAgc2V0dGluZ3M6IHtcclxuICAgICAgICAgIHNsaWRlc1RvU2hvdzogMSxcclxuICAgICAgICAgIHNsaWRlc1RvU2Nyb2xsOiAxLFxyXG4gICAgICAgICAgYXJyb3dzOmZhbHNlXHJcbiAgICAgICAgfVxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgYnJlYWtwb2ludDogNzY4LFxyXG4gICAgICAgIHNldHRpbmdzOiB7XHJcbiAgICAgICAgICBzbGlkZXNUb1Nob3c6IDEsXHJcbiAgICAgICAgICBzbGlkZXNUb1Njcm9sbDogMSxcclxuICAgICAgICAgIGFycm93czpmYWxzZVxyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgXVxyXG4gIH0pO1xyXG4gICQoJy5nYWxsZXJ5X19ib3R0b20tc2xpZGVyJykuc2xpY2soe1xyXG4gICAgaW5maW5pdGU6IHRydWUsXHJcbiAgICBzcGVlZDogMzAwLFxyXG4gICAgc2xpZGVzVG9TaG93OiA1LFxyXG4gICAgY2VudGVyTW9kZTp0cnVlLFxyXG4gICAgY2VudGVyUGFkZGluZzowLFxyXG4gICAgc2xpZGVzVG9TY3JvbGw6IDEsXHJcbiAgICByZXNwb25zaXZlOiBbXHJcbiAgICAgIHtcclxuICAgICAgICBicmVha3BvaW50OiA5NjAsXHJcbiAgICAgICAgc2V0dGluZ3M6IHtcclxuICAgICAgICAgIHNsaWRlc1RvU2hvdzogMyxcclxuICAgICAgICAgIHNsaWRlc1RvU2Nyb2xsOiAzLFxyXG4gICAgICAgICAgZG90czogdHJ1ZSxcclxuICAgICAgICAgIGFycm93czpmYWxzZVxyXG4gICAgICAgIH1cclxuICAgICAgfSxcclxuICAgICAge1xyXG4gICAgICAgIGJyZWFrcG9pbnQ6IDc2OCxcclxuICAgICAgICBzZXR0aW5nczoge1xyXG4gICAgICAgICAgc2xpZGVzVG9TaG93OiAzLFxyXG4gICAgICAgICAgc2xpZGVzVG9TY3JvbGw6IDMsXHJcbiAgICAgICAgICBkb3RzOiB0cnVlLFxyXG4gICAgICAgICAgYXJyb3dzOmZhbHNlXHJcbiAgICAgICAgfVxyXG4gICAgICB9XHJcbiAgICBdXHJcbiAgfSk7XHJcblxyXG4gIC8vc3RpY2sgMiBzbGlkZXJzXHJcblxyXG4gICQoJy5nYWxsZXJ5X19zbGlkZXInKS5vbignYmVmb3JlQ2hhbmdlJywgZnVuY3Rpb24oZXZlbnQsIHNsaWNrLCBjdXJyZW50U2xpZGUsIG5leHRTbGlkZSl7XHJcbiAgICAkKCcuZ2FsbGVyeV9fYm90dG9tLXNsaWRlcicpLnNsaWNrKCdzbGlja0dvVG8nLG5leHRTbGlkZSk7XHJcbiAgfSk7XHJcbiAgJCgnLmdhbGxlcnlfX2JvdHRvbS1zbGlkZXInKS5vbignYmVmb3JlQ2hhbmdlJywgZnVuY3Rpb24oZXZlbnQsIHNsaWNrLCBjdXJyZW50U2xpZGUsIG5leHRTbGlkZSl7XHJcbiAgICAkKCcuZ2FsbGVyeV9fc2xpZGVyJykuc2xpY2soJ3NsaWNrR29UbycsbmV4dFNsaWRlKTtcclxuICB9KTtcclxuXHJcbiAgJCgnLnJlbnRlcnMtZ2FsbGVyeV9fc2xpZGVyJykuc2xpY2soe1xyXG4gICAgaW5maW5pdGU6IHRydWUsXHJcbiAgICBzcGVlZDogMzAwLFxyXG4gICAgYXV0b3BsYXk6IHRydWUsXHJcbiAgICBhdXRvcGxheVNwZWVkOiAyMDAwXHJcbiAgfSk7XHJcbiAgJCgnLnJlbnRlcnMtZ2FsbGVyeV9fc2xpZGVyLWJvdHRvbScpLnNsaWNrKHtcclxuICAgIGluZmluaXRlOiB0cnVlLFxyXG4gICAgYXJyb3dzOmZhbHNlLFxyXG4gICAgc3BlZWQ6IDMwMCxcclxuICAgIHNsaWRlc1RvU2hvdzogNSxcclxuICAgIGNlbnRlck1vZGU6dHJ1ZSxcclxuICAgIGNlbnRlclBhZGRpbmc6MCxcclxuICAgIHNsaWRlc1RvU2Nyb2xsOiAxXHJcbiAgfSk7XHJcblxyXG4gICQoJy5yZW50ZXJzLWdhbGxlcnlfX3NsaWRlcicpLm9uKCdiZWZvcmVDaGFuZ2UnLCBmdW5jdGlvbihldmVudCwgc2xpY2ssIGN1cnJlbnRTbGlkZSwgbmV4dFNsaWRlKXtcclxuICAgICQoJy5yZW50ZXJzLWdhbGxlcnlfX3NsaWRlci1ib3R0b20nKS5zbGljaygnc2xpY2tHb1RvJyxuZXh0U2xpZGUpO1xyXG4gIH0pO1xyXG4gICQoJy5yZW50ZXJzLWdhbGxlcnlfX3NsaWRlci1ib3R0b20nKS5vbignYmVmb3JlQ2hhbmdlJywgZnVuY3Rpb24oZXZlbnQsIHNsaWNrLCBjdXJyZW50U2xpZGUsIG5leHRTbGlkZSl7XHJcbiAgICAkKCcucmVudGVycy1nYWxsZXJ5X19zbGlkZXInKS5zbGljaygnc2xpY2tHb1RvJyxuZXh0U2xpZGUpO1xyXG4gIH0pO1xyXG59KTsiXX0=
