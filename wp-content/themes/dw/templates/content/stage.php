<?php
$stage_supline = get_field('supline');
$stage_headline = get_field('headline');
$stage_description = get_field('description');
$stage_image = get_field('background_image');
$stage_link = get_field('link');
?>

<section class="stage">
    <p class="stage__supline">
        <?= $stage_supline ?>
    </p>
    <h2 class="stage__headline" role="heading" aria-level="2">
        <?= $stage_headline ?>
    </h2>
    <div class="stage__description">
        <?= $stage_description ?>
    </div>
    <a class="stage__link" href="<?= $stage_link['url'] ?>" title="<?= $stage_link['title'] ?>">
        <?= $stage_link['title'] ?>
    </a>
    <img class="stage__image" src="<?= $stage_image['url'] ?>" alt="<?= $stage_image['alt'] ?>"
         height="<?= $stage_image['height'] ?>" width="<?= $stage_image['width'] ?>">
</section>