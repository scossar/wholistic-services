<article <?php post_class('row'); ?>>
  <header>
    <h2 class="entry-title"><a
        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!--    --><?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="featured-image">
    <?php the_post_thumbnail(); ?>
  </div>
</article>
