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
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>favicon.ico">
        
        <!-- ========== ESTILOS ============= -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/changes.css" type="text/css" media="screen" />

        <!-- ========== FACEBOOK ============= -->
         <meta property="og:url" content="<?php the_permalink() ?>"/>  
         <meta property="og:title" content="<?php single_post_title(''); ?>" />  
         <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />  
         <meta property="og:type" content="article" />  
         <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

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
        <header class="container_12">
            <div class="logo"></div>
            <na class="menu"></na>
        </header>

        
    