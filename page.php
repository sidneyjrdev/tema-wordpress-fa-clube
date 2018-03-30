<?php get_header(); ?>

<div class="container-fluid page">
<div class="row"> 
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <div class="col-md-9 conteudoPagina">
       <h1><?php the_title(); ?></h1>
       <?php the_post_thumbnail('imgPage',
                            array('class' => 'img-responsive img-thumbnail')) ?>
       <div class="txtpage"><?php the_content(); ?></div>
                    </div>
    <?php endwhile; endif;?>
    <?php get_sidebar(); ?>
    </div>
    </div>
<?php get_footer(); ?>