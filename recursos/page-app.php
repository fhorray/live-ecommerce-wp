<?php 
// Template name: Live Mobile App
?>
<?php get_header( )?>

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

  <section class="mobile-app">
    <div class="text">
      <h2><?php the_field('phone_titulo') ?></h2>
      <p><?php the_field('phone_descricao') ?></p>
    </div>
    <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/mobile-phone.png" alt="Phone Mobile">

    <ul>
    <?php if( have_rows('lista_de_beneficios') ): ?>
      <?php while( have_rows('lista_de_beneficios') ): the_row(); ?>  
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
          <span><?php the_sub_field('lista_de_beneficios_texto') ?></span>
        </li>
      <?php endwhile; ?>
    <?php endif; ?>
    </ul>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer( )?>