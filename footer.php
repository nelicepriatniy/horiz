<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tandemdesign
 */

?>
<div class="menu menu-popup footer">
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

<script src="<?php get_url() ?>/js/swiper-bundle.min.js"></script>
<script src="<?php get_url() ?>/js/app.js"></script>
</body>


</html>
