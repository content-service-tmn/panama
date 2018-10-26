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
        <a href="" class="menu__logo">
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
        <a href="" class="menu__link">Афиша</a>
        <a href="" class="menu__link">Акции</a>
        <a href="" class="menu__link">Схема ТРЦ</a>
        <a href="" class="menu__link">Аренда</a>
        <a href="" class="menu__link">Контакты</a>
      </div>
      <div class="menu__navigation">
        <a href="">Навигация</a>
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
        <a href="" class="menu__toggle <?= $toggle; ?>"></a>
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

<script src=<?= $config->urls->templates . 'assets/js/slick.js'?>></script>
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
