<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fã-clube Epica Rock Brasil</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
         
    <?php wp_head(); ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="topo">
                <?php if(get_theme_mod('imgCapa')){ ?>
                            <img class="imgCapa" src="<?php echo wp_get_attachment_url(get_theme_mod('imgCapa')); ?>" alt="" />
                        <?php }else{ ?>
                            <img class="imgCapa" src="<?php bloginfo('template_url'); ?>/img/capa.png" alt="" />
                        <?php } ?>
                            
               <ul class="botoesRedes">
                    <li><a href="<?php echo get_theme_mod('facebook', '#'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/facebook.png" class="btnfacebook" alt="" /></a></li>
                    <li><a href="<?php echo get_theme_mod('twitter', '#'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/twitter.png" class="btnTwitter" alt="" /></a></li>
                    <li><a href="<?php echo get_theme_mod('instagram', '#'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/instagram.png" class="btnInstagram" alt="" /></a></li> 
                </ul>
     
                <ul class="menu">
                    <li><a href="<?php bloginfo('home'); ?>">HOME</a></li>
                    <li><a href="<?php bloginfo('url') ?>/category/noticias">NOTÍCIAS</a></li>
                    <li><a href="<?php bloginfo('url') ?>/category/letras">LETRAS</a></li>
                    <li><a href="<?php bloginfo('url') ?>/sobre-a-banda">SOBRE A BANDA</a></li>
                    <li id="ultimoLi"><a href="<?php bloginfo('url') ?>/sobre-o-fa-clube">SOBRE O FÃ-CLUBE</a></li>
                </ul>
               </div>
            </div>
