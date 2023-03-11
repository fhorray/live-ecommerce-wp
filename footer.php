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
        <div class="menus-item">
          <h3>Lorem Ipsum</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ul>
        </div>
        <div class="menus-item">
          <h3>Lorem Ipsum</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ul>
        </div>
        <div class="menus-item">
          <h3>Lorem Ipsum</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ul>
        </div>
        <div class="menus-item social">
          <h3>Redes Sociais</h3>
          <p>Fique conectado com a gente:</p>
          <ul>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(  ) ?>/img/home/footer/facebook-i.svg" alt="Facebook icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(  ) ?>/img/home/footer/instagram-i.svg" alt="Instagram icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(  ) ?>/img/home/footer/linkedin-i.svg" alt="Linkedin icon"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(  ) ?>/img/home/footer/twitter-i.svg" alt="Twitter icon"></a></li>
          </ul>
        </div>
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