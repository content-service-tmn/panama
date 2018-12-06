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
            <div class="map__marker map__marker_exit" style="left:10%; top:20%" data-id="1"></div>
            <div class="map__marker map__marker_exit" style="left:30%; top:20%" data-id="2"></div>
            <div class="map__marker map__marker_service" style="left:25%; top:40%" data-id="3"></div>
            <div class="map__marker map__marker_exit" style="left:35%; top:10%" data-id="4"></div>
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
            <li data-id="2">Перекрёсток</li>
            <li data-id="3">Галамарт</li>
            <li data-id="4">Ostin</li>
          </ul>
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

<section class="info" data-id="1">
  <div class="container">
    <div class="info__grid">
      <div class="info__cell">
        <div class="info__img" style="background-image:url(<?= $config->urls->templates . 'assets/img/pic.jpg'?>)"></div>
        <ul class="info__list">
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/clock_white.svg'?>)">с 10:00 до 22:00</li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone_white.svg'?>)"><a href="">+7 (999) 000-00-00</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/email_white.svg'?>)"><a href="">ecco.store@gmail...</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/browser_white.svg'?>)"><a href="">www.ecco.com</a></li>
        </ul>
        <p class="info__category">женская одежда</p>
      </div>
      <div class="info__cell">
        <p class="info__subtitle">МАГазин</p>
        <h1 class="info__title">ECco</h1>
        <div class="info__content">
          <p>причём уровень контроля над Силой различен в зависимости от врождённых способностей и тренированности. Сила описана в фильме Оби-Ваном Кеноби как «энергетическое поле, создаваемое всеми живыми существами, которое окружает нас, находится внутри нас, и связывает воедино Галактику». Человек, способный ощущать Силу, при условии тренировок с юного возраста, может научиться направлять Силу и, пройдя в Ордене испытания, получить звание рыцаря-джедая. Владение Силой — это управление окружающим пространством (энергия, материя, мысли), влияние на это пространство.</p>
        </div>
      </div>
    </div>
  </div>
</section>
