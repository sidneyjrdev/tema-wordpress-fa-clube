<?php 

get_header(); ?>
<div class="container-fluid">
            <div class="conteudo row">
                <div class="ultimasNoticias col-md-5">
                    <h1>Últimas notícias</h1>
                    <?php
                    $posts_inicial = new WP_Query(array(
                    'category_name' => 'noticias',
                    'posts_per_page' => 3
                    ));
                    
                    if($posts_inicial->have_posts()) : while($posts_inicial->have_posts()) : $posts_inicial->the_post();
                 ?>
                    <div class="noticia">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('imgUltimasNoticias',
                            array('class' => 'img-responsive img-thumbnail')) ?></a>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="resumo"><?php the_excerpt(); ?></span>
                    </div>
                    <?php endwhile; else: ?>
                    <span class="label label-danger">Não há posts nessa categoria.</span>
                        <?php endif; wp_reset_postdata(); ?>
                    
                </div>
                <div class="TopVideos col-md-4">
                    <h1>Top músicas</h1>
                    <div class="embed-responsive embed-responsive-16by9 topVideo">
                        <?php
                        if(get_theme_mod('video1')){
                            echo convertYoutube(get_theme_mod('video1')); 
                        }else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/img/video1.png" alt="" />
                        <?php } ?>
                    </div>
                    
                    <div class="embed-responsive embed-responsive-16by9 topVideo">
                         <?php
                        if(get_theme_mod('video2')){
                            echo convertYoutube(get_theme_mod('video2')); 
                        }else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/img/video2.png" alt="" />
                        <?php } ?>
                    </div>
                    
                    <div class="embed-responsive embed-responsive-16by9 topVideo">
                         <?php
                        if(get_theme_mod('video3')){
                            echo convertYoutube(get_theme_mod('video3')); 
                        }else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/img/video3.png" alt="" />
                        <?php } ?>
                    </div>
                
                    <div class="embed-responsive embed-responsive-16by9 topVideo">
                         <?php
                        if(get_theme_mod('video4')){
                            echo convertYoutube(get_theme_mod('video4')); 
                        }else{ ?>
                        <img src="<?php bloginfo('template_url'); ?>/img/video4.png" alt="" />
                        <?php } ?>
                    </div>
                </div>
                
<?php get_sidebar(); ?>
            </div>
    
    
</div>

            
<?php get_footer(); ?>