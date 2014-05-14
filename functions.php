<?php

//======================= GERENCIANDO O TAMANHO DOS RESUMOS AUTOMÁTICOS
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 20; }



//======================= CRIANDO BOTÕES NO EDITOR
function my_mce_buttons( $buttons ) {
   array_unshift( $buttons, 'styleselect' );
   return $buttons;
}
add_filter('mce_buttons', 'my_mce_buttons');

function mce_mod( $init ) {
   $init['block_formats'] = "Paragraph=p; Heading 3=h3; Heading 4=h4";

   $style_formats = array(
    array(
      'title' => 'Citação tipo 1',
      'classes' => 'cit-1',
    ),
    array(
      'title' => 'Citação tipo 2',
      'block' => 'div',
      'classes' => 'cit-2',
      'wrapper' => true
    ),
    array(
      'title' => 'Citação tipo 3',
      'block' => 'div',
      'classes' => 'cit-3',
      'wrapper' => true
    ),
    array(
      'title' => 'Imagem externa',
      'block' => 'a',
      'classes' => 'fancybox',
      'wrapper' => true
    ),
    array(
      'title' => 'Pergunta',
      'block' => 'div',
      'classes' => 'pergunta',
      'wrapper' => true
    ),
    array(
      'title' => 'Resposta',
      'block' => 'div',
      'classes' => 'resposta',
      'wrapper' => true
    )
   );
   $init['style_formats'] = json_encode( $style_formats );
   return $init;
}
add_filter('tiny_mce_before_init', 'mce_mod');


//======================= GERENCIANDO O CORTE DAS IMAGENS
if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size( $name = 'bloco-padrao', $width = 300, $height = 125, $crop = true );
    add_image_size( $name = 'slider', $width = 620, $height = 360, $crop = true );
    add_image_size( $name = 'top-10', $width = 460, $height = 230, $crop = true );
    add_image_size( $name = 'imagem-do-dia', $width = 800, $height = 650, $crop = true );
}


//======================= // CPT - XXXX
add_action( 'init', 'XXXX_register' );
function XXXX_register() {
	
	 $labels = array(
        'name' => _x('XXXX', 'post type general name'),
        'singular_name' => _x('post', 'post type singular name'),
        'add_new' => _x('Adicionar novo', 'post'),
        'add_new_item' => __('Adicionar novo post'),
        'edit_item' => __('Editar'),
        'new_item' => __('Novo post'),
        'view_item' => __('Visualizar'),
        'search_items' => __('Procurar'),
        'not_found' =>  __('N&atilde;o encontrado'),
        'not_found_in_trash' => __('N&atilde;o encontrado na lixeira'),
        'parent_item_colon' => ''
    );
	
	$args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor', 'tags')
      );
	
	register_post_type( 'XXXX', $args );
}


//======================= LIMPA AS SUJEIRAS INLINE DO CÓDIGO
add_filter( 'wp_insert_post_data' , 'filter_post_data' , '99', 2 );
function filter_post_data( $data , $postarr ) {
    $content = $data['post_content'];
    $content = preg_replace('#<p.*?>(.*?)</p>#i', '<p>\1</p>', $content);
    $content = preg_replace('#<span.*?>(.*?)</span>#i', '<span>\1</span>', $content);
    $content = preg_replace('#<ol.*?>(.*?)</ol>#i', '<ol>\1</ol>', $content);
    $content = preg_replace('#<ul.*?>(.*?)</ul>#i', '<ul>\1</ul>', $content);
    $content = preg_replace('#<li.*?>(.*?)</li>#i', '<li>\1</li>', $content);

    $data['post_content'] = $content;

    return $data;
}



?>