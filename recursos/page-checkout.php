<?php 
// Template name: Live Smart Checkout
?>
<?php get_header( )?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1><span>Checkout Express!</span><br></h1>
        <p>Formato mais avançado de checkout (fechamento) do mercado. Na mesma página e em pouquíssimos passos, seu cliente se cadastra, fecha a compra e faz o pagamento.</p>

        <div class="cta-area">
          <a class="btn btn-secondary" href="#">Solicitar Demonstração</a>
          <a href="#" class="cta-area-question">Saiba Mais</a>
        </div>
      </div>

      <img class="hero-image" src="<?php echo get_template_directory_uri(  ) ?>/img/hero-image-3.png" alt="Hero Image">

    </div>
  </section>

  <section class="resources">
    <div class="container">


      <div class="resource-item">
        <img class="resource-item-image" src="<?php echo get_template_directory_uri(  ) ?>/img/resources/image-01.png" alt="Image 1">

        <div class="text">
          <h3>Live Voice</h3>
          <p>O Live Voice otimiza sua loja virtual para pesquisa por voz, coletando e apresentando os produtos com muito mais velocidade e praticidade.</p>

          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>Full Banner</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>Banner Mobile</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>Cores da Loja</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>Editor HTML-CSS</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>Paginas Extras</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  ) ?>/img/plataforma-de-ecommerce/pos-hero/check-i.svg" alt="Check Icon">
              <span>SELOS</span>
            </li>
          </ul>
        </div>

      </div>


      <div class="benefits">
        <h2>Porque usar busca por voz na sua loja?</h2>

        <div class="benefits-list">
          <div class="item">
            <h5>Nova experiência de compra</h5>
            <p>Live Voice vai mudar a forma de os clientes buscarem por produtos e de realizarem suas compras, simplificando o processo e tornando-o mais prático.</p>
          </div>
          <div class="item">
            <h5>Recorrencia</h5>
            <p>Por facilitar o processo de compra, isso faz com que o cliente observe maior vantagem durante sua jornada de compra e, por isso, é mais fácil que seja fidelizado.</p>
          </div>
          <div class="item">
            <h5>Tempo</h5>
            <p>Os novos hábitos dos consumidores apontam que tempo é muito relevante para eles. Logo, é um grande benefício poder comprar algo por voz enquanto estão realizando outras tarefas.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer( )?>