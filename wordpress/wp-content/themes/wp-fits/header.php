<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="row">

        <div class="col-md-3 header--logo">
          <h1><a href="<?php echo home_url(); ?>">ZHIVOTBOKA <span>медицинский портал о похудении</span></a></h1>
        </div>

        <div class="col-md-5 header--search">
          <form action="<?php bloginfo('url'); ?>/" method="post" class="header--search-form">
            <input type="search" name="s" placeholder="Поиск по сайту" class="header--search-input" />
            <button class="header--search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form><!-- header--search-form -->
        </div>

        <div class="col-md-4 header--advice">
          <h5>Нужен дельный совет?</h5>
          <p class="header--advice-name">Андрей Мищенко</p>
          <p class="header--advice-descr">профессиональный тренер по фитнесу</p>
        </div>

      </div><!-- row -->
      </div><!-- container -->
  </header>
    <section class="main-category-blocks">
      <div class="container">
        <div class="row">

        <?php get_sidebar(); ?>

            <!-- END OF SIDEBAR -->
          <div class="col-md-9 maincont">
            <div class="nav-container">
              <nav class="navigation">
                <?php wpeHeadNav(); ?>
              </nav>
            </div><!-- /.nav-container -->

