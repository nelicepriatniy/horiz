<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tandemdesign
 */

function tsf($name)
{
  the_sub_field($name);
}

function tf($name)
{
  the_field($name);
}

function tof($name)
{
  the_field($name, 'option');
}


function get_url()
{
  echo esc_url(get_template_directory_uri());
}


?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php tf('zagolovok') ?></title>
  <meta name="description" content="<?php tf('opisanie') ?>">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style/style.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style/swiper-bundle.min.css">
</head>

<body>

  <header>
    <div class="container">
      <img src="<?php tof('logo') ?>" alt="" class="logo">
      <p class="text"><?php tof('header-text') ?></p>
      <div class="header-menu open-menu">
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <div class="menu menu-popup">
    <video src="<?php tof('header-video') ?>" muted autoplay loop class="bg"></video>
    <div class="container">
      <?php if (have_rows('dobavit_blok_menyu', 'options')): ?>
        <?php while (have_rows('dobavit_blok_menyu', 'options')): the_row(); ?>
          <ul class="menu-list">
            <?php if (have_rows('dobavit_punkt_menyu', 'options')): ?>
              <?php while (have_rows('dobavit_punkt_menyu', 'options')): the_row(); ?>
                <a href="<?php tsf('ssylka') ?>" class="menu-list-item"><?php tsf('tekst') ?></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
