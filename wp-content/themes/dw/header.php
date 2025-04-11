<!DOCTYPE html>
<html lang="<?= __hepl('fr') ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
  <link rel="stylesheet" type="text/css" href="<?= dw_asset('css'); ?>">
  <script src="<?= dw_asset('js') ?>" defer></script>
  <?php wp_head(); ?>
</head>
<body>
<header class="header">
  <h1 class="screenreader__only">
    <?= get_the_title() ?>
  </h1>
  <a class="nav__logo" href="<?= home_url() ?>" title="<?= __hepl('Se diriger vers la page d’accueil') ?>">
    <img src="<?= get__option('options_company_logo')['url'] ?>" alt="" height="auto" width="120">
  </a>
  <nav class="nav">
    <h2 class="screenreader__only"><?= __hepl('Navigation principale') ?></h2>
    <ul class="nav__container">
      <?php foreach (dw_get_navigation_links('header') as $link): ?>
        <li class="nav__item nav__item--<?= $link->icon; ?>">
          <a href="<?= $link->href; ?>" class="nav__link"><?= $link->label; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="languages">
      <ul class="languages__container">
        <?php foreach (pll_the_languages(['raw' => true]) as $lang): ?>
          <li class="languages__item<?= $lang['current_lang'] ? ' languages__item--current' : '' ?>">
            <a href="<?= $lang['url'] ?>" lang="<?= $lang['locale'] ?>" hreflang="<?= $lang['locale'] ?>"
               class="languages__link" title="<?= __hepl('Changer la langue en') . $lang['name']?>"><?= $lang['slug'] ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
</header>
<main>
