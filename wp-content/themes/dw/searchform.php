<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="search-form">
  <label for="s" class="screen-reader-text"><?= __hepl('Rechercher :'); ?></label>
  <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-form__input" placeholder="<?= __hepl('Rechercher...'); ?>" />
  <input type="submit" id="searchsubmit" class="search-form__submit" value="<?= __hepl('Rechercher'); ?>" />
</form>
