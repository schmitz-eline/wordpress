<?php /* Template Name: Template Travels */ ?>

<?php get_header(); ?>

<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$taxonomy = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';
$args = [
  'post_type' => 'travel', // ATTENTION changer
  'posts_per_page' => 3,
  'paged' => $paged,
];

if ($taxonomy !== '') {
  $args['tax_query'] = [
    [
      'taxonomy' => 'travel_type', // ATTENTION changer
      'field'    => 'slug',
      'terms'    => $taxonomy,
    ]
  ];
}

$query = new WP_Query($args);
?>

<?php
$terms = get_terms([
  'taxonomy' => 'travel_type', // ATTENTION changer
  'hide_empty' => false,
]);

$current_filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : '';
?>

<div class="travel__button-container">
  <a href="<?= esc_url(get_permalink()); ?>" class="travel__button-link <?= ($current_filter === '') ? 'travel__button-link--active' : ''; ?>">
    <?= __('Tout', 'hepl-trad'); ?>
  </a>

  <?php foreach ($terms as $term): ?>
    <a href="<?= esc_url(get_permalink()) . '?filter=' . $term->slug; ?>"
       class="travel__button-link <?= ($current_filter === $term->slug) ? 'travel__button-link--active' : ''; ?>">
      <?= esc_html($term->name); ?>
    </a>
  <?php endforeach; ?>
</div>

<?php
if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
    ?>
    <article>
      <?php $title = get_field('headline', get_the_ID());
      $image = get_field('side_image', get_the_ID());
      ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div><?= wp_get_attachment_image(get_field('side_image'), 'travel-side', attr: ['class' => 'travel__img']); ?></div>
    </article>
  <?php
  endwhile;

  echo '<div class="pagination">';
  echo paginate_links(array(
    'total' => $query->max_num_pages,
    'current' => $paged,
    'prev_text' => __hepl('&laquo; Précédent'),
    'next_text' => __hepl('Suivant &raquo;'),
  ));
  echo '</div>';

  wp_reset_postdata();
else :
  echo '<p>Aucun projet trouvé.</p>';
endif;

?>

<?php get_footer(); ?>
