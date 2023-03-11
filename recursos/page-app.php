<?php 
// Template name: Live Mobile App
?>
<?php get_header( )?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1>Aplicativos <span>iOS</span> e <span>Android</span> da sua loja Virtual<br></h1>
        <p>Mais visibilidade e engajamento e conversão.</p>

        <div class="cta-area">
          <a class="btn btn-secondary" href="#">Solicitar Demonstração</a>
          <a href="#" class="cta-area-question">Saiba Mais</a>
        </div>
      </div>

      <img class="hero-image" src="<?php echo get_template_directory_uri(  ) ?>/img/hero-image-1.png" alt="Hero Image">

    </div>
  </section>

  <section class="mobile-app">
    <div class="text">
      <h2>Live Mobile App</h2>
      <p>A ideia do aplicativo é ajudar no fortalecimento da marca e deixar mas fácil o acesso a loja.<br><br> No aplicativo o cliente conseguirá acompanha os status do pedidos e baixar matérias exclusivas. O aplicativo fica disponível a Google Play e Apple Store.</p>
    </div>
    <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/mobile-phone.png" alt="Phone Mobile">

    <ul>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>GESTÃO INTEGRADO</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>LIGUE COM UM CLIQUE</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>NOTIFICAÇÃO INSTANTÂNEA</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>LOCALIZAÇÃO POR GPS</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>PAGAMENTO ONLINE</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
        <span>SISTEMA DE CHAT</span>
      </li>
    </ul>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer( )?>