<?php /* Template Name: Home Page Template */ get_header(); ?>

    <div class="row row-with-divide">
      <h6 class="col-md-12 content-title">
        Популярные статьи
      </h6>

      <?php $popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
      while ( $popularpost->have_posts() ) : $popularpost->the_post();
      ?>

        <div class="col-md-4 category-block">
          <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('small');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
          </a>
          <h5><?php the_category(', '); ?></h5>
          <a href="<?php the_permalink(); ?>">
            <p><?php the_title() ?></p>
          </a>
        </div>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    </div><!-- row-with-divide -->

    <div class="row row-with-divide row-popular">
      <h6 class="col-md-12 content-title">Популярные упражнения</h6>

      <?php query_posts("showposts=6&cat=99"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 category-block">
          <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('small');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
          </a>
          <h5><?php the_category(', '); ?></h5>
          <a href="<?php the_permalink(); ?>">
            <p><?php the_title() ?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- row -->

    <div class="row">
      <h6 class="col-md-12 content-title">Последние статьи</h6>

      <?php query_posts("showposts=6&cat=8"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 category-block">
          <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('small');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
          </a>
          <h5><?php the_category(', '); ?></h5>
          <a href="<?php the_permalink(); ?>">
            <p><?php the_title() ?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- row -->

    <div class="row">

      <?php get_template_part('tag-cloud'); ?>

      <div class="col-md-12">
        <div class="content-block">
          <h6><?php the_title(); ?></h6>
          <?php the_content(); ?>
        </div><!-- content-block -->
      </div>

    </div><!-- /.row -->

  </div><!-- /.col-md-9 maincont -->
</div><!-- row -->
<?php get_footer(); ?>
