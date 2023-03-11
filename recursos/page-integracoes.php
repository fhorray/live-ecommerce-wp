<?php 
// Template name: Live Integracoes
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

  <section class="payments">
    <div class="container">
      <h2><?php the_field('pagamentos_titulo') ?></h2>
      <p><?php the_field('pagamentos_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('pagementos_lista_logos') ): ?>
        <?php while ( have_rows('pagementos_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('pagementos_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </section>

  
  <section class="antifraude">
    <div class="container">
      <h2><?php the_field('antifraude_titulo') ?></h2>
      <p><?php the_field('antifraude_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('antifraude_lista_logos') ): ?>
        <?php while ( have_rows('antifraude_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('antifraude_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </section>

  <section class="erp">
    <div class="container">
        <h2><?php the_field('erp_titulo') ?></h2>
        <p><?php the_field('erp_descricao') ?></p>

        <div class="logos">
        <?php if( have_rows('erp_lista_logos') ): ?>
          <?php while ( have_rows('erp_lista_logos') ) : the_row(); ?>
          <img src="<?php echo the_sub_field('erp_logo') ?>" alt="Logo">
          <?php endwhile; ?>
        <?php endif; ?> 
        </div>
      </div>
  </section>

  <section class="atendimento">
    <div class="container">
      <h2><?php the_field('atendimento_titulo') ?></h2>
      <p><?php the_field('atendimento_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('atendimento_lista_logos') ): ?>
        <?php while ( have_rows('atendimento_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('atendimento_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </section>

  <section class="logistica-entrega">
    <div class="container">
      <h2><?php the_field('logistica_titulo') ?></h2>
      <p><?php the_field('logistica_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('logistica_lista_logos') ): ?>
        <?php while ( have_rows('logistica_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('logistica_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
    </div>
  </section>

  <section class="emails">
    <div class="container">
      <h2><?php the_field('emails_titulo') ?></h2>
      <p><?php the_field('emails_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('emails_lista_logos') ): ?>
        <?php while ( have_rows('emails_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('emails_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="container">
      <h2><?php the_field('reviews_titulo') ?></h2>
      <p><?php the_field('reviews_descricao') ?></p>

      <div class="logos">
      <?php if( have_rows('reviews_lista_logos') ): ?>
        <?php while ( have_rows('reviews_lista_logos') ) : the_row(); ?>
         <img src="<?php echo the_sub_field('reviews_logo') ?>" alt="Logo">
        <?php endwhile; ?>
      <?php endif; ?> 
      </div>
    </div>
  </section>


<?php endwhile; else: endif; ?>

<?php get_footer( )?>