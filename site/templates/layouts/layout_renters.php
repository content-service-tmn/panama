<?php namespace Processwire; $home=$pages->get("/");?>

<section class="renters">
  <div class="container">
    <div class="renters__grid">
      <div class="renters__cell">
        <div class="renters__sticker">
          <div class="renters__img"></div>
          <ul class="renters__list">
              <li style="background-image:url(<?= $config->urls->templates . 'assets/img/info.svg'?>)"><a href="#about" data-uk-smooth-scroll="{offset: 90}">О ТРЦ</a></li>
              <li style="background-image:url(<?= $config->urls->templates . 'assets/img/camera.svg'?>)"><a href="#gallery" data-uk-smooth-scroll="{offset: 90}">Галерея</a></li>
              <li style="background-image:url(<?= $config->urls->templates . 'assets/img/floor.svg'?>)"><a href="#scheme" data-uk-smooth-scroll>Схема ТРЦ</a></li>
              <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone.svg'?>)"><a href="#contacts" data-uk-smooth-scroll="{offset: 90}">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="renters__cell">
        <h1 class="renters__title" id="about"><?= $page->renters_title?></h1>
        <div class="renters__content">
          <?php foreach($page->renters_content as $item) {
            if ($item->type=="renters_content_text") echo "<p>".$item->renters_text."</p>";
            if ($item->type=="renters_content_images") {
              echo '<div class="renters__images">';
              foreach ($item->renters_images as $image) echo '<img data-lazy-img="'.$image->url.'">';
              echo '</div>';
            }
          }?>
        </div>
        <div>
          <div class="renters__gallery renters-gallery" id="gallery">
            <h1 class="renters-gallery__title"><?php $tmp=explode(" ",$home->home_gallery_title);  $tmp[0]="<span>".$tmp[0]."</span>"; echo join(" ",$tmp);?></h1>
            <div class="renters-gallery__slider">
              <?php foreach($home->home_gallery_images as $image):?>
                <div class="renters-gallery__item" data-lazy-bg="background-image:url(<?= $image->url ?>)"></div>
              <?php endforeach; ?>
            </div>
            <div class="renters-gallery__slider-bottom">
              <?php foreach($home->home_gallery_images as $image):?>
                <div class="renters-gallery__item-bottom" data-lazy-bg="background-image:url(<?= $image->url ?>)">
                  <a href="<?= $image->url ?>" data-uk-lightbox="{group:'renters-gallery__slider-bottom'}"></a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="scheme" id="scheme">
  <div class="container">
    <h1 class="scheme__title"><?php $tmp=explode(" ",$page->renters_scheme_title);  $tmp[0]="<span>".$tmp[0]."</span>"; echo join(" ",$tmp);?></h1>
    <ul class="scheme__switcher" data-uk-switcher="{connect:'#my-id'}">
      <li><a href="">Этаж 1</a></li>
      <li><a href="">Этаж 2</a></li>
      <li><a href="">Этаж 3</a></li>
    </ul>
    <ul id="my-id" class="uk-switcher scheme__items">
      <li><div class="scheme__item" data-lazy-bg="background-image:url(<?= $config->urls->templates . 'assets/img/scheme1.jpg'?>)"></div></li>
      <li><div class="scheme__item" data-lazy-bg="background-image:url(<?= $config->urls->templates . 'assets/img/scheme2.jpg'?>)"></div></li>
      <li><div class="scheme__item" data-lazy-bg="background-image:url(<?= $config->urls->templates . 'assets/img/scheme3.jpg'?>)"></div></li>
    </ul>
  </div>
</section>

<section class="renters renters_padding-bottom-only">
  <div class="container">
    <div class="renters__grid">
      <div class="renters__cell">
        <ul class="renters__list">
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/info.svg'?>)"><a href="#about" data-uk-smooth-scroll="{offset: 90}">О ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/camera.svg'?>)"><a href="#gallery" data-uk-smooth-scroll="{offset: 90}">Галерея</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/floor.svg'?>)"><a href="#scheme" data-uk-smooth-scroll>Схема ТРЦ</a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone.svg'?>)"><a href="#contacts" data-uk-smooth-scroll="{offset: 90}">Контакты</a></li>
        </ul>
      </div>
      <div class="renters__cell">
        <div class="renters-contacts" id="contacts">
            <?php foreach ($page->renters_contacts as $item): ?>
            <div class="renters-contacts__item">
              <p class="renters-contacts__title"><?= str_replace("/","<br>",$item->renters_contacts_post) ?></p>
              <div class="renters-contacts__name"><?=$item->renters_contacts_fio?></div>
              <div class="renters-contacts__grid">
                <?php foreach(explode(',', $item->renters_contacts_phones) as $phone):?>
                  <div class="renters-contacts__contact renters-contacts__contact_phone"><a href="tel:<?=phoneLink($phone)?>"><?=$phone?></a></div>
                <?php endforeach; ?>
                <?php foreach(explode(',', $item->renters_contacts_email) as $email):?>
                  <div class="renters-contacts__contact renters-contacts__contact_email"><a href="mailto:<?=$email?>"><?=$email?></a></div>
                <?php endforeach; ?>
              </div>
              <div class="renters-contacts__button-wrapper">
                <a href="#callback" class="renters-contacts__button" data-uk-offcanvas="{mode:'slide'}">написать сообщение</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="callback" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close"></a>
    <div class="uk-offcanvas-bar-inner sidebar">

      <a href="" class="sidebar__logo">
        <img data-lazy-img="<?= $config->urls->templates.'assets/img/logo-text.png' ?>" alt="" class="sidebar__logo-img">
      </a>
      <form id="callback__form" class="form sidebar__form" action="/" method="post">
        <p class="sidebar__description">
          Вы можете арендовать данную площадь! Для этого оставьте свои контактные данные, наш менеджер свяжется с Вами
        </p>
        <div class="form__element form__element_name">
          <label class="label" for="name">Имя</label>
          <input id="name" class="input js-input" type="text" name="name" value="">
        </div>
        <div class="form__element form__element_phone">
          <label class="label" for="phone">Телефон</label>
          <input id="phone" class="input js-input js-phone" type="text" name="phone" value="">
        </div>
        <div class="form__element form__element_message">
          <label class="label" for="message">Сообщение</label>
          <textarea id="message" class="input js-input js-message" type="text" name="message" value=""></textarea>
        </div>

        <div class="form__element form__element_send">
          <div class="send">
            <span class="send__text">отправить</span>
            <button id="submit_form" class="send__button" type="submit" name="submit" value="order"></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
