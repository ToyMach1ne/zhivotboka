<aside class="col-md-3 sidebar">
  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>
  <?php endif; ?>
  <div class="widget widget-last-news">
    <h6>Последние статьи</h6>

    <?php query_posts("showposts=5"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="last-news">
         <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </span>
           <?php wpeExcerpt('wpeExcerpt10'); ?>
         </a>
       </div><!-- last-news -->
     <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </div><!-- /.widget widget-last-news -->
</aside>
