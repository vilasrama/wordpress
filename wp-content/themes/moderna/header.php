<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php the_title()?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">


  
</head>


<?php wp_head() ?>

<body <?php body_class('main_body');?>>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
	  <?php if(!function_exists('moderna-setup'))
	  {
		  the_custom_logo();
	  }
		  ?>
        <!--<h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
	  <?php
	  wp_nav_menu(
	  array(
	  'theme_location'=> 'primary',
	  'container'=> false,
	  //'items_wrap'  => '<ul>%3$s</ul>',
	  )
	  );
?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
