<?php get_header(); ?>

  <div class="row row-article">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <span class="date"><?php the_time('d F Y'); ?></span>
        <?php the_content(); ?>



      </article>
    <?php endwhile; else: ?>
      <article>
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>

  </div><!-- row-article -->

<?php get_footer(); ?>
