<?php

/**
 * Template Name: Главная 
 * Description: Главная
 */

get_header();
?>

<section class="h-scroll">
  <div class="h-scroll__sticky">
    <div class="h-scroll__content">

      <?php
      if (have_rows('konstruktor_blokov')):

        while (have_rows('konstruktor_blokov')) : the_row();

          if (get_row_layout() == 'no-link'):
      ?>
            <div class="item item-1">
              <p class="text"><?php tsf('tekst_snizu') ?></p>
              <img src="<?php tsf('osnovnoj_zadnij_fon') ?>" alt="" class="bg">
              <img src="<?php tsf('kartinka_na_perednem_fone') ?>" alt="" class="dop-img"
                style="transform: translate(-50%, -50%); top: 50%; left: 50%;">
            </div>

          <?php

          elseif (get_row_layout() == 'link'):
          ?>
            <a href="<?php tsf('ssylka') ?>" class="item <?php if (get_sub_field('tekst_sleva_ili_po_czentru') == 'left'): ?>left-text<?php endif; ?> <?php if (get_sub_field('tekst_sleva_ili_po_czentru') == 'center'): ?> center-text  <?php endif; ?>">
              <p class="text item-text" style="color: <?php tsf('czvet_zagolovka') ?>"><?php tsf('zagolovok') ?></p>
              <?php if (have_rows('dobavit_zadnij_fon')): ?>
                <?php while (have_rows('dobavit_zadnij_fon')): the_row(); ?>
                  <?php if (get_sub_field('tip_fona') == 'img'): ?>
                    <img src="<?php tsf('kartinka') ?>" alt="" class="bg">
                  <?php endif; ?>
                  <?php if (get_sub_field('tip_fona') == 'video'): ?>
                    <video src="<?php tsf('video') ?>" muted autoplay loop class="bg"></video>
                  <?php endif; ?>

                <?php endwhile; ?>
              <?php endif; ?>
              <?php if (have_rows('dobavit_dopolnitelnoe_izobrazhenie')): ?>
                <?php while (have_rows('dobavit_dopolnitelnoe_izobrazhenie')): the_row(); ?>
                  <img src="<?php tsf('kartinka') ?>" alt="" class="dop-img" style="transform: translate(<?php tsf('smeshhenie_h') ?>, <?php tsf('smeshhenie_y') ?>);">
                <?php endwhile; ?>
              <?php endif; ?>
            </a>

      <?php

          endif;

        endwhile;

      else :
      endif;
      ?>
    </div>
  </div>
</section>


<?php get_footer() ?>
