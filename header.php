<!doctype html>
<html lang="ru">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/wp-content/themes/poems_one/app/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/poems_one/app/bootstrap/js/bootstrap.bundle.min.js"> --> 
    
    <title>Поэзия</title>
    <!-- Подключаем style.css из functions.php -->
    <?php wp_head();?> 
  </head>
  <body <?php body_class(); ?>>
    <img class = "bell_top_right" src = "/wp-content/themes/poems_one/app/img/vinyetki/vinyetka.png" width = 100>
    <img class = "bell_top_left" src = "/wp-content/themes/poems_one/app/img/vinyetki/vinyetka_left.png" width = 100>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      
    <?php
    wp_nav_menu( array(
        'theme_location' => 'header_menu1',
        //'menu' => 'Меню в футере',
        //'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'menu_class' => 'navbar-nav mr-auto',
        'container_id' => 'navbarSupportedContent',
    ) );
    ?>
</nav>

<div class="wrapper">
