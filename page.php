

<?php get_header();?>

<section id="quem-somos">
  <div class="container_12">
    <div class="grid_4"><h2 class="titulo-de-secao">Conheça<br/><span>os fatos</span></h2></div>
    
    <div class="grid_8"><?php the_field('quem_somos','option'); ?></div>
  </div>
</section>
    
<section id="equipe">
  <div class="container_12">
    <div class="grid_4"><h2 class="titulo-de-secao">Quem<br/><span>faz o quê</span></h2></div>
      <div class="grid_8">
        <?php while(the_repeater_field('equipe', 'option')): ?>
            <div class="pessoa-equipe">
                     <?php 
                    $attachment_id = get_sub_field('imagem_da_pessoa');
                    $size = "thumbnail";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                    ?>
                    <img src="<?php echo $image[0]; ?>" />
                    <h3><?php the_sub_field('nome_da_pessoa', 'option'); ?></h2>
                    <h4><?php the_sub_field('funcao', 'option'); ?></h4>
                    <p><?php the_sub_field('resumo', 'option'); ?></p>
                </div>
        <?php endwhile; ?>
      </div>
  </div>
</section>

<section id="contato">
  <div class="container_12">
    <div class="grid_4"><h2 class="titulo-de-secao">Fale<br/><span>com a gente</span></h2></div>
    <div class="grid_8"><?php echo do_shortcode('[contact-form-7 id="99" title="Contato"]'); ?></div>
  </div>
</section>

<script type="text/javascript">
  // ==========  ROLAGEM DA ANCORA =============
  $(function() {
       $('a[href*=#]:not([href=#])').click(function() {
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
               scrollTop: target.offset().top
             }, 1000);
             return false;
           }
         }
       });
     });
</script>

<?php get_footer(); ?>