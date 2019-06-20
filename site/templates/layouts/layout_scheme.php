<?php namespace Processwire;?>

<section class="scheme-start">
  <div class="scheme-start__wrapper">
    <img src="<?= $config->urls->templates . 'assets/img/karta_back.png'?>" alt="">
    <img src="<?= $config->urls->templates . 'assets/img/karta_front.png'?>" alt="">
    <h1 class="scheme-start__hello">Схема <span>торгового центра</span></h1>
  </div>
  <div class="scheme-start__grid">
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/hat.png';?>)">
          <h3 class="about-item__title">магазины</h3>
          <a href="#main-scheme" class="about-item__link" data-uk-smooth-scroll data-filter="stores"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/confetti.png';?>)">
          <h3 class="about-item__title">развлечения</h3>
          <a href="#main-scheme" class="about-item__link" data-uk-smooth-scroll data-filter="fun"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/donut.png';?>)">
          <h3 class="about-item__title">кафе</h3>
          <a href="#main-scheme" class="about-item__link" data-uk-smooth-scroll data-filter="cafe"></a>
        </div>
      </div>
    </div>
    <div class="scheme-start__cell">
      <div class="about__item">
        <div class="about-item" style="background-image:url(<?=$config->urls->templates . 'assets/img/scissors.png';?>)">
          <h3 class="about-item__title">услуги</h3>
          <a href="#main-scheme" class="about-item__link" data-uk-smooth-scroll data-filter="services"></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="main-scheme" class="main-scheme">
  <div class="map">
    <div class="map__grid">
      <div class="map__cell">
        <ul class="map__switcher">
          <li>Этаж 1</li>
          <li>Этаж 2</li>
          <li>Этаж 3</li>
        </ul>
        <div class="map__scheme" data-uk-scrollspy="{cls:'uk-animation-slide-bottom',delay:300}">
          <div class="map__group">
            <img class="map__floor" data-lazy-img="<?= $config->urls->templates . 'assets/img/floor1.png'?>" alt="">
            <div class="map__marker map__marker_exit" style="left:85%; top:25%"></div>
            <?php $companies = array(); ?>
            <?php foreach($pages->get("/scheme/companies1")->children() as $child): ?>
              <?php
              if (strlen($child->company_place)==0): continue; endif;
              if ($child->company_place<=0 || $child->company_place>29): continue; endif;
              array_push($companies, $child);
              $left = 0; $top = 0;
              switch($child->company_place) {
                case 1: $left=55; $top=25; break;
                case 2: $left=76; $top=21; break;

                case 3: $left=82; $top=32; break;
                case 4: $left=85; $top=36; break;
                case 5: $left=84; $top=43; break;
                case 6: $left=78; $top=44; break;
                case 7: $left=83; $top=50; break;
                case 8: $left=75; $top=51; break;
                case 9: $left=72; $top=58; break;
                case 10: $left=80; $top=65; break;
                case 11: $left=79; $top=80; break;
                case 12: $left=66; $top=72; break;
                case 13: $left=63; $top=75; break;

                case 14: $left=59; $top=75; break;
                case 15: $left=54; $top=86; break;
                case 16: $left=57; $top=62; break;
                case 17: $left=59; $top=64; break;
                case 18: $left=60; $top=58; break;
                case 19: $left=62; $top=55; break;
                case 20: $left=64; $top=51; break;
                case 21: $left=67; $top=47; break;

                case 22: $left=67; $top=40; break;
                case 23: $left=50; $top=47; break;
                case 24: $left=31; $top=36; break;
                case 25: $left=29; $top=60; break;
                case 26: $left=20; $top=75; break;
                case 27: $left=33; $top=80; break;
                case 28: $left=44; $top=78; break;
                case 29: $left=73; $top=41; break;
              }
              ?>
              <div class="map__marker map__marker_<?= $child->company_subcategory->name ?>" style="left:<?= $left ?>%; top:<?= $top ?>%;" data-id="<?=$child->name?>.<?= $child->company_place ?>" data-category="<?= $child->company_subcategory->subcategory_category->name ?>"></div>
            <?php endforeach; ?>
            <div class="map__marker map__marker_exit" style="left:47.5%; top:87.5%"></div>
          </div>
          <div class="map__group">
            <img class="map__floor" data-lazy-img="<?= $config->urls->templates . 'assets/img/floor2.png'?>" alt="">
            <?php foreach($pages->get("/scheme/companies2")->children() as $child): ?>
              <?php
              if (strlen($child->company_place)==0): continue; endif;
              if ($child->company_place<=0 || $child->company_place>31): continue; endif;
              array_push($companies, $child);
              $left = 0; $top = 0;
              switch($child->company_place) {
                case 1: $left=50; $top=83; break;
                case 2: $left=25; $top=82; break;

                case 3: $left=42; $top=69; break;
                case 4: $left=32; $top=69; break;
                case 5: $left=27; $top=69; break;
                case 6: $left=27; $top=64; break;
                case 7: $left=27; $top=57; break;
                case 8: $left=33; $top=59; break;
                case 9: $left=41; $top=58; break;
                case 10: $left=43; $top=64; break;
                case 11: $left=48; $top=60; break;
                case 12: $left=49; $top=55; break;

                case 13: $left=20; $top=47; break;
                case 14: $left=26; $top=45; break;
                case 15: $left=31; $top=48; break;
                case 16: $left=38; $top=48; break;
                case 17: $left=47; $top=46; break;

                case 18: $left=41; $top=28; break;
                case 19: $left=75; $top=32; break;

                case 20: $left=74; $top=50; break;
                case 21: $left=79; $top=54; break;
                case 22: $left=71; $top=57; break;
                case 23: $left=68; $top=61; break;
                case 24: $left=75; $top=63; break;
                case 25: $left=81; $top=67; break;
                case 26: $left=85; $top=73; break;
                case 27: $left=83; $top=81; break;
                case 28: $left=74; $top=81; break;
                case 29: $left=65; $top=75; break;
                case 30: $left=69; $top=71; break;
                case 31: $left=66; $top=63; break;
              }
              ?>
              <div class="map__marker map__marker_<?= $child->company_subcategory->name ?>" style="left:<?= $left ?>%; top:<?= $top ?>%;" data-id="<?=$child->name?>.<?= $child->company_place ?>" data-category="<?= $child->company_subcategory->subcategory_category->name ?>"></div>
            <?php endforeach; ?>
          </div>
          <div class="map__group">
            <img class="map__floor" src="<?= $config->urls->templates . 'assets/img/floor3.png'?>" alt="">
            <?php foreach($pages->get("/scheme/companies3")->children() as $child): ?>
              <?php
              if (strlen($child->company_place)==0): continue; endif;
              if ($child->company_place<=0 || $child->company_place>25): continue; endif;
              array_push($companies, $child);
              $left = 0; $top = 0;
              switch($child->company_place) {
                case 1: $left=47; $top=78; break;
                case 2: $left=32; $top=76; break;
                case 3: $left=19; $top=71; break;
                case 4: $left=23; $top=56; break;

                case 5: $left=18; $top=46; break;
                case 6: $left=23; $top=42; break;
                case 7: $left=19; $top=38; break;
                case 8: $left=39; $top=25; break;
                case 9: $left=73; $top=29; break;
                case 10: $left=75; $top=48; break;
                case 11: $left=73; $top=54; break;
                case 12: $left=79; $top=54; break;
                case 13: $left=73; $top=73; break;

                case 14: $left=54; $top=45; break;
                case 15: $left=51; $top=50; break;
                case 16: $left=49; $top=54; break;
                case 17: $left=47; $top=59; break;
                case 18: $left=46; $top=65; break;
                case 19: $left=41; $top=63; break;
                case 20: $left=35; $top=63; break;
                case 21: $left=30; $top=55; break;
                case 22: $left=30; $top=41; break;
                case 23: $left=36; $top=43; break;
                case 24: $left=41; $top=47; break;
                case 25: $left=47; $top=44; break;
              }
              ?>
              <div class="map__marker map__marker_<?= $child->company_subcategory->name ?>" <?= $child->company_place==8?"data-cinema":"" ?> style="left:<?= $left ?>%; top:<?= $top ?>%;" data-id="<?=$child->name?>.<?= $child->company_place ?>" data-category="<?= $child->company_subcategory->subcategory_category->name ?>"></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="map__cell">
        <a  href="#search" class="map__search" data-filter="<?= $input->get->filter ?>" data-uk-modal>Поиск</a>
        <div class="map__catalog">
          <?php
          function arr_where($arr, $val) {
            $tmp = array();
            foreach ($arr as $x) {
              if ($x->company_subcategory->subcategory_category->name==$val) array_push($tmp,$x);
            }
            return $tmp;
          }
          ?>
          <?php foreach($pages->get("/scheme/categories")->children() as $category): ?>
          <ul>
            <li data-category="<?= $category->name ?>"><?= $category->title ?></li>
            <?php foreach (arr_where($companies,$category->name) as $item): ?>
            <li data-id="<?=$item->name?>.<?= $item->company_place ?>"><?= $item->title ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="search" class="uk-modal">
  <div class="search">
    <a href="" class="uk-modal-close search__close"></a>
    <div class="container">
      <div class="search__wrapper">
        <input type="text" placeholder="название">
      </div>
      <div class="search__grid active">
        <?php foreach($pages->get("/scheme/categories")->children() as $category): ?>
          <div class="search__cell">
            <ul>
              <li data-category="<?= $category->name ?>"><?= $category->title ?></li>
              <?php foreach($pages->get("/scheme/subcategories")->children() as $subcategory):?>
              <?php if($subcategory->subcategory_category == $category): ?>
              <li data-subcategory="<?= $subcategory->name ?>"><?= $subcategory->title ?></li>
              <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="search__result">
        <p></p>
        <ul>
        <?php foreach($companies as $company): ?>
          <li data-id="<?=$company->name?>.<?= $company->company_place ?>" data-category="<?= $company->company_subcategory->subcategory_category->name?>" data-subcategory="<?= $company->company_subcategory->name?>"><?= $company->title ?></li>
        <?php endforeach; ?>
        </ul>
        <p>Назад к категориям</p>
      </div>
    </div>
  </div>
</div>

<?php foreach($companies as $item):?>
  <section class="info" data-id="<?=$item->name?>.<?= $item->company_place ?>">
    <div class="container">
      <div class="info__grid">
        <div class="info__cell">
          <div class="info__img" data-bg="url(<?= $item->company_img->url ?>)"></div>
          <ul class="info__list">
            <li style="background-image:url(<?= $config->urls->templates . 'assets/img/clock_white.svg'?>)"><?=$item->company_schedule?></li>
            <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone_white.svg'?>)"><a href="tel:<?=phoneLink($item->company_phone)?>"><?=$item->company_phone?></a></li>
            <li style="background-image:url(<?= $config->urls->templates . 'assets/img/email_white.svg'?>)"><a href="mailto:<?=$item->company_email?>"><?=$item->company_email?></a></li>
            <li style="background-image:url(<?= $config->urls->templates . 'assets/img/browser_white.svg'?>)"><a href="<?=$item->company_website?>" target="_blank"><?=preg_replace('{^.+://}', '', $item->company_website)?></a></li>
          </ul>
          <p class="info__category"><?= $item->company_subcategory->title ?></p>
        </div>
        <div class="info__cell">
          <p class="info__subtitle"><?= $item->company_subcategory->subcategory_category->title ?></p>
          <h1 class="info__title"><?= $item->title ?></h1>
          <div class="info__content">
            <?php foreach($item->company_description as $text): ?>
            <p><?= $text->article_text ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>
