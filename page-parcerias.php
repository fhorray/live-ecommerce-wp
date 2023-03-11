<?php 
// Template name: Parcerias
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

  <section class="parceiros">
    <div class="container">

      <div class="agencias-certificadas">
        <h2><?php the_field('agencias_titulo') ?></h2>

        <?php if( have_rows('lista_de_agencias') ): ?>
          <ul>
            <?php while( have_rows('lista_de_agencias') ): the_row(); ?>  
              <li>
                <img src="<?php echo the_sub_field('agencia_logo') ?>" alt="Logo">
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

      <div class="consultorias-certificadas">
        <h2><?php the_field('consultoria_titulo') ?></h2>

        <?php if( have_rows('lista_de_consultorias') ): ?>
          <ul>
            <?php while( have_rows('lista_de_consultorias') ): the_row(); ?>  
              <li>
                <img src="<?php echo the_sub_field('consultorias_logo') ?>" alt="Logo">
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

  </section>

  <section class="programa-parceria">
    <div class="container">
      <h2><?php the_field('programa_parceria_titulo') ?></h2>
      <p><?php the_field('programa_parceria_descricao') ?></p>

      <?php if( have_rows('programa_parceria_topicos') ): ?>
        <div class="benefits-list">
          <?php while( have_rows('programa_parceria_topicos') ): the_row(); ?>  
            <div class="item">
              <h5><?php echo the_sub_field('programa_parceria_topicos_titulo') ?></h5>
              <p><?php echo the_sub_field('programa_parceria_topicos_descricao') ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="parceria-benefits">
    <div class="container">
      <h2><?php the_field('beneficios_titulo') ?></h2>
      <p><?php the_field('beneficios_descricao') ?></p>

      <?php if( have_rows('beneficios_lista') ): ?>
        <ul>
          <?php while( have_rows('beneficios_lista') ): the_row(); ?> 
            <li>
              <img src="<?php echo the_sub_field('beneficios_lista_icone') ?>" alt="Icone">
              <div class="text">
                <h3><?php echo the_sub_field('beneficios_lista_titulo') ?></h3>
                <p><?php echo the_sub_field('beneficios_lista_descricao') ?></p>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>

    </div>
  </section>

  <section class="form-area">
    <div class="container">
      <div class="text">
        <h2><?php the_field('formulario_titulo') ?></h2>

        <ul>
            <?php if( have_rows('lista_passo_a_passo') ): ?>
            <?php while( have_rows('lista_passo_a_passo') ): the_row(); ?>  
              <li>
                <h3><?php echo the_sub_field('lista_passo_a_passo_titulo') ?></h3>
                <p><?php echo the_sub_field('lista_passo_a_passo_descricao') ?></p>
              </li>
            <?php endwhile; ?>  
            <?php endif; ?>
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
            <input type="radio" name="you-are" id="you-are"><span>Agência (marketing)</span>
            <input type="radio" name="you-are" id="you-are"><span>Agência (Implatanção)</span>
            <input type="radio" name="you-are" id="you-are"><span>Consultor</span>
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