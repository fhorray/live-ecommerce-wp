<div class="cta-area">
          <?php if( have_rows('cta_area', 'options') ): ?>
            <?php while ( have_rows('cta_area', 'options') ) : the_row(); ?>


              <?php if( have_rows('botao_cta', 'options') ): ?>
              <?php while ( have_rows('botao_cta', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field('link_do_botao_cta') ?>" class="btn btn-secondary"><?php the_sub_field('texto_do_botao_cta') ?></a>
              <?php endwhile; ?>
              <?php endif; ?>  


              <?php if( have_rows('link_cta', 'options') ): ?>
              <?php while ( have_rows('link_cta', 'options') ) : the_row(); ?>
                <a href="<?php the_sub_field('link_do_link_cta') ?>" class="cta-area-question"><?php the_sub_field('texto_do_link_cta') ?></a>
              <?php endwhile; ?>
              <?php endif; ?>   

            <?php endwhile; ?>
          <?php endif; ?>
</div>

