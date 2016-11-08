<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 category-block child-even'); ?>>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <span class="category-block-img">
        <?php if ( has_post_thumbnail()) :
          the_post_thumbnail('medium');
        else: ?>
          <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <span><?php the_time('j F Y'); ?></span>
      </span>
      <h5><?php the_title(); ?></h5>
      <?php wpeExcerpt('wpeExcerpt7'); ?>
    </a>
  </div>

  <?php endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
