<?php namespace Processwire; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body class="<?= $page->template->name; ?>">

<div class="menu">
  <div class="container container_big">
    <div class="menu__grid">
      <div class="menu__nav">
        <img src="<?= $config->urls->templates . 'assets/img/logo-white.png'?>" alt="" class="menu__logo">
        <a href="" class="menu__link">Афиша</a>
        <a href="" class="menu__link">Акции</a>
        <a href="" class="menu__link">Схема ТРЦ</a>
        <a href="" class="menu__link">Аренда</a>
        <a href="" class="menu__link">Контакты</a>
      </div>
      <div class="menu__navigation">
        <a href="">Навигация</a>
        <a href="" class="menu__toggle"></a>
      </div>
    </div>
  </div>
</div>
<div class="menu-wrapper">
  <div class="menu">
    <div class="container container_big">
      <div class="menu__grid">
        <div class="menu__nav">
          <img src="<?= $config->urls->templates . 'assets/img/logo-white.png'?>" alt="" class="menu__logo">
          <a href="" class="menu__link">Афиша</a>
          <a href="" class="menu__link">Акции</a>
          <a href="" class="menu__link">Схема ТРЦ</a>
          <a href="" class="menu__link">Аренда</a>
          <a href="" class="menu__link">Контакты</a>
        </div>
        <div class="menu__navigation">
          <a href="">Навигация</a>
          <a href="" class="menu__toggle"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $templateRender; ?>

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

<script src=<?= $config->urls->templates . 'assets/js/slick.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/script.js'?>></script>

</body>

</html>
