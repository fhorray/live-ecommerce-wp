<?php 
// Template name: Plataforma de Ecommerce
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1><?php the_field('titulo') ?></h1>
        <p><?php the_field('descricao') ?></p>

        <!-- BOTÃO CTA E LINK -->
        <?php include( TEMPLATEPATH .'/includes/cta-area.php'); ?>

      </div>

      <img class="hero-image" src="<?php the_field('imagem_hero') ?>" alt="Hero Image">

    </div>
  </section>

  <section class="pos-hero">
    <div class="container">
      <img class="mobile-apps-image" src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/apps-mobile.png" alt="Aplicativos">
      <div class="text">
        <h2><?php the_field('pos_hero_titulo') ?></h2>
        <p><?php the_field('pos_hero_descricao') ?>
        </p>

        <?php if( have_rows('pos_hero_list') ): ?>
          <ul>
            <?php while( have_rows('pos_hero_list') ): the_row(); ?>  
                <li>
                  <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
                  <p><?php the_sub_field('texto_list') ?></p>
                </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="integrations">
    <div class="container">
      <h2><?php the_field('integracoes_titulo') ?></h2>

        <?php if( have_rows('integracoes_lists') ): ?>
          <div class="sides">
          <?php while( have_rows('integracoes_lists') ): the_row(); ?>

              <div class="left">
              <?php if( have_rows('integracoes_list_left') ): ?>
                <ul>
                  <?php while( have_rows('integracoes_list_left') ): the_row(); ?>
                    <li>
                      <img src="<?php the_sub_field('integracoes_list_left_image') ?>" alt="Icone">
                      <div class="text">
                        <h3><?php the_sub_field('integracoes_list_left_titulo') ?></h3>
                        <p><?php the_sub_field('integracoes_list_left_text') ?></p>
                      </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?> 
              </div>

              <div class="right">
              <?php if( have_rows('integracoes_list_right') ): ?>
                <ul>
                  <?php while( have_rows('integracoes_list_right') ): the_row(); ?>
                    <li>
                      <img src="<?php the_sub_field('integracoes_list_right_image') ?>" alt="Icone">
                      <div class="text">
                        <h3><?php the_sub_field('integracoes_list_right_titulo') ?></h3>
                        <p><?php the_sub_field('integracoes_list_right_text') ?></p>
                      </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?> 
              </div>

          <?php endwhile; ?>
        </div>
        <?php endif; ?> 
    </div>
  </section>

  <section class="roi-section">
    <div class="container">
      <h2><?php the_field('roi_titulo') ?></h2>
      <div class="content">
        <p><?php the_field('roi_descricao') ?></p>
        <img class="rocket-image" src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/roi-section/rocket.png" alt="Rocket Image">
        <img class="shape-two" src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/roi-section/shape2.png" alt="Shape 2">
      </div>

    </div>
  </section>

  <section class="ecommerce-conversion">
    <div class="container">
      <div class="text">
        <h2><?php the_field('ecommerce_conversion_titulo') ?></span></h2><br>
        <p><?php the_field('ecommerce_conversion_descricao') ?></p>
        <h2><?php the_field('ecommerce_conversion_segundo_titulo') ?></h2><br>
        <p><?php the_field('ecommerce_conversion_segunda_descricao') ?></p>

        <?php if( have_rows('ecommerce_conversion_list') ): ?>
          <ul>
            <?php while( have_rows('ecommerce_conversion_list') ): the_row(); ?>  
                <li>
                  <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
                  <p><?php the_sub_field('ecommerce_conversion_texto_list') ?></p>
                </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

      <!-- GRUPO DE IMAGENS-->
      <?php include(TEMPLATEPATH .'/includes/image-group.php' ); ?>
    </div>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>