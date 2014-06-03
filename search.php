<?php get_header();?>
    
<div class="container_12">
	<div class="container_12 titulo-pagina">
	<div class="grid_12"><h2 class="titulo-de-secao">Pesquisando por:<br/><span><?php the_search_query(); ?></span></h2></div>
</div>
  	
  	<div class="conteudo grid_8">
  		  <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
			<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
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
          <?php wp_pagenavi(); ?>
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