<?php
  $args=array(
    'theme_location' => 'topBar',
    'menu' => 'topBar_fr',
    'menu_class' => 'list header_social',
  );

  $arg=array(
    'theme_location' => 'header',
    'menu' => 'header_fr',
    'menu_class' => 'nav navbar-nav menu_nav',
    'menu_id' => 'menu_id',
    'container_class' => 'collapse navbar-collapse offset',
    'container_id' => 'navbarSupportedContent',
  );
?>
<!DOCTYPE html>
<html <?= language_attributes() ?>>

<head>
  <meta charset="<?= bloginfo( 'charset' ) ?>" />
  <link rel="stylesheet" href="<?= bloginfo('stylesheet_url') ?>">
  <?= wp_head() ?>
  <title><?= bloginfo('title') ?><?= wp_title($sep = '-') ?></title>
</head>

<body <?= body_class(); ?>>
  <header class="header_area">

    <div class="logo_part">
      <div class="container">
        <div class="float-left">
          <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <div class="container_inner">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?= wp_nav_menu($arg) ?>
          </div>
        </div>
      </nav>
    </div>
  </header>