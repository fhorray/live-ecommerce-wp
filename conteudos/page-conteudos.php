<?php 
// Template name: Conteudos
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

  <section class="resources">
    <div class="container">


    <?php if( have_rows('lista') ): ?>
      <?php while( have_rows('lista') ): the_row(); ?>  

        <?php if( have_rows('items') ): ?>
          <?php while( have_rows('items') ): the_row(); ?>  

            <div class="resource-item <?php echo get_sub_field('reverse') ? 'reverse' : ''; ?>">

              <img class="resource-item-image" src="<?php the_sub_field('recurso_item_image'); ?>" alt="Image 1">

              <div class="text">
                <h3><?php the_sub_field('recurso_item_titulo'); ?></h3>
                <p><?php the_sub_field('recurso_item_descricao'); ?></p>

                <ul>
                  <?php if( have_rows('recurso_item_benefits_list') ): ?>
                    <?php while( have_rows('recurso_item_benefits_list') ): the_row(); ?>
                      <li>
                        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
                        <span><?php the_sub_field('recurso_item_benefits_list_text'); ?></span>
                      </li>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul>
              </div>

            </div>
  
          <?php endwhile; ?>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>

      </div>

    </div>
  </section>

  <?php endwhile; else: endif; ?> 

<?php get_footer( )?>