<?php get_header(); ?>

  <div class="row row-article">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
      <h1 class="single-title inner-title"><?php the_title(); ?></h1>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <span class="date"><?php the_time('d F Y'); ?></span>
        <?php the_content(); ?>

        <div class="article-tags">
          <span class="article-tags--title">ТЭГИ:</span><?php the_tags( '', '', ''); ?>
        </div><!-- /.article-tags -->

        <div class="rating-socials">
          <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
          <div class="ya-share2" data-services="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div>
        </div><!-- /.rating-socials -->

        <?php comments_template(); ?>
      </article>
    <?php endwhile; else: ?>
      <article>
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>

  </div><!-- row-article -->

<?php get_footer(); ?>
