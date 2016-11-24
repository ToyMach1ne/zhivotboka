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


        <div id="randompostwidget-4">
        <div class="container similar-posts">
          <div class="row">
            <span class="similar-title">Похожие статьи</span>
            <?php
  $categories = get_the_category($post->ID);
  if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args=array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'showposts' => '6',
      'orderby' => 'rand',
      'ignore_sticky_posts' => '1');
    $my_query = new wp_query($args);
    if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) {
        $my_query->the_post();
        ?>
            <div class="col-md-2 last-news">
                <a href="<?php the_permalink() ?>">
                    <span class="category-block-img">
                  <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('little');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
                  </span>
                  <p><?php the_title(); ?></p>
                </a>
            </div><!-- last-news -->
            <?php
      }
    }
    wp_reset_query();
  }
  ?>
          </div>
        </div>
      </div>


        <?php comments_template(); ?>
      </article>
    <?php endwhile; else: ?>
      <article>
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>

  </div><!-- row-article -->

<?php get_footer(); ?>
