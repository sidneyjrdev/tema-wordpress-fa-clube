<?php get_header(); ?>

<div class="container-fluid single">
<div class="row"> 
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <div class="col-md-9 noticiaSingle"> 
       <span class="pull-left">Data de criação ou última modificação: <?php the_modified_date('d/m/Y'); ?></span>
       <div class="clearfix"></div>
       <h1><?php the_title(); ?></h1><br />
       <?php the_post_thumbnail('imgNoticiasSingle',
                            array('class' => 'img-responsive img-thumbnail')) ?>
                        
       <div class="txtSingle"><?php the_content(); ?></div>
                    
                    <?php endwhile; else: ?>
    <span class="label label-danger">Post não existente.</span>
                    <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    </div>
    </div>

<?php get_footer(); ?>