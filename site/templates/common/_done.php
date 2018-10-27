<?php namespace Processwire; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body class="<?php
$color = "";
switch($page->template->name) :
  case 'layout_contacts':
  case 'layout_events':
    $color='orange';
    break;
  case 'home':
    $color='blue';
    break;
endswitch;
echo $color;
?>">

<div class="menu <?= $color=='orange'||$color=='blue'?'contrast':'' ?>">
  <div class="container container_big">
    <div class="menu__grid">
      <div class="menu__nav">
        <a href="/" class="menu__logo">
          <img src="<?php
          $logo = "";
          switch($page->template->name):
            case 'layout_contacts':
            case 'layout_events':
            case 'home':
            $logo= 'logo-white.png';
            break;
            case 'layout_article':
            case 'layout_promotions':
            case 'layout_renters':
            $logo= 'logo.png';
            break;
          endswitch;
          echo $config->urls->templates . 'assets/img/' . $logo;
          ?>" alt="">
        </a>
        <a href="/events" class="menu__link">Афиша</a>
        <a href="/promotions" class="menu__link">Акции</a>
        <a href="/scheme" class="menu__link">Схема ТРЦ</a>
        <a href="/renters" class="menu__link">Аренда</a>
        <a href="/contacts" class="menu__link">Контакты</a>
      </div>
      <div class="menu__navigation">
        <a href="#modal" data-uk-modal>Навигация</a>
        <?php
          $toggle = "";
          switch($page->template->name):
            case 'layout_contacts':
            $toggle= 'orange';
            break;
            case 'layout_events':
            $toggle= 'dark-orange';
            break;
          endswitch;
        ?>
        <a href="#modal" class="menu__toggle <?= $toggle; ?>" data-uk-modal></a>
      </div>
    </div>
  </div>
</div>

<div class="menu-wrapper <?= $color; ?>"></div>

<?= $templateRender; ?>

<?php if ($page->template->name!="layout_contacts"): ?>
<section class="footer">
  <img src="<?= $config->urls->templates . 'assets/img/footer.png' ?>" alt="" class="footer__bg">
  <div class="footer__grid">
    <div class="footer__cell">
      <ul class="footer__list">
        <li>Тюмень, ул. 2-ая Луговая, 30</li>
        <li>Тел. <a href="tel:">+7 (3452) 520-779</a></li>
        <li><a href="mailto:">panama@tyumen.b-tek.ru</a></li>
      </ul>
    </div>
    <div class="footer__cell">
      <a href="" class="footer__how">как добраться?</a>
      <div class="footer__socials">
        <a href="" class="footer__social footer__social_vk"></a>
        <a href="" class="footer__social footer__social_fb"></a>
        <a href="" class="footer__social footer__social_inst"></a>
        <a href="" class="footer__social footer__social_ok"></a>
      </div>
    </div>
    <div class="footer__cell">
      <ul class="footer__list">
        <li><b>Ежедневно</b> с <span>10:00</span> до <span>22:00</span></li>
        <li><b>Гипермаркет</b> с <span>09:00</span> до <span>21:00</span></li>
        <li><b>Кинотеатр</b> с <span>09:00</span> до <span>02:00</span></li>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>

<div id="callback" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close"></a>
    <div class="uk-offcanvas-bar-inner sidebar">

      <a href="" class="sidebar__logo">
        <img src="<?= $config->urls->templates.'assets/img/logo-text.png' ?>" alt="" class="sidebar__logo-img">
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

<div id="modal" class="uk-modal">
  <div class="modal">
    <a href="" class="modal__logo">
      <img src="<?= $config->urls->templates . 'assets/img/logo-white.png'?>" alt="">
    </a>
    <a href="" class="uk-modal-close modal__close"></a>
    <div class="modal__socials">
      <a href="" class="modal__social modal__social_vk"></a>
      <a href="" class="modal__social modal__social_fb"></a>
      <a href="" class="modal__social modal__social_inst"></a>
      <a href="" class="modal__social modal__social_ok"></a>
    </div>
    <p class="modal__schedule">Часы работы с 10:00 до 22:00</p>
    <div class="container">
      <div class="modal__grid">
        <div class="modal__cell">
          <ul>
            <li><a href="">Афиша</a></li>
            <li><a href="">Акции</a></li>
            <li><a href="">Схема ТРЦ</a></li>
            <li><a href="">Магазины</a></li>
            <li><a href="">Развлечения</a></li>
            <li><a href="">Кафе</a></li>
            <li><a href="">Услуги</a></li>
          </ul>
          <ul>
            <li><a href="">Аренда</a></li>
            <li><a href="">Контакты</a></li>
            <li><a href="">Как добраться</a></li>
          </ul>
        </div>
        <div class="modal__cell">
          <h1 class="modal__title">торгово-развлекательный центр  панама</h1>
          <div class="modal__img"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src=<?= $config->urls->templates . 'assets/js/slick.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/form.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/script.js'?>></script>

<script src="<?= $config->urls->templates . 'assets/js/core/core.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/offcanvas.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/modal.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/utility.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/switcher.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/components/notify.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/smooth-scroll.js'?>"></script>
</body>

</html>
