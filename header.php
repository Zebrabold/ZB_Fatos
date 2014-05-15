<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 10 ]><html class="ie ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        
        <!-- ========== ESTILOS ============= -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css"/>

        <!-- ========== FACEBOOK ============= -->
         <meta property="og:url" content="<?php the_permalink() ?>"/>  
         <meta property="og:title" content="<?php single_post_title(''); ?>" />  
         <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
         <meta property="og:type" content="article" />  
         <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
        
        <!-- ========== FONTES ============= -->
         <link href='http://fonts.googleapis.com/css?family=Lato|Sacramento|Righteous' rel='stylesheet' type='text/css'>

     <!--[if lt IE 6]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 

     <!--[if lt IE 7]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 
     
     <!--[if lte IE 8]>  
     <script type="text/javascript">window.location.href = "http://abetterbrowser.org/pt-br";</script>  
     <![endif]--> 

     <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->    

</head>

<body <?php body_class(); ?>>

<div class="container">
        
    <header class="header">
        <div class="menu-1">
            <div class="container_12">
                <div class="logo grid_3">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="" /></a>
                </div>
                <nav class="grid_9 push_3">
                    <ul class="menu-principal">
                        <li class="menu-mais-lidas menu-p">
                            <a href="#top-10">
                                <h2>Mais lidas</h2>
                                <span>As preferidas<br/>da galera</span>
                            </a>
                        </li>
                        <li class="menu-novidades menu-p">
                            <a href="<?php bloginfo('url'); ?>/ultimas">
                                <h2>Novidades</h2>
                                <span>Fique ligado nas<br/>últimas postagens</span>
                            </a>
                        </li>
                        <li class="menu-assuntos menu-p">
                            <a href="#">
                                <h2>Assuntos</h2>
                                <span>Os fatos separados<br/>por categorias</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> <!-- /menu-1 -->
        
        <div class="menu-2">
            <div class="container_12">
                <ul class="grid_5 push_3 menu-institucional">
                    <li><a href="<?php bloginfo('url'); ?>/quem-somos#quem-somos">Quem somos</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/quem-somos#equipe">Conheça a equipe</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/quem-somos#contato">Contato</a></li>
                </ul>
                <div class="grid_2 push_3">
                    <ul class="menu-social">
                        <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/ico-facebook.png" alt="" /></a></li>
                        <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/ico-youtube.png" alt="" /></a></li>
                        <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/ico-instagram.png" alt="" /></a></li>
                    </ul>
                </div>
                <div class="grid_2 push_3">
                    <form method="get" id="searchform"  action="<?php bloginfo('url'); ?>/">
                        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="pesquisar por ..." />
                        <input type="submit" id="searchsubmit" value="" />
                    </form>
                </div>
            </div>
        </div> <!-- /menu-2 -->
    </header>

    <header class="header-sticky">
        <section class="container_12">
            <div class="logo-sticky grid_3">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-sticky.png" alt="" /></a>
            </div>
            <div class="menu-sticky grid_9">
                <ul>
                    <li class="menu-mais-lidas menu-p">
                        <a href="#top-10">
                            <h2>Mais lidas</h2>
                        </a>
                    </li>
                    <li class="menu-novidades menu-p">
                        <a href="<?php bloginfo('url'); ?>/ultimas">
                            <h2>Novidades</h2>
                        </a>
                    </li>
                    <li class="menu-assuntos menu-p">
                        <a href="#">
                            <h2>Assuntos</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </header>

     

        
    