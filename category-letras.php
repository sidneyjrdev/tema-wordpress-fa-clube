<?php get_header(); ?>

<div class="container-fluid category-letras">
<div class="row"> 
    <div class="row">
        <h1><?php single_cat_title('Navegando na categoria '); ?></h1>
    </div>
    <div class="col-md-8">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        
                    <?php endwhile; else: ?>
        <span class="label label-danger">Não há letras.</span>
                    <?php endif; ?>
        <br />
        <?php wordpress_pagination(); ?>
    </div>
    <?php get_sidebar(); ?>
    </div>
    </div>

<?php get_footer(); ?>