function Progress(){$(".loaderArea__preloader").width(100*currentCount/imagesCount+"%")}$(window).on("load",function(){$preloader=$(".loaderArea"),$preloader.fadeOut("slow"),$("[data-lazy-bg]").each(function(){var a=$(this);a.attr("style",a.attr("data-lazy-bg")),console.log(a)}),$("[data-lazy-img]").each(function(){var a=$(this);a.attr("src",a.attr("data-lazy-img"))}),setTimeout(function(){$(".header__slider").addClass("animate"),$(".events__wrapper").addClass("animate"),$(".scheme-start__wrapper").addClass("animate")},1e3),setTimeout(function(){$(".events__wrapper").addClass("disappear"),$(".scheme-start__wrapper").addClass("disappear")},3e3)}),$(".loader").ready(function(){$(".loader").addClass("active")});var imagesCount=$("img").length+$("div").length,currentCount=0;$("img").each(function(){$(this).on("load",function(){currentCount++,Progress()})}),$("div").each(function(){$(this).ready(function(){currentCount++,Progress()})});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInByZWxvYWRlci5qcyJdLCJuYW1lcyI6WyJQcm9ncmVzcyIsIiQiLCJ3aWR0aCIsImN1cnJlbnRDb3VudCIsImltYWdlc0NvdW50Iiwid2luZG93Iiwib24iLCIkcHJlbG9hZGVyIiwiZmFkZU91dCIsImVhY2giLCJzZWxmIiwidGhpcyIsImF0dHIiLCJjb25zb2xlIiwibG9nIiwic2V0VGltZW91dCIsImFkZENsYXNzIiwicmVhZHkiLCJsZW5ndGgiXSwibWFwcGluZ3MiOiJBQWlDQSxTQUFTQSxXQUNQQyxFQUFFLDBCQUEwQkMsTUFBbUIsSUFBYkMsYUFBbUJDLFlBQVksS0FsQ25FSCxFQUFFSSxRQUFRQyxHQUFHLE9BQVEsV0FDbkJDLFdBQWFOLEVBQUUsZUFHZk0sV0FBV0MsUUFBUSxRQUVOUCxFQUFFLGtCQUNSUSxLQUFLLFdBQ1YsSUFBSUMsRUFBT1QsRUFBRVUsTUFDYkQsRUFBS0UsS0FBSyxRQUFRRixFQUFLRSxLQUFLLGlCQUM1QkMsUUFBUUMsSUFBSUosS0FFQVQsRUFBRSxtQkFDUlEsS0FBSyxXQUNYLElBQUlDLEVBQU9ULEVBQUVVLE1BQ2JELEVBQUtFLEtBQUssTUFBTUYsRUFBS0UsS0FBSyxvQkFHNUJHLFdBQVcsV0FDVGQsRUFBRSxtQkFBbUJlLFNBQVMsV0FDOUJmLEVBQUUsb0JBQW9CZSxTQUFTLFdBQy9CZixFQUFFLDBCQUEwQmUsU0FBUyxZQUNwQyxLQUNIRCxXQUFXLFdBQ1RkLEVBQUUsb0JBQW9CZSxTQUFTLGFBQy9CZixFQUFFLDBCQUEwQmUsU0FBUyxjQUNwQyxPQUdMZixFQUFFLFdBQVdnQixNQUFNLFdBQ2pCaEIsRUFBRSxXQUFXZSxTQUFTLFlBT3hCLElBQUlaLFlBQWNILEVBQUUsT0FBT2lCLE9BQU9qQixFQUFFLE9BQU9pQixPQUN2Q2YsYUFBZSxFQUNuQkYsRUFBRSxPQUFPUSxLQUFLLFdBQ1pSLEVBQUVVLE1BQU1MLEdBQUcsT0FBTyxXQUNoQkgsZUFDQUgsZUFHSkMsRUFBRSxPQUFPUSxLQUFLLFdBQ1pSLEVBQUVVLE1BQU1NLE1BQU0sV0FDWmQsZUFDQUgiLCJmaWxlIjoicHJlbG9hZGVyLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJCh3aW5kb3cpLm9uKCdsb2FkJywgZnVuY3Rpb24gKCkge1xyXG4gICRwcmVsb2FkZXIgPSAkKCcubG9hZGVyQXJlYScpLFxyXG4gIC8vICAgJGxvYWRlciA9ICRwcmVsb2FkZXIuZmluZCgnLmxvYWRlcicpO1xyXG4gIC8vICRsb2FkZXIuZmFkZU91dCgpO1xyXG4gICRwcmVsb2FkZXIuZmFkZU91dCgnc2xvdycpO1xyXG4gIC8vbGF6eWxvYWRcclxuICB2YXIgbGF6eWJnID0gJCgnW2RhdGEtbGF6eS1iZ10nKTtcclxuICBsYXp5YmcuZWFjaChmdW5jdGlvbigpe1xyXG4gICAgdmFyIHNlbGYgPSAkKHRoaXMpO1xyXG4gICAgc2VsZi5hdHRyKCdzdHlsZScsc2VsZi5hdHRyKCdkYXRhLWxhenktYmcnKSk7XHJcbiAgICBjb25zb2xlLmxvZyhzZWxmKTtcclxuICB9KTtcclxuICB2YXIgbGF6eWltZyA9ICQoJ1tkYXRhLWxhenktaW1nXScpO1xyXG4gIGxhenlpbWcuZWFjaChmdW5jdGlvbigpe1xyXG4gICAgdmFyIHNlbGYgPSAkKHRoaXMpO1xyXG4gICAgc2VsZi5hdHRyKCdzcmMnLHNlbGYuYXR0cignZGF0YS1sYXp5LWltZycpKTtcclxuICB9KTtcclxuICAvL21ha2UgYW5pbWF0aW9uc1xyXG4gIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcclxuICAgICQoXCIuaGVhZGVyX19zbGlkZXJcIikuYWRkQ2xhc3MoJ2FuaW1hdGUnKTtcclxuICAgICQoXCIuZXZlbnRzX193cmFwcGVyXCIpLmFkZENsYXNzKCdhbmltYXRlJyk7XHJcbiAgICAkKFwiLnNjaGVtZS1zdGFydF9fd3JhcHBlclwiKS5hZGRDbGFzcygnYW5pbWF0ZScpO1xyXG4gIH0sIDEwMDApO1xyXG4gIHNldFRpbWVvdXQoZnVuY3Rpb24oKXtcclxuICAgICQoXCIuZXZlbnRzX193cmFwcGVyXCIpLmFkZENsYXNzKCdkaXNhcHBlYXInKTtcclxuICAgICQoXCIuc2NoZW1lLXN0YXJ0X193cmFwcGVyXCIpLmFkZENsYXNzKCdkaXNhcHBlYXInKTtcclxuICB9LCAzMDAwKTtcclxufSk7XHJcblxyXG4kKCcubG9hZGVyJykucmVhZHkoZnVuY3Rpb24oKSB7XHJcbiAgJCgnLmxvYWRlcicpLmFkZENsYXNzKCdhY3RpdmUnKTtcclxufSk7XHJcblxyXG5mdW5jdGlvbiBQcm9ncmVzcygpIHtcclxuICAkKCcubG9hZGVyQXJlYV9fcHJlbG9hZGVyJykud2lkdGgoY3VycmVudENvdW50KjEwMC4wL2ltYWdlc0NvdW50KyclJyk7XHJcbn1cclxuXHJcbnZhciBpbWFnZXNDb3VudCA9ICQoJ2ltZycpLmxlbmd0aCskKCdkaXYnKS5sZW5ndGg7XHJcbnZhciBjdXJyZW50Q291bnQgPSAwO1xyXG4kKCdpbWcnKS5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICQodGhpcykub24oJ2xvYWQnLGZ1bmN0aW9uKCkge1xyXG4gICAgY3VycmVudENvdW50Kys7XHJcbiAgICBQcm9ncmVzcygpO1xyXG4gIH0pO1xyXG59KTtcclxuJCgnZGl2JykuZWFjaChmdW5jdGlvbigpIHtcclxuICAkKHRoaXMpLnJlYWR5KGZ1bmN0aW9uKCkge1xyXG4gICAgY3VycmVudENvdW50Kys7XHJcbiAgICBQcm9ncmVzcygpO1xyXG4gIH0pO1xyXG59KTsiXX0=
