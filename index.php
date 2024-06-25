<?php
  get_header();
  get_header('navigation');

  while (have_posts()) {
    the_post(); ?>
    <article class="border bg-gray-200">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
    <?php }

  get_footer('sitemap');
  get_footer('copyright');
  get_footer();
