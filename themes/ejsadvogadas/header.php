<!doctype html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php $home = get_template_directory_uri(); ?>
  <link rel="stylesheet" type="text/css" href="<?= $home; ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?= $home; ?>/assets/css/lib/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $home; ?>/assets/slick/slick-theme.css">  
  <link rel="stylesheet" href="<?= $home; ?>/assets/slick/slick.css">  
  <link rel="stylesheet" href="<?= $home; ?>/assets/fonts/css/material-design-iconic-font.min.css">  
    <link rel="stylesheet" href="<?= $home; ?>/assets/css/style.css?time=<?php echo time(); ?>">
  <title>
    <?php the_title(); ?>
    <?if( !is_home() ) echo ' | '; ?> 
    <?php bloginfo ('name'); ?>
  </title>
    <?php wp_head(); ?>
</head>

<body>
<nav class="navbar <?php echo $topFix ? 'navbar-fixed-top' : '' ?> ">
    <div class="top-menu">
      <div class="container">
        <p>
          <span class="tel"><i class="zmdi zmdi-phone"></i> (21) 2210-5167</span>
          <span class="email"><i class="zmdi zmdi-email"></i> contato@ejsadvogadas.com.br</span>
          <span class="pipe">|</span>
          <a class="instagram" target="_blank" href="https://www.instagram.com/ejsadvogadas"><i class="zmdi zmdi-instagram"></i></a>
          <a class="facebook" target="_blank" href="https://m.facebook.com/EJS-Advogadas-2017292118595519/"><i class="zmdi zmdi-facebook"></i></a>
          <a class="youtube" target="_blank" href="https://www.youtube.com/channel/UC26jf0yb8VoOtm0DxRnYnnw?view_as=subscriber/"><i class="zmdi zmdi-youtube"></i></a>
        </p>
      </div>
    </div>
    <div class="container">
      <div class="navbar-header"> <?php $home = get_template_directory_uri(); ?>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo get_home_url() ?>">
          <img src="<?= $home; ?>/assets/img/logo.png" alt="Logo da EJS Advogadas">
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <?php echo wp_nav_menu( array('menu' => 'menu_principal', 'menu_class' => 'nav navbar-nav navbar-right' ) ) ?>
      </div>
    </div>
  </nav>