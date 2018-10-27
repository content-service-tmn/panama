<section class="renters">
  <div class="container">
    <div class="renters__grid">
      <div class="renters__cell">
        <div class="renters__img"></div>
        <ul class="renters__list">
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/info.svg'?>)"><a href="">О ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/camera.svg'?>)"><a href="">Галерея</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/floor.svg'?>)"><a href="">Схема ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone.svg'?>)"><a href="">Контакты</a></li>
        </ul>
      </div>
      <div class="renters__cell">
        <h1 class="renters__title">арендаторам</h1>
        <div class="renters__content">
          <p><b>Один из важнейших элементов вселенной «Звёздных войн» — это «Сила», всеобъемлющее энергетическое поле, подконтрольное достигшим определённого духовного развития живым существам.</b></p>
          <p>причём уровень контроля над Силой различен в зависимости от врождённых способностей и тренированности. Сила описана в фильме Оби-Ваном Кеноби как «энергетическое поле, создаваемое всеми живыми существами, которое окружает нас, находится внутри нас, и связывает воедино Галактику». Человек, способный ощущать Силу, при условии тренировок с юного возраста, может научиться направлять Силу и, пройдя в Ордене испытания, получить звание рыцаря-джедая. Владение Силой — это управление окружающим пространством (энергия, материя, мысли), влияние на это пространство.</p>
        </div>
        <div >
          <div class="renters__gallery renters-gallery">
            <h1 class="renters-gallery__title"><span>галерея</span> торгового центра</h1>
            <div class="renters-gallery__slider">
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
            </div>
            <div class="renters-gallery__slider-bottom">
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
              <div class="renters-gallery__item-bottom" style="background-image:url(<?= $config->urls->templates . 'assets/img/image.png'?>)"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="scheme">
  <div class="container">
    <h1 class="scheme__title">Схема торгового центра</h1>
    <ul class="scheme__switcher" data-uk-switcher="{connect:'#my-id'}">
      <li><a href="">Этаж 1</a></li>
      <li><a href="">Этаж 2</a></li>
      <li><a href="">Этаж 3</a></li>
    </ul>
    <ul id="my-id" class="uk-switcher scheme__items">
      <li><div class="scheme__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/first-floor.png'?>)"></div></li>
      <li><div class="scheme__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/first-floor.png'?>)"></div></li>
      <li><div class="scheme__item" style="background-image:url(<?= $config->urls->templates . 'assets/img/first-floor.png'?>)"></div></li>
    </ul>
  </div>
</section>

<section class="renters renters_padding-bottom-only">
  <div class="container">
    <div class="renters__grid">
      <div class="renters__cell">
        <ul class="renters__list">
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/info.svg'?>)"><a href="">О ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/camera.svg'?>)"><a href="">Галерея</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/floor.svg'?>)"><a href="">Схема ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone.svg'?>)"><a href="">Контакты</a></li>
        </ul>
      </div>
      <div class="renters__cell">
        <div class="renters-contacts">
          <div class="renters-contacts__grid">
            <div class="renters-contacts__item">
              <p class="renters-contacts__title">Заместитель руководителя проекта<br>(по вопросам аренды и сотрудничества)</p>
              <div class="renters-contacts__name">Бирюкова Светлана Сергеевна</div>
              <div class="renters-contacts__grid">
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (3452) 520-752</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (932)322-99-25</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_email"><a href="">s-birykova@tyumen.b-tek.ru</a></div>
              </div>
              <div class="renters-contacts__button-wrapper">
                <a href="#callback" class="renters-contacts__button" data-uk-offcanvas="{mode:'slide'}">написать сообщение</a>
              </div>
            </div>
            <div class="renters-contacts__item">
              <p class="renters-contacts__title">Заместитель руководителя проекта<br>(по вопросам аренды и сотрудничества)</p>
              <div class="renters-contacts__name">Бирюкова Светлана Сергеевна</div>
              <div class="renters-contacts__grid">
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (3452) 520-752</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (932)322-99-25</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_email"><a href="">s-birykova@tyumen.b-tek.ru</a></div>
              </div>
              <div class="renters-contacts__button-wrapper">
                <a href="#callback" class="renters-contacts__button" data-uk-offcanvas="{mode:'slide'}">написать сообщение</a>
              </div>
            </div>
            <div class="renters-contacts__item">
              <p class="renters-contacts__title">Заместитель руководителя проекта<br>(по вопросам аренды и сотрудничества)</p>
              <div class="renters-contacts__name">Бирюкова Светлана Сергеевна</div>
              <div class="renters-contacts__grid">
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (3452) 520-752</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="">+ 7 (932)322-99-25</a></div>
                <div class="renters-contacts__contact renters-contacts__contact_email"><a href="">s-birykova@tyumen.b-tek.ru</a></div>
              </div>
              <div class="renters-contacts__button-wrapper">
                <a href="#callback" class="renters-contacts__button" data-uk-offcanvas="{mode:'slide'}">написать сообщение</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
