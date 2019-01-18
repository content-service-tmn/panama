<?php namespace Processwire;?>

<section class="promotions">
  <div class="container">
    <p class="promotions__subtitle"><?= $page->promotions_subtitle ?></p>
    <h1 class="promotions__title"><?= $page->promotions_title ?></h1>
    <div class="promotions__grid">
      <?php $i = 0; foreach ($page->children as $child): $i++; if ($i>6) break; ?>
        <div class="promotions__cell">
          <div class="promotion">
            <div class="promotion__img" style="background-image:url(<?=$child->article_image->url?>)">
              <a href="<?= $child->path?>"></a>
            </div>
            <p class="promotion__type"><?= $child->article_type?></p>
            <p class="promotion__date"><?= $child->article_subtitle?></p>
            <p class="promotion__title"><?= $child->title?></p>
            <p class="promotion__description">
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
            <p class="promotion__shop"><?= $child->article_shop?></p>
            <a href="<?= $child->path?>" class="promotion__link">подробнее</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
