<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php the_field('favicon', 'options') ?>">

  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Montserrat+Alternates:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo get_template_directory_uri(  ) ?>/css/main.css">
  <title><?php bloginfo('name'); ?> <?php wp_title('-') ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="container">
      <a href="<?php echo get_permalink( get_page_by_path('Home')) ?>">
        <img class="logo" src="<?php the_field('logo', 'options') ?>" alt="Logo Live eCommerce">
      </a>

      <!-- MENU PRINCIPAL -->
      <nav>
        <ul class="js-menu-header">
          <li>
            <a href="<?php echo get_permalink( get_page_by_path('Home')) ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path('Plataforma de Ecommerce')) ?>">Plataforma de e-commerce</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path('Recursos')) ?>">Recursos</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path('Conteudos')) ?>">Conteúdos</a>
          </li>
          <li>
            <a href="<?php echo get_permalink( get_page_by_path('Parcerias')) ?>">Parcerias</a>
          </li> 
        </ul>
      </nav>

      <div class="menu-cta">
        <?php if( have_rows('botao_cta', 'options') ): ?>
          <?php while ( have_rows('botao_cta', 'options') ) : the_row(); ?>
            <a href="<?php the_sub_field('botão_cta_header_link', 'options') ?>" class="btn btn-primary"><?php the_sub_field('botão_cta_header_texto', 'options') ?></a>
          <?php endwhile; ?>
        <?php endif; ?>  
        <img class="menu-hamburguer" src="<?php echo get_template_directory_uri(  ) ?>/img/menu-hamburguer.svg" alt="Menu Hamburguer">
      </div>
    </div>

    <!-- SUBMENU -->
    <div class="submenu">
      <!-- RECURSOS -->
      <nav class="submenu-list submenu-hidden">
        <ul>
          <li><a href="<?php echo get_permalink( get_page_by_path('Live Integracoes')) ?>">Live Integrações</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Live Smart Checkout')) ?>">Live Smart Checkout</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Live Voice')) ?>">Live Voice</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Live Mobile App')) ?>">Live Mobile App</a></li>
        </ul>
      </nav>

      <!-- CONTEUDOS  -->
      <nav class="submenu-list submenu-hidden">
        <ul>
          <li><a href="#">Blog</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Checklists')) ?>">Checklists</a></li>
          <li><a href="<?php echo get_permalink( get_page_by_path('Ebooks')) ?>">E-books</a></li>
        </ul>
      </nav>


    </div>
  </header>