<?php namespace Processwire; $contacts = $pages->get("/contacts") ?>


<section class="header">
  <img src="<?= $config->urls->templates . 'assets/img/frame.png'?>" alt="" class="header__frame">
  <div class="header__slider">
    <?php $i = 0; foreach ($pages->get("/promotions")->children as $child): $i++; if ($i>6) break; ?>
      <div class="header__item">
        <img src="<?=$child->article_image->url?>" alt="">
        <a href="<?= $child->path?>"></a>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="header__prev"></button>
  <button class="header__next"></button>
  </div>
  <div class="header__bottom">
    <div class="container container_big">
      <div class="header__grid">
        <div class="header__socials">
          <?php if ($contacts->vk!=""):?><a href="<?=$contacts->vk?>" class="header__social header__social_vk" target="_blank"></a><?php endif;?>
          <?php if ($contacts->facebook!=""):?><a href="<?=$contacts->facebook?>" class="header__social header__social_fb" target="_blank"></a><?php endif;?>
          <?php if ($contacts->instagram!=""):?><a href="<?=$contacts->instagram?>" class="header__social header__social_inst" target="_blank"></a><?php endif;?>
          <?php if ($contacts->odnoklassniki!=""):?><a href="<?=$contacts->odnoklassniki?>" class="header__social header__social_ok" target="_blank"></a><?php endif;?>
        </div>
        <ul class="header__contacts">
          <li><?= $contacts->contacts_address; ?></li>
          <?php foreach(explode(',', $contacts->contacts_phone) as $phone):?>
            <li><a href="tel:<?=phoneLink($phone)?>"><?=$phone?></a></li>
          <?php endforeach; ?>
        </ul>
        <ul class="header__schedule">
          <?php $item = $contacts->contacts_schedule->first; ?>
          <?php $time = explode(',', $item->contacts_schedule_time)?>
          <li><b><?= $item->contacts_schedule_name ?></b> c <span><?= $time[0] ?></span> до <span><?= $time[1] ?></span></li>
          <li><a href="/contacts"><?= $contacts->contacts_transport_title ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="stocks">
  <div class="container">
    <h1 class="stocks__title"><?= $page->home_promotions_title ?></h1>
    <div class="stocks__slider">
      <?php $i = 0; foreach ($pages->get("/promotions")->children as $child): $i++; if ($i>6) break; ?>
        <div class="stocks__item stocks-item">
          <div class="stocks-item__img" style="background-image:url(<?=$child->article_image->url?>)">
            <a href="<?= $child->path?>"></a>
          </div>
          <p class="stocks-item__type"><?= $child->article_type?></p>
          <p class="stocks-item__date"><?= $child->article_subtitle?></p>
          <p class="stocks-item__title"><?= $child->title?></p>
          <p class="stocks-item__description">
            <?php foreach($child->article_content as $item) {
              if ($item->type=="article_content_text") {
                $tmp = implode(' ', array_slice(explode(' ', $item->article_text), 0, 12));
                $last = substr($tmp,-1);
                if ($last==','||$last=='.'||$last='?'||$last='!'||$last=':'||$last=';') $tmp=substr($tmp, 0, -1);
                $tmp = $tmp."...";
                echo $tmp;
                break;
              }
            }?>
          </p>
          <p class="stocks-item__shop"><?= $child->article_shop?></p>
          <a href="<?= $child->path?>" class="stocks-item__link">подробнее</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="stocks__button-wrapper">
    <a href="/promotions" class="stocks__button"><?= $page->home_promotions_button ?></a>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="about__grid">
      <div class="about__cell" data-uk-scrollspy="{target:'about__discription',cls:'uk-animation-slide-left',delay:700}">
        <h1 class="about__title" data-uk-scrollspy="{cls:'uk-animation-slide-left'}"><?= formatString($page->home_about_title,"/","<span>","</span>") ?></h1>
        <p class="about__description">
          <?= $page->home_about_text ?>
        </p>
      </div>
      <div class="about__cell">
        <div class="about__item" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1000}">
          <div class="about-item" data-lazy-bg="background-image:url(<?=$config->urls->templates . 'assets/img/hat.png';?>)">
            <h3 class="about-item__title">магазины</h3>
            <a href="/scheme#stores" class="about-item__link"></a>
          </div>
        </div>
        <div class="about__item" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1000}">
          <div class="about-item" data-lazy-bg="background-image:url(<?=$config->urls->templates . 'assets/img/donut.png';?>)">
            <h3 class="about-item__title">кафе</h3>
            <a href="/scheme#cafe" class="about-item__link"></a>
          </div>
        </div>
      </div>
      <div class="about__cell">
        <div class="about__item" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1000}">
          <div class="about-item" data-lazy-bg="background-image:url(<?=$config->urls->templates . 'assets/img/confetti.png';?>)">
            <h3 class="about-item__title">развлечения</h3>
            <a href="/scheme#fun" class="about-item__link"></a>
          </div>
        </div>
        <div class="about__item" data-uk-scrollspy="{cls:'uk-animation-slide-right',delay:1000}">
          <div class="about-item" data-lazy-bg="background-image:url(<?=$config->urls->templates . 'assets/img/scissors.png';?>)">
            <h3 class="about-item__title">услуги</h3>
            <a href="/scheme#services" class="about-item__link"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cinema">
  <div class="container">
    <div class="cinema__grid">
      <div class="cinema__cell">
        <div class="cinema__item" data-uk-scrollspy="{target:'cinema__title',cls:'uk-animation-slide-left'}">
          <div class="cinema__img" data-uk-scrollspy="{cls:'uk-animation-slide-left'}"></div>
          <h1 class="cinema__title"><?= $page->home_cinema_title ?></h1>
        </div>
      </div>
      <div class="cinema__cell">
        <div class="cinema__slider">
          <?php foreach($page->home_cinema_gallery as $image):?>
            <div class="cinema__element" data-lazy-bg="background-image:url(<?= $image->url ?>)">
              <a href="<?= $image->url ?>" data-uk-lightbox="{group:'cinema__slider'}"></a>
            </div>
          <?php endforeach; ?>
        </div>
        <p class="cinema__text"><?= $page->home_cinema_text ?></p>
        <ul class="cinema__links">
          <li><a href="<?= $page->home_cinema_website_link ?>" class="cinema__link" target="_blank"><?= $page->home_cinema_website_name ?></a></li>
          <li><a href="/scheme#cinema" class="cinema__link"><?= $page->home_cinema_show ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="gallery">
  <div class="gallery__wrapper">
    <div class="gallery__slider-wrapper">
      <div class="gallery__container">
        <h1 class="gallery__title" data-uk-scrollspy="{cls:'uk-animation-slide-right'}"><?= $page->home_gallery_title ?></h1>
      </div>
      <div class="gallery__slider">
        <?php foreach($page->home_gallery_images as $image):?>
          <div class="gallery__item" data-lazy-bg="background-image:url(<?= $image->url ?>)"></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="gallery__bottom-slider">
      <?php foreach($page->home_gallery_images as $image):?>
        <div class="gallery__bottom-item" data-lazy-bg="background-image:url(<?= $image->url ?>)">
          <a href="<?= $image->url ?>" data-uk-lightbox="{group:'gallery__bottom-slider'}"></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
