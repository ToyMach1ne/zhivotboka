<?php get_header(); ?>

  <div class="row row-category">
    <h1 class="col-md-12 cat-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

   <?php get_template_part('loop'); ?>

  </div><!-- row -->

  <?php get_template_part('pagination'); ?>

  <?php get_template_part('tag-cloud'); ?>

  <?php $terms = get_the_terms( get_the_ID(), 'category');
    if( !empty($terms) ) {
      $term = array_pop($terms);

      $title = get_field('title', $term );
      $description = get_field('description', $term );
  ?>
    <div class="content-block col-md-12">
      <h6 class="category-text"><?php echo $title; ?></h6>
      <?php echo $description; ?>
    </div><!-- content-block col-md-12 -->
  <?php } ?>

<?php get_footer(); ?>
