<section class="contacts">
  <div class="contacts__info">
    <div class="container">
      <h1 class="contacts__title">контакты</h1>
      <div class="contacts__grid">
        <div class="contacts__cell">
          <p class="contacts__subtitle">как добраться?</p>
          <ul class="contacts__list">
            <li><b>Автобусы:</b> 10, 15, 22, 8</li>
            <li><b>Маршрутное такси:</b>79, 96, 120, 79, 96, 79, 96, 24</li>
          </ul>
        </div>
        <div class="contacts__cell">
          <p class="contacts__subtitle">время работы</p>
          <ul class="contacts__list">
            <li><b>Ежедневно</b> с <span>10:00</span> до <span>22:00</span></li>
            <li><b>Гипермаркет</b> с <span>09:00</span> до <span>21:00</span></li>
            <li><b>Кинотеатр</b> с <span>09:00</span> до <span>02:00</span></li>
          </ul>
        </div>
        <div class="contacts__cell">
          <p class="contacts__subtitle">как добраться?</p>
          <ul class="contacts__list">
            <li><b><a href="">trcpanama@gmail.com</a></b></li>
            <li><b><a href="">+7 (3452) 520-779</a></b></li>
            <li>г. Тюмень, ул. 2-я Луговая, д. 30</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="map" class="contacts__map"></div>
</section>

<script type="text/javascript">
    function initMap() {
        var coordinates = {lat: 57.1715732, lng: 65.5399764},
            options = {
                zoom: 16,
                disableDefaultUI: true,
                center: coordinates,
                draggable: !("ontouchend" in document)
            };
        var map = new google.maps.Map(document.getElementById('map'), options);
        new google.maps.Marker({map: map, position: coordinates, icon:"<?= $config->urls->templates . 'assets/img/map-marker.png'?>"});
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz-fa3z3jDQhfL6rwyNt3DEJ3XHbyoUHk&callback=initMap"
        async></script>
