<?php

//======================= GERENCIANDO O TAMANHO DOS RESUMOS AUTOMÁTICOS
add_filter('excerpt_length', 'my_excerpt_length');
function my_excerpt_length($length) {
return 30; }



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
    add_image_size( $name = 'imagem-do-dia', $width = 800, $height = 550, $crop = true );
}


//======================= TEMPO DE POSTAGEM
function time_ago( $type = 'post' ) {
  $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

  return human_time_diff($d('U'), current_time('timestamp')) . " " . __('atrás');

}


//======================= ARRUMANDO A GALERIA DENTRO DO POST



//======================= // CPT - imagem-do-dia
add_action( 'init', 'imagem_do_dia_register' );
function imagem_do_dia_register() {
	
	 $labels = array(
        'name' => _x('Imagem do dia', 'post type general name'),
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
        'supports' => array('title','thumbnail')
      );
	
	register_post_type( 'imagem_do_dia', $args );
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


//======================= MUDA O BOX DA IMAGEM DE DESTAQUE DE POSIÇÃO
add_action('do_meta_boxes', 'customposttype_image_box');
function customposttype_image_box() {
  remove_meta_box( 'postimagediv', 'customposttype', 'side' );
  add_meta_box('postimagediv', __('Custom Image'), 'post_thumbnail_meta_box', 'customposttype', 'normal', 'high');
}


//======================= NUMERACAO TOP-10
function Get_Post_Number($postID){
  $temp_query = $wp_query;
  $postNumberQuery = new WP_Query('orderby=date&order=<strong>DESC</strong>&posts_per_page=-1');
  $counter = 1;
  $postCount = 0;
  if($postNumberQuery->have_posts()) :
    while ($postNumberQuery->have_posts()) : $postNumberQuery->the_post();
      if ($postID == get_the_ID()){
        $postCount = $counter;
      } else {
        $counter++;
      }
  endwhile; endif;
  wp_reset_query();
  $wp_query = $temp_query;
  return $postCount;
}

//======================= FUNCIONA O TOP-10
// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 ';
    }
    return $count.' ';
}
 
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
// Add it to a column in WP-Admin - (Optional)
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __(' ');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}


ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');

?>