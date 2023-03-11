<section class="testimonials">
    <div class="container">
      <span>Depoimentos</span>
      <h2>O que nossos clientes acham?</h2>

      <?php if( have_rows('depoimentos', 'options') ): ?>
        <ul>
          <?php while ( have_rows('depoimentos', 'options') ) : the_row(); ?>
        <li>
          <div class="customer-container">
            <div class="profile">
              <img src="<?php the_sub_field('testimonial_image', 'options') ?>" alt="Imagem Testemunha">
              <div class="name-and-store">
                <h5><?php the_sub_field('testimonial_name', 'options') ?></h5>
                <span><?php the_sub_field('testimonial_store', 'options') ?></span>
              </div>
            </div>
            <img class="rating-stars-i" src="<?php echo get_template_directory_uri(  ) ?>/img/home/testmonials/ratings.svg" alt="Customer Rating">
            <p><?php the_sub_field('testimonial_depoimento', 'options') ?></p>
          </div>
        </li>

        <?php endwhile; ?>
          </ul>
      <?php endif; ?>


    </div>
</section>

  <footer>
    <div class="container">
      <div class="menus">

        <?php if( have_rows('footer_menu', 'options') ): ?>
          <?php while( have_rows('footer_menu', 'options') ): the_row(); ?> 
            <div class="menus-item">

              <h3><?php the_sub_field('footer_menu_titulo', 'options') ?></h3>
              <ul>
              <?php if( have_rows('footer_menu_links_list', 'options') ): ?>
                <?php while( have_rows('footer_menu_links_list', 'options') ): the_row(); ?> 
                  <li><a href="<?php the_sub_field('footer_menu_links_list_link', 'options') ?>"><?php the_sub_field('footer_menu_links_list_texto', 'options') ?></a></li>
                <?php endwhile; ?>
              <?php endif; ?>
              </ul>

            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('redes_sociais', 'options') ): ?>
          <?php while( have_rows('redes_sociais', 'options') ): the_row(); ?> 
            <div class="menus-item social">
              <h3><?php the_sub_field('social_titulo', 'options') ?></h3>
              <p><?php the_sub_field('social_segundo_titulo', 'options') ?></p>
              <ul>
                <?php if( have_rows('social_icone', 'options') ): ?>
                  <?php while( have_rows('social_icone', 'options') ): the_row(); ?> 
                    <li><a href="<?php the_sub_field('social_icone_link') ?>"><img src="<?php the_sub_field('social_icone_image') ?>" alt="Social Icon"></a></li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

        <div class="copy">
          <p>&copy; <span>Live eCommerce</span> 2023 - Todos os direitor reservados.</p>
        </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="<?php echo get_template_directory_uri(  ) ?>/js/menu.js"></script>

  <?php wp_footer(); ?>
</body>

</html>