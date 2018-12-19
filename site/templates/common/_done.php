<?php namespace Processwire; $homepage = $pages->get("id=1"); $contacts = $pages->get("/contacts") ?>

<?php if ($config->ajax): ?>
   <?= $templateRender; ?>
<?php else: ?>

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
  case 'layout_scheme':
    $color='cyan';
endswitch;
echo $color;
?>">

<?php if ($page->template->name!="layout_privacy"): ?>
<div class="loaderArea">
  <div class="loaderArea__preloader"></div>
   <div class="loader">
     <div class="loader__grid">
       <div class="loader__cell">
         <img src="<?= $config->urls->templates . 'assets/img/Panama_horizontal.png' ?>" alt="">
       </div>
       <div class="loader__cell">
         <p>
           <span>для всей</span>
           <span>семьи</span>
           <span>и точка</span>
         </p>
       </div>
     </div>
   </div>
</div>

<div class="menu <?= $color=='orange'||$color=='blue'||$color=='cyan'?'contrast':'' ?>">
  <div class="container container_big">
    <div class="menu__grid">
      <div class="menu__nav">
        <a href="/" class="menu__logo">
          <img src="<?php
          $logo = "";
          switch($page->template->name):
            case 'layout_article':
            case 'layout_promotions':
            case 'layout_renters':
            $logo= 'logo.png';
            break;
            default:
            $logo= 'logo-white.png';
            break;
          endswitch;
          echo $config->urls->templates . 'assets/img/' . $logo;
          ?>" alt="">
        </a>
        <a href="/events" class="menu__link"><?= $pages->get("/events")->title ?></a>
        <a href="/promotions" class="menu__link"><?= $pages->get("/promotions")->title ?></a>
        <a href="/scheme" class="menu__link"><?= $pages->get("/scheme")->title ?></a>
        <a href="/renters" class="menu__link"><?= $pages->get("/renters")->title ?></a>
        <a href="/contacts" class="menu__link"><?= $pages->get("/contacts")->title ?></a>
      </div>
      <div class="menu__navigation">
        <a href="#modal" data-uk-modal><?= $homepage->navigation ?></a>
        <?php
          $toggle = "";
          switch($page->template->name):
            case 'layout_contacts':
            $toggle= 'orange';
            break;
            case 'layout_events':
            $toggle= 'dark-orange';
            break;
            case 'layout_scheme':
            $toggle= 'blue';
          endswitch;
        ?>
        <a href="#modal" class="menu__toggle <?= $toggle; ?>" data-uk-modal></a>
      </div>
    </div>
  </div>
</div>

<div class="menu-wrapper <?= $color; ?>"></div>
<?php endif; ?>

<?= $templateRender; ?>

<?php if ($page->template->name!="layout_contacts" && $page->template->name!="layout_privacy"): ?>
<section class="footer">
  <img src="<?= $config->urls->templates . 'assets/img/footer.png' ?>" alt="" class="footer__bg">
  <div class="footer__grid">
    <div class="footer__cell">
      <ul class="footer__list">
        <li><?= $contacts->contacts_address; ?></li>
        <?php foreach(explode(',', $contacts->contacts_phone) as $phone):?>
          <li><a href="tel:<?=phoneLink($phone)?>"><?=$phone?></a></li>
        <?php endforeach; ?>
        <?php foreach(explode(',', $contacts->contacts_email) as $mail):?>
          <li><a href="mailto:<?=$mail?>"><?=$mail?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="footer__cell">
      <a href="/contacts" class="footer__how"><?= $contacts->contacts_transport_title ?></a>
      <div class="footer__socials">
        <?php if ($contacts->vk!=""):?><a href="<?=$contacts->vk?>" class="footer__social footer__social_vk"></a><?php endif;?>
        <?php if ($contacts->facebook!=""):?><a href="<?=$contacts->facebook?>" class="footer__social footer__social_fb"></a><?php endif;?>
        <?php if ($contacts->instagram!=""):?><a href="<?=$contacts->instagram?>" class="footer__social footer__social_inst"></a><?php endif;?>
        <?php if ($contacts->odnoklassniki!=""):?><a href="<?=$contacts->odnoklassniki?>" class="footer__social footer__social_ok"></a><?php endif;?>
      </div>
    </div>
    <div class="footer__cell">
      <ul class="footer__list">
        <?php $tmp = $contacts->contacts_schedule; ?>
        <?php foreach($tmp as $item): $time = explode(',', $item->contacts_schedule_time)?>
          <li><b><?= $item->contacts_schedule_name ?></b> c <span><?= $time[0] ?></span> до <span><?= $time[1] ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="footer__info">
    <a href="http://contentservice.agency/" target="_blank">Made by Content Service</a>
    <a href="/policy" target="_blank">Политика конфеденциальности</a>
  </div>
</section>
<?php endif; ?>

<div id="modal" class="uk-modal">
  <div class="modal">
    <a href="/" class="modal__logo">
      <img src="<?= $config->urls->templates . 'assets/img/logo-white.png'?>" alt="">
    </a>
    <a href="" class="uk-modal-close modal__close"></a>
    <div class="container">
      <div class="modal__grid">
        <div class="modal__cell">
          <ul>
            <li><a href="/events" data-id="megaphone" data-color="#ED7709"><?= $pages->get("/events")->title ?></a></li>
            <li><a href="/promotions" data-id="aktsii" data-color="#FF8207"><?= $pages->get("/promotions")->title ?></a></li>
            <li><a href="/scheme" data-id="karta" data-color="#4CC1DA"><?= $pages->get("/scheme")->title ?></a></li>
            <li><a href="/scheme#stores" data-id="confetti" data-color="#4CC1DA">Магазины</a></li>
            <li><a href="/scheme#fun" data-id="kino" data-color="#ED7709">Развлечения</a></li>
            <li><a href="/scheme#cafe" data-color="#FF8207">Кафе</a></li>
            <li><a href="/scheme#services" data-color="#4CC1DA">Услуги</a></li>
          </ul>
          <ul>
            <li><a href="/renters" data-color="#ED7709"><?= $pages->get("/renters")->title ?></a></li>
            <li><a href="/contacts" data-color="#FF8207"><?= $pages->get("/contacts")->title ?></a></li>
            <li><a href="/contacts" data-color="#4CC1DA"><?= $contacts->contacts_transport_title ?></a></li>
          </ul>
        </div>
        <div class="modal__cell">
          <h1 class="modal__title">торгово-развлекательный центр панама</h1>
          <div class="modal__img" data-id="confetti">
            <img src="<?= $config->urls->templates . 'assets/img/confetti_back.png'?>" alt="">
            <img src="<?= $config->urls->templates . 'assets/img/confetti_front.png'?>" alt="">
          </div>
          <div class="modal__img" data-id="aktsii">
            <img src="<?= $config->urls->templates . 'assets/img/aktsii_back.png'?>" alt="">
            <img src="<?= $config->urls->templates . 'assets/img/aktsii_front.png'?>" alt="">
          </div>
          <div class="modal__img" data-id="karta">
            <img src="<?= $config->urls->templates . 'assets/img/karta_back.png'?>" alt="">
            <img src="<?= $config->urls->templates . 'assets/img/karta_front.png'?>" alt="">
          </div>
          <div class="modal__img" data-id="kino">
            <img src="<?= $config->urls->templates . 'assets/img/kino_back.png'?>" alt="">
            <img src="<?= $config->urls->templates . 'assets/img/kino_front.png'?>" alt="">
          </div>
          <div class="modal__img" data-id="megaphone">
            <img src="<?= $config->urls->templates . 'assets/img/megaphone_back.png'?>" alt="">
            <img src="<?= $config->urls->templates . 'assets/img/megaphone_front.png'?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="modal__socials">
      <?php if ($contacts->vk!=""):?><a href="<?=$contacts->vk?>" class="modal__social modal__social_vk"></a><?php endif;?>
      <?php if ($contacts->facebook!=""):?><a href="<?=$contacts->facebook?>" class="modal__social modal__social_fb"></a><?php endif;?>
      <?php if ($contacts->instagram!=""):?><a href="<?=$contacts->instagram?>" class="modal__social modal__social_inst"></a><?php endif;?>
      <?php if ($contacts->odnoklassniki!=""):?><a href="<?=$contacts->odnoklassniki?>" class="modal__social modal__social_ok"></a><?php endif;?>
    </div>
    <p class="modal__schedule"><?=$contacts->contacts_schedule[0]->contacts_schedule_name?> <?php $sch=explode(',', $contacts->contacts_schedule[0]->contacts_schedule_time); echo " с ".$sch[0]." до ".$sch[1]?></p>
  </div>
</div>


<script src=<?= $config->urls->templates . 'assets/js/slick.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/form.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/script.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/hover.js'?>></script>
<script src=<?= $config->urls->templates . 'assets/js/map.js'?>></script>

<script src="<?= $config->urls->templates . 'assets/js/core/core.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/offcanvas.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/modal.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/utility.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/switcher.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/components/notify.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/smooth-scroll.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/scrollspy.js'?>"></script>
<script src="<?= $config->urls->templates . 'assets/js/core/smooth-scroll.js'?>"></script>

<script src=<?= $config->urls->templates . 'assets/js/preloader.js'?>></script>
</body>

</html>

<?php endif; ?>
