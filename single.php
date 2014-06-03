<?php get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/jquery.bxslider.css" type="text/css">
    
  <div class="container_12">
  	
  	<div class="conteudo box grid_8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="social-tab box">
		  		<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;width=60&amp;layout=box_count&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=65&amp;appId=302338833262843" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:60px; height:65px;" allowTransparency="true"></iframe>
		  		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-counturl="<?php the_permalink(); ?>" data-lang="en" data-count="vertical">Tweetar</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div class="g-plusone" data-size="tall"></div>
				<script type="text/javascript">
				  window.___gcfg = {lang: 'pt-BR'};

				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/platform.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
	  		</div>

  			<article class="texto-post">
  				<?php the_post_thumbnail('slider'); ?>
  				<h1><?php the_title(); ?></h1>	
  				<h4><?php the_excerpt(); ?></h4>
  				<div class="metas">
  					<?php setPostViews(get_the_ID()); ?>
  					<div class="contadores">
	                    <div class="ct-comentarios"><fb:comments-count href="<?php echo get_permalink($post->ID); ?>"></fb:comments-count></div>
	                    <div class="ct-views"><?php echo getPostViews(get_the_ID()); ?></div>
	                 </div>
	                 <div class="meta-autor">
                    	<div class="autor">por: <?php the_author() ?></div>
                    	<div class="data"><?php echo time_ago(); ?></div>
                    </div>
  				</div>
				<div class="ad-2">
					<img class="ad-2" src="<?php bloginfo('template_directory'); ?>/img/ad-2.jpg" alt="" />
				</div>
				<?php the_content(); ?>

				<div id="galeria">
				<div id="gallery" class="ad-gallery">
				  <div class="ad-image-wrapper">
				  </div>
				  <div class="ad-nav">
				    <div class="ad-thumbs">
				    	<?php $images = get_field('imagens');
				    	if( $images ): ?>
				    	<ul class="ad-thumb-list">
					      	<?php foreach( $images as $image ): ?>
						        <li>
							       <a href="<?php echo $image['sizes']['produto']; ?>" title="<?php echo $image['title']; ?>">
							           <img class="nolightbox" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							       </a>
						        </li>
					        <?php endforeach; ?>
				    	</ul>
				    	<?php endif; ?>
				    </div>
				  </div>
				</div>
				
				<span class="fonte">Fonte: <?php the_field('fonte'); ?></span>
				<div class="ad-condicional">
					<img class="ad-3" src="<?php bloginfo('template_directory'); ?>/img/ad-3.jpg" alt="" />
					<img class="ad-3" src="<?php bloginfo('template_directory'); ?>/img/ad-3.jpg" alt="" />
				</div>
				<div class="erros-clique-aqui">
					Viu algum erro ou gostaria de adicionar alguma sugestão a essa matéria?
Colabore, <a href="<?php bloginfo('url'); ?>/quem-somos#contato">clique aqui</a>.
				</div>
				<h2 class="titulo-de-secao">Posts<br/><span>relacionados</span></h2>
					   <?php 
		                echo do_shortcode('[wpp 
		                  range=daily
		                  limit=3 
		                  order_by=views 
		                  stats_views=1
		                  stats_comments=0
		                  post_html="<a href={url}> <li class="post-top-10"><h2 class="hide">{text_title}</h2> <span class="numero-top-10"></span> </li> </a>"
		                ]'); 
		              ?>	
				<div class="post-relacionado">
		              	<a href="<?php the_field('link_post_relacionado_1'); ?>">
		              		<?php the_field('titulo_post_relacionado_1'); ?>
		              	</a>
		              	<div class="wpp-views"><?php the_field('fonte_post_relacionado_1'); ?></div>
		              </div>
				<h2 class="titulo-de-secao">Posts<br/><span>mais acessados</span></h2>
					  <?php 
		                echo do_shortcode('[wpp 
		                  range=daily
		                  limit=3 
		                  order_by=views 
		                  stats_views=1
		                  stats_comments=0
		                  post_html="<a href={url}> <li class="post-top-10"><h2 class="hide">{text_title}</h2> <span class="numero-top-10"></span> </li> </a>"
		                ]'); 
		              ?>
		              <div class="post-relacionado">
		              	<a href="<?php the_field('link_post_relacionado_2'); ?>">
		              		<?php the_field('titulo_post_relacionado_2'); ?>
		              	</a>
		              	<div class="wpp-views"><?php the_field('fonte_post_relacionado_2'); ?></div>
		              </div>
				<h2 class="titulo-de-secao">O que achou?<br/><span>comente!</span></h2>
				<div class="fb-comments" style="margin-left: 20px;" data-href="<?php the_permalink(); ?>" data-width="580" data-numposts="20" data-colorscheme="light"></div>
  			</article>
  		<?php endwhile; endif; ?>
  	</div>

  	<div class="sidebar grid_4">
  		<div class="ad-comum">
	        <img class="ad-2" src="<?php bloginfo('template_directory'); ?>/img/ad-2.jpg" alt="" />
	    </div><!-- /ad-2 -->

	    <h2 class="titulo-de-secao margin-top">Posts<br/><span>mais acessados</span></h2>
		<div class="top-10-single box">
			<?php 
                echo do_shortcode('[wpp 
                  range=monthly
                  limit=15 
                  order_by=views 
                  thumbnail_width=100 
                  thumbnail_height=60
                  stats_views=1
                  stats_comments=0
                  post_html="<a href={url}> <li class="post-top-10"> {thumb} <h2 class="hide">{text_title}</h2> <span class="numero-top-10"></span> </li> </a>"
                ]'); 
              ?>
		</div>
	    <div class="facebook-box box">
          <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FDesconhecidos.Fatos&amp;width=290&amp;height=246&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=1508580869363314" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:290px; height:246px;" allowTransparency="true"></iframe>
        </div>
        <div class="tags">
        	<?php
				$tags = get_tags();
				$html = '<div class="post_tags">';
				foreach ( $tags as $tag ) {
					$tag_link = get_tag_link( $tag->term_id );
							
					$html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';
				echo $html;
			?>
        </div>
  	</div>
  </div>

<?php get_footer(); ?>