<?php 
// Template name: Parcerias
?>
<?php get_header( )?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1><span>Parcerias</span> Lorem ipsum dolor sit amet dor.</h1>
        <p>Plataforma de E-commerce com recursos nativos que possibilitam liberdade e criatividade para sua operação de e-commerce.</p>

        <!-- BOTÃO CTA E LINK -->
        <?php include( 'includes/cta-area.php' ); ?>
      </div>

      <img class="hero-image" src="<?php echo get_template_directory_uri(  ) ?>./img/hero-image-3.png" alt="Hero Image">

    </div>
  </section>

  <section class="parceiros">
    <div class="container">
      <div class="agencias-certificadas">
        <h2>Agências Certificadas</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(  ) ?>./img/parcerias/dreamy.png" alt="Dreamy Logo">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(  ) ?>./img/parcerias/f.up.png" alt="F. Up Logo">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(  ) ?>./img/parcerias/ziriga.png" alt="Ziriga Logo">
          </li>
        </ul>

      </div>
      <div class="agencias-certificadas">
        <h2>Consultorias Certificadas</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(  ) ?>./img/parcerias/painel1.png" alt="painel 1 Logo">
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(  ) ?>./img/parcerias/dr.ecommerce.png" alt="Dr. Ecommerce Logo">
          </li>
        </ul>

      </div>
    </div>
  </section>

  <section class="programa-parceria">
    <div class="container">
      <h2>Programa <span>Parceria</span> Live eCommerce</h2>
      <p>O nosso programa de parceria Live eCommerce capacita você com os melhores recursos,que uma plataforma de e-commerce pode oferecer. Capacitamos com treinamentos, certificados e suporte exclusivo com nosso time de Devs.</p>

      <div class="benefits-list">
        <div class="item">
          <h5>Parceiros de Agências e Implantação</h5>
          <p>Live Voice vai mudar a forma de os clientes buscarem por produtos e de realizarem suas compras, simplificando o processo e tornando-o mais prático.</p>
        </div>
        <div class="item">
          <h5>Parceiros de Crescimento</h5>
          <p>Os novos hábitos dos consumidores apontam que tempo é muito relevante para eles. Logo, é um grande benefício poder comprar algo por voz enquanto estão realizando outras tarefas.</p>
        </div>

      </div>

    </div>
  </section>

  <section class="parceria-benefits">
    <div class="container">
      <h2>Benefícios</h2>
      <p>Beneficie-se de uma parceria estratégica prática com a Live eCommerce. Junte-se aos parceiros que estão construindo negócios e entregando resultados de alto nível a seus clientes.</p>

      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(  ) ?>./img/plataforma-de-ecommerce/integrations/data-i.svg" alt="Icone">
          <div class="text">
            <h3>Full banner</h3>
            <p>A Live eCommerce tem um poderoso editor de códigos Live Editor. Muita facilidade para implantação e customização em nossa plataforma.</p>
          </div>
        </li>
      </ul>

    </div>
  </section>

  <section class="form-area">
    <div class="container">
      <div class="text">
        <h2>Passo a Passo</h2>

        <ul>
          <li>
            <h3>1. Inscreva-se</h3>
            <p>Preencha nosso formulário de inscrição para que nossa equipe de parcerias possa entrar em contato.</p>
          </li>
          <li>
            <h3>2. Obtenha a certificação da Live eCommerce
            </h3>
            <p>A Live eCommerce vai agendar os treinamentos para certificação. Treinamento Comercial, Treinamento da Plataforma e Treinamento de Editor.
            </p>
          </li>
          <li>
            <h3>3. Desenvolva na Live eCommerce</h3>
            <p>Esteja você criando um aplicativo, tema, integração, vitrine ou qualquer coisa entre eles, você obterá todos os recursos de que precisa para começar, desde a integração dedicada até a documentação detalhada.</p>
          </li>
          <li>
            <h3>4. Faça seu negócio crescer</h3>
            <p>Viabilize seu negócio com os clientes da Live eCommerce ao apresentar suas oportunidades conosco.</p>
          </li>
          <li>
            <h3>5. Receba suporte contínuo</h3>
            <p>Gerentes de contas dedicados e novos recursos acompanham você em cada etapa do processo, conforme você cresce.</p>
          </li>
        </ul>
      </div>

      <form action="send">
        <div class="input-area">
          <label for="nome">Seu nome (obrigatório)</label>
          <input type="text" name="Nome" id="nome" required>
        </div>
        <div class="input-area">
          <label for="email">Seu E-mail (obrigatório)</label>
          <input type="text" name="email" id="email" required>
        </div>
        <div class="input-area checkboxes">
          <label for="person-type">Informe se você é:</label>
          <div class="checkboxes-inputs">
            <input type="radio" name="you-are" id="you-are"><span>Agência de marketing</span>
            <input type="radio" name="you-are" id="you-are"><span>Agência de Implatanção</span>
            <input type="radio" name="you-are" id="you-are"><span>Consultor de e-commerce</span>
          </div>
        </div>
        <div class="input-area">
          <label for="site">Site</label>
          <input type="text" name="site" id="site">
        </div>
        <div class="input-area">
          <label for="telefone">Telefone:</label>
          <input type="number" name="telefone" id="telefone">
        </div>
        <button class="btn btn-secondary" type="submit">Enviar</button>
      </form>
    </div>
  </section>

<?php endwhile; else: endif; ?>

<?php get_footer() ?>