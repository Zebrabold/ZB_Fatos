<?php get_header();?>

  <section class="ad-topo">
    <img class="ad-1" src="<?php bloginfo('template_directory'); ?>/img/ad-1.jpg" alt="" />
  </section> <!-- /ad-topo -->

  <section class="container_12 conteudo-index-1">

    <section class="grid_12 slider box">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
       
        <!-- Slider Content (Wrapper for slides )-->
        <div class="carousel-inner">
            <?php query_posts('posts_per_page=4&posicao=slider'); ?>
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <div class="item">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slider'); ?></a>
                    <div class="carousel-caption">
                      <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <div class="descricao-slider"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="leia-mais">leia mais</a>
                      </a>
                      <div class="contadores">
                        <div class="ct-comentarios"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></div>
                        <div class="ct-views"><?php echo getPostViews(get_the_ID()); ?></div>
                      </div>
                    </div>
                  </div>
              <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
      </div>
    </section>

      <div class="bloco-1 grid_8">

        <?php query_posts('offset=0&showposts=2'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <article class="post-1 box">
                  <div class="thumbnail-post"><?php the_post_thumbnail('bloco-padrao'); ?></div>
                  <h2><?php the_title(); ?></h2>
                  <div class="contadores">
                    <div class="ct-comentarios"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></div>
                    <div class="ct-views"><?php echo getPostViews(get_the_ID()); ?></div>
                  </div>
                  <div class="tempo-atras"><?php echo time_ago(); ?></div>
                </article>
              </a>
          <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

      </div><!-- /bloco-1 -->
        
      <div class="grid_4 ad-comum">
        <img class="ad-2" src="<?php bloginfo('template_directory'); ?>/img/ad-2.jpg" alt="" />
      </div><!-- /ad-1 -->

      <div class="bloco-2 grid_7">

          <?php query_posts('offset=2&showposts=4'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <article class="post-2 box">
                  <div class="thumbnail-post"><?php the_post_thumbnail('bloco-padrao'); ?></div>
                  <h2><?php the_title(); ?></h2>
                  <div class="contadores">
                    <div class="ct-comentarios"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></div>
                    <div class="ct-views"><?php echo getPostViews(get_the_ID()); ?></div>
                  </div>
                  <div class="tempo-atras"><?php echo time_ago(); ?></div>
                </article>
              </a>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>
          
          
      </div><!-- /bloco-2 -->

      <div class="sidebar-1 grid_5">

          <div class="youtube box">
            <div id="yunero">
            </div>  
            <script>
              $('#yuneroVideoFrame').load(function(){alert('hhh');});
            </script>
          </div>

          <div class="box google-plus">
            <div class="g-page" data-width="360" data-href="https://plus.google.com/100669154746537987709" data-layout="landscape" data-rel="publisher"></div>
            <script type="text/javascript">
              window.___gcfg = {lang: 'pt-BR'};
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/platform.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
          </div> <!-- / fim do google plus -->

      </div>

  </section> <!-- /conteudo-index-1 -->

  <div class="container_12 topo-top-10" id="top-10">
    <h2 class="titulo-de-secao">Top 10<br/><span>mais lidas</span></h2>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active tab-dia"><a href="#dia" data-toggle="tab">Dia</a></li>
          <li class="tab-semana"><a href="#semana" data-toggle="tab">Semana</a></li>
          <li class="tab-mes"><a href="#mes" data-toggle="tab">Mês</a></li>
        </ul>

        <a href="<?php bloginfo('url'); ?>/mais-lidas" class="top-geral">ver todas</a>
  </div>

  <section class="conteudo-index-2 top-10" >

    <div class="container_12">
        <!-- Tab panes -->
        <div class="tab-content">

          <ul class="tab-pane active" id="dia">
              <?php 
                echo do_shortcode('[wpp 
                  range=daily
                  limit=10 
                  order_by=views 
                  thumbnail_width=460 
                  thumbnail_height=230
                  post_html="<li>{thumb} <span> <a href={url}>{text_title}</a> </span> </li>"
                ]'); 
              ?>
          </ul> <!-- /tab-1 -->

          <ul class="tab-pane" id="semana">
               <?php 
                echo do_shortcode('[wpp 
                  range=weekly
                  limit=10 
                  order_by=views 
                  thumbnail_width=460 
                  thumbnail_height=230
                   post_html="<li>{thumb} <span> <a href={url}>{text_title}</a> </span> </li>"
                ]'); 
              ?>
          </ul> <!-- /tab-2 -->

          <ul class="tab-pane" id="mes">
              <?php 
                echo do_shortcode('[wpp 
                  range=monthly
                  limit=10 
                  order_by=views 
                  thumbnail_width=460 
                  thumbnail_height=230
                   post_html="<li>{thumb} <span> <a href={url}>{text_title}</a> </span> </li>"
                ]'); 
              ?>
          </ul> <!-- /tab-3 -->
        </div>

    </div>
  </section> <!-- /top-10 -->

  <section class="conteudo-index-3">
    <div class="container_12">
      <div class="bloco-3 grid_8">
          <?php query_posts('offset=6&showposts=4'); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <article class="post-1 box">
                  <div class="thumbnail-post"><?php the_post_thumbnail('bloco-padrao'); ?></div>
                  <h2><?php the_title(); ?></h2>
                  <div class="contadores">
                    <div class="ct-comentarios"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></div>
                    <div class="ct-views"><?php echo getPostViews(get_the_ID()); ?></div>
                  </div>
                  <div class="tempo-atras"><?php echo time_ago(); ?></div>
                </article>
              </a>
          <?php endwhile; endif; ?>
      </div>
      <div class="sidebar-2 grid_4">
        <div class="facebook-box box">
          <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FDesconhecidos.Fatos&amp;width=290&amp;height=246&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1508580869363314" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:290px; height:246px;" allowTransparency="true"></iframe>
        </div>
        <div class="ad-comum">
          <img class="ad-2" src="<?php bloginfo('template_directory'); ?>/img/ad-2.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>


  <div class="imagem-do-dia">
      <div class="container_12">
        <h2 class="titulo-de-secao">Imagem<br/><span>do dia</span></h2>
        <img class="int-compartilhar" src="<?php bloginfo('template_directory'); ?>/img/intervencao-compartilhar.png" alt="" />
        <section class="grid_10 push_1 slider-imagem-do-dia">
          <div id="carousel-imagem-do-dia" class="carousel slide" data-ride="carousel">
     
            <!-- Slider Content (Wrapper for slides )-->
            <div class="carousel-inner">
              <?php 
              $newsArgs = array( 'post_type' => 'imagem_do_dia', 'posts_per_page' => 3);                                  
              $newsLoop = new WP_Query( $newsArgs );                                    
              while ( $newsLoop->have_posts() ) : $newsLoop->the_post(); ?>
                <div class="item">
                  <?php the_post_thumbnail('imagem-do-dia'); ?>
                  <div class="carousel-caption">
                    <span class="data-imagem-do-dia"><?php the_time('d/m/Y') ?></span>
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="compartilhar-imagem-do-dia">
                     <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/ico-facebook.png" alt="" /></a>
                  </div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-imagem-do-dia" data-slide="prev">
              <img src="<?php bloginfo('template_directory'); ?>/img/left.png" />
            </a>
            <a class="right carousel-control" href="#carousel-imagem-do-dia" data-slide="next">
              <img src="<?php bloginfo('template_directory'); ?>/img/right.png" />
            </a>
          </div>
        </section>
      </div> 
  </div>


<?php get_footer(); ?>