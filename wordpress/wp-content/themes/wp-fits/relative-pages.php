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
