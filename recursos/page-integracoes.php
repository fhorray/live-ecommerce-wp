<?php 
// Template name: Live Integracoes
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="hero">
    <div class="container">

      <div class="text">
        <h1>A Live eCommerce <span>é uma plataforma integrada!</span></h1>
        <p>Com as principais soluções e ferramentas de e-commerce do mercado.</p>

        <div class="cta-area">
          <a class="btn btn-secondary" href="#">Solicitar Demonstração</a>
          <a href="#" class="cta-area-question">Lorem ipsum amet sit dolor?</a>
        </div>
      </div>

      <img class="hero-image" src="<?php echo get_template_directory_uri(  ) ?>/img/hero-image-3.png" alt="Hero Image">

    </div>
  </section>

  <section class="payments">
    <div class="container">
      <h2>Meios de Pagamentos</h2>
      <p>Diversas tecnologias avançadas estão a disposição dos empreendedores virtuais para que os meios de pagamento para e-commerce funcionem naturalmente e se tornem parte do dia a dia da empresa, gerando mais vendas.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/braspag.png" alt="Braspag Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/Cielo.png" alt="Cielo Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/getnet.png" alt="Getnet Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/itau.png" alt="Itau Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/mercadopago.png" alt="Mercado Pago Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/mundipag.png" alt="Mundipag Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/pagarme.png" alt="pagarme Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/pagseguro.png" alt="Pagseguro Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/pay-u.png" alt="Pay U Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/paypal.png" alt="PayPal Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/picpay.png" alt="PicPay Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/rede.png" alt="Rede Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/payments-logos/stone.png" alt="Stone Logo">
      </div>
    </div>
  </section>

  <section class="antifraude">
    <div class="container">
      <h2>Anti Fraude</h2>
      <p>Diversas tecnologias avançadas estão a disposição dos empreendedores virtuais para que os meios de pagamento para e-commerce funcionem naturalmente e se tornem parte do dia a dia da empresa, gerando mais vendas.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/anti-fraude-logos/clear-sale.png" alt="Clear sale Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/anti-fraude-logos/f-control.png" alt="F-control Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/anti-fraude-logos/konduto.png" alt="Konduto Logo">

      </div>
    </div>
  </section>

  <section class="erp">
    <div class="container">
      <h2>ERP</h2>
      <p>Um ambiente seguro é fundamental para a operação de um e-commerce. A loja precisa estar blindada a invasores. <br>
        Ter um site seguro evita prejuízos e deixa o cliente tranquilo para comprar.<br><br>
        Automaticamente diversas validações são feitas com os dados enviados no momento da tentativa de pagamento. Os procedimentos variam conforme a programação utilizada no sistema. Na maioria das vezes seguem a análise automática, conferindo informações desde o carrinho de compras até o site do vendedor.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/alternativa.png" alt="Alternativa Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/bling.png" alt="Bling Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/e-milennium.png" alt="Milennium Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/jiva.png" alt="Jiva Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/onclick.png" alt="On-click Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/erp-logos/principia.png" alt="Principia Logo">

      </div>
    </div>
  </section>

  <section class="atendimento">
    <div class="container">
      <h2>ATENDIMENTO</h2>
      <p>ERP é a sigla para Enterprise Resource Planning, que significa Sistema Integrado de Gestão Empresarial. É um software corporativo capaz de controlar todas as informações de uma empresa, integrando dados, recursos e processos, das áreas de Vendas, Finanças, Contabilidade, Fiscal, Estoque, Compras, Produção e Logística.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/atendimento-logos/engage.png" alt="Engage Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/atendimento-logos/jivochat.png" alt="Jivochat Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/atendimento-logos/livechat.png" alt="Livechat Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/atendimento-logos/olark.png" alt="Olarkk Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/atendimento-logos/zandeskchat.png" alt="Zandesk Logo">
      </div>
    </div>
  </section>

  <section class="logistica-entrega">
    <div class="container">
      <h2>Logística e Entregas</h2>
      <p>Os meios de entregas, em poucas palavras, são serviços de envio empregados por lojistas que vendem produtos pela Internet que tornam o envio de seus produtos mais gerenciável e acessível.<br><br>A entrega dos produtos do e-commerce pode depender de canais de distribuição como os Correios, onde o lojista pode optar por uma frota própria ou terceirizada. Temos integração com as principais plataformas e soluções de entregas otimizadas e focadas em e-commerce, que fazem entregas de diversas formas.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/correios.png" alt="Correios Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/fedex.png" alt="Fedex Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/fretnet.png" alt="Fretnet Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/intelipost.png" alt="Intelipost Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/jadlog.png" alt="Jadlog Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/jamef.png" alt="jamef Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/loggi.png" alt="Loggi Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/mandae.png" alt="Mandaê Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/totalexpress.png" alt="Total express Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/logistica-e-entrega-logos/troquefacil.png" alt="Troque facil Logo">
      </div>
    </div>
  </section>

  <section class="emails">
    <div class="container">
      <h2>Recomendação e Recuperação <br>de Carrinho Abandonado</h2>
      <p>Ferramentas que utilizam diversas áreas do site para apresentar promoções e oportunidades para o usuário finalizar sua compra e aumentar a quantidade de produtos no carrinho de compras.<br><br>O sistema de recomendação, dessa forma, é usado para melhorar a navegação de usuários nas lojas virtuais, automatizando a forma como os produtos são mostrados de acordo com os perfis dos compradores.</p>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/recomendations-logos/cartstack.png" alt="CartStack Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/recomendations-logos/shopback.png" alt="Shopback Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/recomendations-logos/smarthint.png" alt="Smarthint Logo">
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="container">
      <h2>Reviews e Avaliações</h2>

      <div class="logos">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/reviews-logos/e-bit.png" alt="E-bit Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/reviews-logos/facebook.png" alt="Facebook Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/reviews-logos/opnioes-verificadas.png" alt="Opniões Verificadas Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/reviews-logos/trustvox.png" alt="Trustvox Logo">
        <img src="<?php echo get_template_directory_uri(  ) ?>/img/resources/reviews-logos/yourviews.png" alt="Yourviews Logo">
      </div>
    </div>
  </section>


<?php endwhile; else: endif; ?>

<?php get_footer( )?>