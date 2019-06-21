<?php namespace Processwire; ?>

<section class="contacts">
  <div class="contacts__info">
    <div class="container">
      <h1 class="contacts__title"><?= $page->main_title ?></h1>
      <div class="contacts__grid">
        <div class="contacts__cell">
          <p class="contacts__subtitle"><?= $page->contacts_transport_title ?></p>
          <ul class="contacts__list">
            <?php $tmp = $page->contacts_transport; ?>
            <?php foreach($tmp as $item):?>
              <li><b><?= $item->contacts_transport_name ?>: </b><?= $item->contacts_transport_numbers ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="contacts__cell">
          <p class="contacts__subtitle"><?= $page->contacts_schedule_title ?></p>
          <ul class="contacts__list">
            <?php $tmp = $page->contacts_schedule; ?>
            <?php foreach($tmp as $item): $time = explode(',', $item->contacts_schedule_time)?>
              <li><b><?= $item->contacts_schedule_name ?></b> c <span><?= $time[0] ?></span> до <span><?= $time[1] ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="contacts__cell">
          <p class="contacts__subtitle"><?= $page->contacts_contacts_title ?></p>
          <ul class="contacts__list">
            <?php foreach(explode(',', $page->contacts_email) as $mail):?>
              <li><a href="mailto:<?=$mail?>"><?=$mail?></a></li>
            <?php endforeach; ?>
            <?php foreach(explode(',', $page->contacts_phone) as $phone):?>
              <li><a href="tel:<?=phoneLink($phone)?>"><?=$phone?></a></li>
            <?php endforeach; ?>
            <li><?= $page->contacts_address; ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="contacts__map">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A996da8375d9d9d5c6e311ab99bb88b04842f4018688670faafbd994230b2e22b&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
  </div>
</section>
