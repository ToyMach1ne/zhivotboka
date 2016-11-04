<?php /* Template Name: Home Page Template */ get_header(); ?>

    <div class="row row-with-divide">
      <h6 class="col-md-12 content-title">
        Популярные статьи
        <a href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
        <a href="#"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
      </h6>

      <?php query_posts("showposts=6&cat=8"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-md-4 category-block">
          <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
            <h5>Рубрика</h5>
            <?php wpeExcerpt('wpeExcerpt7'); ?>
          </a>
        </div>

      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

    </div><!-- row-with-divide -->

    <div class="row row-with-divide row-popular">
      <h6 class="col-md-12 content-title">Популярные упражнения</h6>

      <?php query_posts("showposts=6&cat=1"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 category-block">
          <a href="<?php the_permalink(); ?>">
            <span class="category-block-img">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
            <h5>Рубрика</h5>
            <?php wpeExcerpt('wpeExcerpt7'); ?>
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
                the_post_thumbnail('medium');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
              <span><?php the_time('j F Y'); ?></span>
            </span>
            <h5>Рубрика</h5>
            <?php wpeExcerpt('wpeExcerpt7'); ?>
          </a>
        </div>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- row -->

    <div class="row">
      <div class="col-md-12">
        <div class="tag-cloud">
          <h6><i class="fa fa-tag" aria-hidden="true"></i>ТЭГИ:</h6>
          <?php
            $args = array(
              'smallest'                  => 16,
              'largest'                   => 16,
              'unit'                      => 'px',
              'number'                    => 0,
              'format'                    => 'flat',
              'separator'                 => "\n",
              'orderby'                   => 'name',
              'order'                     => 'ASC',
              'exclude'                   => null,
              'include'                   => null,
              'topic_count_text_callback' => default_topic_count_text,
              'link'                      => 'view',
              'taxonomy'                  => 'post_tag',
              'echo'                      => true,
              'child_of'                  => null, // see Note!
            );
            wp_tag_cloud( $args );
          ?>
          <p><a href="<?php bloginfo('url'); ?>/tags">Показать все тэги <i class="fa fa-caret-down" aria-hidden="true"></i></a></p>
        </div><!-- tag-cloud -->
      </div><!-- col-md-12 -->
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
