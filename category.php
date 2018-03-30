<?php get_header(); ?>

<div class="container-fluid category">
<div class="row"> 
    <div class="row">
        <h1><?php single_cat_title('Navegando na categoria '); ?></h1>
    </div>
    <div class="col-md-8">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="media">
            <div class="media-left">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('imgListaPost', array('class'=>'media-object imgListaPost')); ?></a>
            </div>
            <div class="media-body">
                <a href="<?php the_permalink(); ?>"><h2 class="mt-0"><?php the_title() ?></h2></a>
              <?php the_excerpt(); ?>
            </div>
            
        </div>
                    <?php endwhile; else: ?>
        <span class="label label-danger">Não há posts nessa categoria.</span>
                    <?php endif; ?>
        <br />
        <?php wordpress_pagination(); ?>
    </div>
    <?php get_sidebar(); ?>
    </div>
    </div>


<?php get_footer(); ?>