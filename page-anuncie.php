<?php
/*
Template Name: anuncie
*/
?>

<?php get_header();?>


<section id="contato">
  <div class="container_12">
    <div class="grid_4"><h2 class="titulo-de-secao">Anuncie<br/><span>com a gente</span></h2></div>
    <div class="grid_8"><?php echo do_shortcode('[contact-form-7 id="124" title="Anuncie"]'); ?></div>
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