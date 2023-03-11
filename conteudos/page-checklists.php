<?php 
// Template name: Checklists
?>
<?php get_header( )?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1><span>Checklists</span> gratuitos da <br>Live eCommerce!</h1>
        <p>Plataforma de E-commerce com recursos nativos que possibilitam liberdade e criatividade para sua operação de e-commerce.</p>

        <div class="cta-area">
          <a class="btn btn-secondary" href="#">Solicitar Demonstração</a>
          <a href="#" class="cta-area-question">Lorem ipsum amet sit dolor?</a>
        </div>
      </div>

      <img class="hero-image" src="<?php echo get_template_directory_uri(  ) ?>/img/hero-image-3.png" alt="Hero Image">

    </div>
  </section>

  <section class="conteudos">
    <div class="container">


      <div class="conteudo-item">
        <img class="conteudo-item-image" src="<?php echo get_template_directory_uri(  ) ?>/img/conteudos/image-1.png" alt="Image 1">

        <div class="text">
          <h3>Vendas de Final de Ano: <br>seu e-commerce está preparado?</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>

          <a class="btn btn-secondary" href="#">Baixe aqui</a>

        </div>

      </div>

      <div class="conteudo-item reverse">
        <img class="conteudo-item-image" src="<?php echo get_template_directory_uri(  ) ?>/img/conteudos/image-1.png" alt="Image 1">

        <div class="text">
          <h3>Vendas de Final de Ano: <br>seu e-commerce está preparado?</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>

          <a class="btn btn-secondary" href="#">Baixe aqui</a>

        </div>

      </div>

      <div class="conteudo-item">
        <img class="conteudo-item-image" src="<?php echo get_template_directory_uri(  ) ?>/img/conteudos/image-1.png" alt="Image 1">

        <div class="text">
          <h3>Vendas de Final de Ano: <br>seu e-commerce está preparado?</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>

          <a class="btn btn-secondary" href="#">Baixe aqui</a>

        </div>

      </div>

      <div class="conteudo-item reverse">
        <img class="conteudo-item-image" src="<?php echo get_template_directory_uri(  ) ?>/img/conteudos/image-1.png" alt="Image 1">

        <div class="text">
          <h3>Vendas de Final de Ano: <br>seu e-commerce está preparado?</h3>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>

          <a class="btn btn-secondary" href="#">Baixe aqui</a>

        </div>

      </div>


    </div>
  </section>

  <?php endwhile; else: endif; ?>

<?php get_footer( )?>