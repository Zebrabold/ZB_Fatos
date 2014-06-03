<?php get_header();?>
    
  <div class="container_12">
  	
  	<div class="conteudo box grid_8">



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
  				<img class="wp-post-image" src="<?php bloginfo('template_directory'); ?>/img/404.jpg" alt="" />
  				<h1>Você caiu na página de erro 404.</h1>	
  				<h4 style="margin-left:40px;">Já parou pra pensar no que significa esse erro chato que nos deparamos quase todos os dias?</h4>
  				<div class="metas">

  				</div>
				<div class="ad-2">
					<img class="ad-2" src="<?php bloginfo('template_directory'); ?>/img/ad-2.jpg" alt="" />
				</div>
				<p>O erro 404 é um código de resposta HTTP que indica que o cliente pôde comunicar com o servidor, mas ou o servidor não pôde encontrar o que foi pedido, ou foi configurado para não cumprir o pedido e não revelar a razão ou a página não existe mais. Eles não devem ser confundidos com outros erros nos quais uma conexão para o servidor de destino não pôde ser feita.</p>
				<p>Durante uma comunicação via HTTP, é solicitado a um servidor responder a uma requisição, como a de um navegador para um documento de HTML, com um código de resposta numérico e uma mensagem opcional, mandatória, ou proibitória (baseada no código de status). No código 404, o primeiro "4" indica um "erro de cliente" (ou seja, de quem solicitou a página ao servidor), como uma URL mal digitada. Os dois dígitos seguintes indicam o erro específico ("Não Encontrado")1 . O uso de códigos de http de três dígitos é semelhante ao uso de tais códigos em protocolos anteriores, como FTP e NNTP.</p>

				<p>Um erro 404 é mostrado frequentemente quando páginas foram movidas ou apagadas. No primeiro caso, uma resposta melhor seria exibir a mensagem de erro 301 (Movido Permanentemente), que pode ser configurada na maioria dos arquivos de configuração de servidor, ou reescrevendo a URL; no segundo caso, a mensagem 410 (Perdido) poderia ser exibida. Por estas duas opções requererem configuração especial de servidor, a maioria dos site da Web não faz uso delas. Ou seja, não permitindo o acesso do cliente</p>
				<p>Servidores da web podem ser configurados para mostrarem páginas de erro personalizadas, incluindo uma descrição mais natural, a marca de um site, ou um formulário de busca. Muitas vezes os sites usam imagens bem-humoradas para aliviar a "decepção" de não encontrar a página procurada. O microblog Twitter, por exemplo, usa a imagem de uma baleia sendo carregada por pássaros.</p>

				<p>O Internet Explorer (antes da versão 7), porém, não exibirá páginas personalizadas a menos que eles sejam maiores que 512 bytes, optando, em vez disso, por exibir uma página de erro "amigável". O Google Chrome inclui funcionalidade similar, substituindo a mensagem 404 por sugestões alternativas geradas por algoritmos do Google, se a página tiver menos de 512 bytes.</p>
				<p>Circula na internet uma lenda urbana2 curiosa sobre a origem da expressão. Sua origem remontaria aos escritórios do CERN - Laboratório Europeu de Partículas Físicas -, com sede em Genebra, na Suíça. Nos primórdios da Web, por volta de 1980, no quarto andar do CERN, na sala 404, teria sido montado um banco de dados, controlado por três peritos em computação.</p>
				<p>De acordo com a lenda, eles gerenciavam manualmente os pedidos de arquivos e os transferiam para os requisitantes. Quando aconteciam erros, eles alertavam: “Room 404 - File Not Found”. Mais tarde, a expressão teria sido incorporada ao mundo online pelo físico inglês Tim Berners-Lee, o criador da Web.</p>
				<div class="ad-condicional">
					<img class="ad-3" src="<?php bloginfo('template_directory'); ?>/img/ad-3.jpg" alt="" />
					<img class="ad-3" src="<?php bloginfo('template_directory'); ?>/img/ad-3.jpg" alt="" />
				</div>
  			</article>

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