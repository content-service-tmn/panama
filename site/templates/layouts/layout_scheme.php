<section class="scheme-start">
  <div class="scheme-start__wrapper">
    <img src="<?= $config->urls->templates . 'assets/img/map.png'?>" alt="">
    <h1 class="scheme-start__hello">Схема <span>торгового центра</span></h1>
  </div>
  <div class="scheme-start__grid">
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/hat.png';?>)">
          <h3 class="about-item__title">магазины</h3>
          <a href="" class="about-item__link"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/confetti.png';?>)">
          <h3 class="about-item__title">развлечения</h3>
          <a href="" class="about-item__link"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/donut.png';?>)">
          <h3 class="about-item__title">кафе</h3>
          <a href="" class="about-item__link"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/scissors.png';?>)">
          <h3 class="about-item__title">услуги</h3>
          <a href="" class="about-item__link"></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="main-scheme">
  <div class="map">
    <div class="map__grid">
      <div class="map__cell">
        <ul class="map__switcher">
          <li>Этаж 1</li>
          <li>Этаж 2</li>
          <li>Этаж 3</li>
        </ul>
        <div class="map__scheme">
          <div class="map__group">
            <img class="map__floor" src="<?= $config->urls->templates . 'assets/img/first-floor.png'?>" alt="">
          </div>
          <div class="map__group">
            <img class="map__floor" src="<?= $config->urls->templates . 'assets/img/first-floor.png'?>" alt="">
          </div>
          <div class="map__group">
            <img class="map__floor" src="<?= $config->urls->templates . 'assets/img/first-floor.png'?>" alt="">
            <div class="map__marker map__marker_exit" style="left:10%; top:20%"></div>
            <div class="map__marker map__marker_exit" style="left:30%; top:20%"></div>
            <div class="map__marker map__marker_service" style="left:25%; top:40%"></div>
            <div class="map__marker map__marker_exit" style="left:35%; top:10%"></div>
          </div>
        </div>
      </div>
      <div class="map__cell">
        <div class="map__search">
          <input type="text" placeholder="Поиск">
        </div>
        <div class="map__catalog">
          <ul>
            <li>Магазины</li>
            <li>Перекрёсток</li>
            <li>Галамарт</li>
            <li>Ostin</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
