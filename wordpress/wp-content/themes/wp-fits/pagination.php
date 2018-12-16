<div class="col-md-12 pagination-block">
  <?php
    $cat = get_the_category(); $cat = $cat[0];
    $current_page = max( 1, get_query_var('paged') );
    $posts_per_page = max( 1, get_query_var('posts_per_page') );
    $total_pages = $wp_query->max_num_pages;
    $last_post = $current_page * $posts_per_page;
    $first_post = $last_post - $posts_per_page + 1;
    $max_post = $cat->category_count;
    if ( $last_post > $max_post ) {
      $last_post = $max_post;
    }
  ?>
  <div class="pagination-count">
    <p>Показано <?php echo $first_post; ?> - <?php echo $last_post; ?> из <?php echo $cat->category_count; ?> статей</p>
  </div><!-- /.pagination-count -->
  <div class="pagination-buttons">
    <?php html5wp_pagination(); ?>
  </div>
</div><!-- col-md-12 pagination-block -->
