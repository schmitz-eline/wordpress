<?php $supline = get_sub_field('supline') ?>
<?php $headline = get_sub_field('headline') ?>
<?php $subline = get_sub_field('subline') ?>
<?php $text = get_sub_field('text') ?>
<?php $cta = get_sub_field('cta') ?>
<?php $image = get_sub_field('image') ?>
<?php $media_position = get_sub_field('media_position') ?>
<?php $media_type = get_sub_field('media_type') ?>

<section class="text-media">
  <div class="text-media__content-container">
    <p class="text-media__content-supline">
      <?= $supline ?>
    </p>
    <h2 class="text-media__content-headline">
      <?= $headline ?>
    </h2>
    <p class="text-media__content-subline">
      <?= $supline ?>
    </p>
    <div class="text-media__content-text">
      <?= $text ?>
    </div>
    <a class="text-media__content-link"
       href="<?= $cta['url'] ?>"
       title="<?= $cta['title'] ?>">
      <?= $cta['title'] ?>
    </a>
  </div>
  <div class="text-media__position text-media__position--<?= $media_position ?>">
    <img class="text-media__image"
         src="<?= $image['url'] ?>"
         alt="<?= $image['alt'] ?>"
         width="<?= $image['width'] ?>"
         height="<?= $image['height'] ?>">
  </div>
</section>
