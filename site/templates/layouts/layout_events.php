<?php namespace Processwire;?>

<section class="events">
  <div class="events__wrapper">
    <img src="<?= $config->urls->templates . 'assets/img/megaphone.png'?>" alt="">
    <h1 class="events__hello"><?= $page->events_hello ?></h1>
  </div>
  <div class="container">
    <div class="events__content">
      <p class="events__subtitle"><?= $page->events_subtitle ?></p>
      <h1 class="events__title"><?= $page->events_title ?></h1>
      <div class="events__grid">
        <?php $i = 0; foreach ($page->children as $child): $i++; if ($i>6) break; ?>
          <div class="events__cell">
            <div class="event">
              <div class="event__img" style="background-image:url(<?=$child->article_image->url?>)"></div>
              <p class="event__type"><?= $child->article_type?></p>
              <p class="event__date"><?= $child->article_subtitle?></p>
              <p class="event__title"><?= $child->title?></p>
              <p class="event__description">
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
              <p class="event__shop"><?= $child->article_shop?></p>
              <a href="<?= $child->path?>" class="event__link">подробнее</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
