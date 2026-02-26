<?php

/**
 * Template Name: Кейсы
 * Description: Кейсы
 */


get_header();
?>

<main>
  <section class="hero">
    <div class="container">
      <h1 class="heading"><?php tf('h1_zagolovok') ?></h1>
      <ul class="list">
        <li class="item">
          <?php tf('podzagolovok') ?>
        </li>
      </ul>
      <p class="description"><?php tf('podpis') ?></p>
    </div>
    <img src="<?php tf('zadnij_fon')  ?>" alt="" class="bg">
  </section>
  <section class="more-deal">
    <div class="container">
      <div class="wrapper">

        <?php
        $args = [
          'post_type'      => 'keyses',
          'posts_per_page' => 4,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ];

        $cases_query = new WP_Query($args);

        if ($cases_query->have_posts()) :
          while ($cases_query->have_posts()) : $cases_query->the_post();
        ?>

            <div class="more-item">
              <div class="more-item_l">
                <div class="cube"></div>
                <p class="name"><?php the_title(); ?></p>
              </div>

              <p class="text">
                <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
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
  <section class="keyses deal">
    <div class="container">
      <img src="<?php tof('kartinka_v_blok_nashi_uslugi') ?>" alt="" class="bg">
      <a href="https://tandemdesign.pro/uslugi/" class="text">Наши услуги</a>
    </div>
  </section>




</main>
<?php
get_footer();
?>
