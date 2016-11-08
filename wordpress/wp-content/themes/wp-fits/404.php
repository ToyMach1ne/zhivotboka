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
<body class="error-body">

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="erroe-page">
          <div class="col-md-3 header--logo">
            <h1><a href="<?php echo home_url(); ?>">ZHIVOTBOKA <span>медицинский портал о похудении</span></a></h1>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h2 class="error-title">404</h2>
      </div>
      <div class="col-md-12">
        <p>К сожалению запрошенная страница не найдена на этом сервере.</p>
        <p>Возможно, была допущена ошибка в адресе или эта страница удалена.</p>
      </div>
      <div class="col-md-12 timer">
        <p>Через <span class="time">00:00:0<span>9</span></span> секунд</p>
        <p>Вы автоматически перейдете на <a href="<?php echo home_url(); ?>"><span class="return">Главную страницу</span></a> </p>
      </div>
    </div>

<?php get_footer(); ?>
