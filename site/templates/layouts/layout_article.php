<?php namespace Processwire;?>

<section class="article">
  <div class="container">
    <div class="article__grid">
      <div class="article__cell">
        <div class="article__img" style="background-image:url(<?= $page->article_image->url ?>)"></div>
        <ul class="article__list">
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/clock.svg'?>)"><?=$page->article_schedule?></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/phone.svg'?>)"><a href="tel:<?=phoneLink($page->article_phone)?>"><?=$page->article_phone?></a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/email.svg'?>)"><a href="mailto:<?=$page->article_mail?>"><?=$page->article_mail?></a></li>
          <li style="background-image:url(<?= $config->urls->templates . 'assets/img/browser.svg'?>)"><a href="<?=$page->article_website?>" target="_blank"><?=preg_replace('{^.+://}', '', $page->article_website)?></a></li>
        </ul>
        <p class="article__category"><?= $page->article_category ?></p>
      </div>
      <div class="article__cell">
        <p class="article__subtitle"><?= $page->article_subtitle?></p>
        <h1 class="article__title"><?= $page->title?></h1>
        <div class="article__content">
          <?php foreach($page->article_content as $item) {
            if ($item->type=="article_content_text") echo "<p>".$item->article_text."</p>";
            if ($item->type=="article_content_images") {
              echo '<div class="article__images">';
              foreach ($item->article_images as $image) echo '<img src="'.$image->url.'">';
              echo '</div>';
            }
          }?>
        </div>
      </div>
    </div>
  </div>
</section>
