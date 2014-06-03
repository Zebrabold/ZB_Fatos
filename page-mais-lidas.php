<?php
/*
Template Name: Mais lidas
*/
?>

<?php get_header();?>
    
<div class="container_12">
	<div class="grid_12 titulo-pagina"><h2 class="titulo-de-secao">Posts<br/><span>mais lidos</span></h2></div>
</div>

<div class="container_12">
  	<div class="conteudo grid_8">
		<?php 
	        echo do_shortcode('[wpp 
	          range=all
	          order_by=views 
	          stats_views=1
	          stats_comments=0
	          thumbnail_width=300
              thumbnail_height=125
              wpp_start="<ol>"
              wpp_end="</ol>"
              title_length=200
              limit=30 
	          post_html="<li>{thumb} <a href={url}>{text_title}</a> </li>
	        ]'); 
	      ?>
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