<?php

/**
 * Template Name: Кейс
 * Description: Кейс
 Template Post Type: keyses */


get_header();
?>


<?php
if (have_rows('konstruktor_stranicz')):

  while (have_rows('konstruktor_stranicz')) : the_row();

    if (get_row_layout() == 'hero_block'):
?>
      <section class="hero">
        <div class="container">
          <h1 class="heading"><?php tsf('h1_zagolovok') ?></h1>
          <ul class="list">
            <?php if (have_rows('dobavit_punkt_v_podzagolovok')): ?>
              <?php while (have_rows('dobavit_punkt_v_podzagolovok')): the_row(); ?>
                <li class="item">
                  <?php tsf('tekst') ?>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <p class="description"><?php tsf('podpis') ?></p>
        </div>
        <img src="<?php tsf('zadnij_fon_hero') ?>" alt="" class="bg">
        <?php if (have_rows('dobavit_dopolnitelnoe_izobrazhenie')): ?>
          <?php while (have_rows('dobavit_dopolnitelnoe_izobrazhenie')): the_row(); ?>
            <img src="<?php tsf('kartinka') ?>" alt="" class="dop-bg" style="transform: translate(<?php tsf('smeshhenie_h') ?>, <?php tsf('smeshhenie_y') ?>); width: <?php tsf('shirina') ?>">
          <?php endwhile; ?>
        <?php endif; ?>
      </section>

    <?php

    elseif (get_row_layout() == 'text_block'):
    ?>
      <section class="text-block">
        <div class="container">
          <div class="text-l">
            <h2 class="heading"><?php tsf('h2_zagolovok') ?></h2>
            <?php if (have_rows('dobavit_spisok')): ?>
              <?php while (have_rows('dobavit_spisok')): the_row(); ?>
                <div class="item">
                  <div class="item_heading"><?php tsf('zagolovok') ?></div>
                  <ul class="item_list">
                    <?php if (have_rows('dobavit_element_v_spisok')): ?>
                      <?php while (have_rows('dobavit_element_v_spisok')): the_row(); ?>
                        <li class="item_list_item"><?php tsf('tekst') ?></li>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <img src="<?php tsf('kartinka') ?>" alt="" class="text-r">
        </div>
      </section>

<?php

    endif;

  endwhile;

else :
endif;
?>

<section class="more-deal">
  <div class="container">
    <h2 class="heading">Наши услуги</h2>
    <div class="wrapper">

      <?php
      $current_id = get_the_ID();

      $args = [
        'post_type'      => 'deal',
        'posts_per_page' => 4,
        'post__not_in'   => [$current_id], // исключаем текущую услугу
        'orderby'        => 'rand',        // можно убрать, если не нужна случайность
      ];

      $deals_query = new WP_Query($args);

      if ($deals_query->have_posts()) :
        while ($deals_query->have_posts()) : $deals_query->the_post();
      ?>

          <div class="more-item">
            <div class="more-item_l">
              <div class="cube"></div>
              <p class="name"><?php the_title(); ?></p>
            </div>

            <p class="text">
              <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="link">
              подробности →
            </a>
          </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>
</section>
<section class="keyses">
  <div class="container">
    <img src="<?php tof('kartinka_v_blok_posmotret_kejsy') ?>" alt="" class="bg">
    <a href="https://tandemdesign.pro/kejsy/" class="text">Посмотреть кейсы</a>
  </div>
</section>




<?php
get_footer();
?>
