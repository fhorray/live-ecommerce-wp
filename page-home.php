<?php 
// Template name: Home
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

  <section class="cases">
    <div class="container">
      <h2><?php the_field('titulo_cases') ?></h2>
      <?php if( have_rows('nossos_cases') ): ?>
          <ul class="stores">
              <?php while( have_rows('nossos_cases') ): the_row(); ?>  
                <li>
                  <a href="<?php the_sub_field('link_da_empresa') ?>" target="_blank">
                     <img src="<?php the_sub_field('imagem_da_empresa') ?>" alt="Logo Ruby Rose">
                  </a>
                </li>
              <?php endwhile; ?>
          </ul> 
      <?php endif; ?>

      <?php if( have_rows('cards_benefits') ): ?>
        <ul class="cards">
          <?php while( have_rows('cards_benefits') ): the_row(); ?>  
            <li>
              <div class="cards-item">
                <img src="<?php the_sub_field('icone_do_card') ?>">
                <h4><?php the_sub_field('titulo_do_card') ?></h4>
                <p><?php the_sub_field('descricao_do_card') ?></p>
              </div>
            </li>
            <?php endwhile; ?>
        </ul>
      <?php endif; ?>

    </div>
  </section>

  <section class="our-platform">
    <div class="container">

      <!-- GRUPO DE IMAGENS-->
      <?php include(TEMPLATEPATH .'/includes/image-group.php' ); ?>

      <div class="text">

      <?php if( have_rows('area_do_titulo') ): ?>
        <?php while ( have_rows('area_do_titulo') ) : the_row(); ?>

          <span><?php the_sub_field('nossa_plataforma_titulo') ?></span>
          <h2><?php the_sub_field('nossa_plataforma_segundo_titulo') ?></h2>

        <?php endwhile; ?>
      <?php endif; ?>  


      <?php if( have_rows('nossos_numeros') ): ?>
        <ul>
          <?php while ( have_rows('nossos_numeros') ) : the_row(); ?>
            <li>
              <span><?php the_sub_field('numero') ?></span>
              <p><?php the_sub_field('numero_descricao') ?></p>
            </li>
          <?php endwhile; ?>
          </ul>
      <?php endif; ?>

        <p><?php the_field('nossa_plataforma_descricao') ?> </p>
      </div>
    </div>
  </section>

  <section class="categories">
    <div class="container">

      <h2><?php the_field('categorias_titulo') ?></h2>

      <?php if( have_rows('categorias_item') ): ?>
        <div class="categorie-container">
            <?php while ( have_rows('categorias_item') ) : the_row(); ?>

            <div class="categorie-container-item">
              <img src="<?php the_sub_field('categoria_icone') ?>" alt="Icone">
              <h4><?php the_sub_field('categoria_titulo') ?></h4>
              <p><?php the_sub_field('categoria_descricao') ?></p>
            </div>
            
            <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <section class="video-section">
    <div class="container">
      <div class="text-area">
        <h4><?php the_field('secao_video_titulo') ?></h4>
        <h2><?php the_field('secao_video_segundo_titulo') ?></h2>
        <p><?php the_field('secao_video_descricao') ?></p>

        <!-- BOTÃO CTA E LINK -->
        <?php include( 'includes/cta-area.php' ); ?>
      </div>

      <div class="video-area">
        <img class="dots-background" src="<?php echo get_template_directory_uri(  ) ?>/img/home/video-section/dots-bg.svg" alt="Dots background">
        <img class="play-icon" src="<?php echo get_template_directory_uri(  ) ?>/img/home/video-section/play-i.svg" alt="Dots background">
        <img class="video-cover" src="<?php the_field('secao_video_cover') ?>" alt="Image One">
      </div>
    </div>
  </section>

  <section class="newsletter">
    <div class="container">
      <span><?php the_field('newsletter_titulo') ?></span>
      <h2><?php the_field('newsletter_segundo_titulo') ?></h2>
      <p><?php the_field('newsletter_descricao') ?></p>

      <form class="input-area" action="#">
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail...">
        <button class="btn-secondary" type="submit">Enviar</button>
      </form>

    </div>
  </section>

<?php endwhile; else: endif; ?>  

<?php get_footer(); ?>