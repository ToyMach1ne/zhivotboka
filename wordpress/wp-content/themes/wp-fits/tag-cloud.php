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
  </div><!-- tag-cloud -->
</div><!-- col-md-12 -->
