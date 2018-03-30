<?php get_header(); ?>

<div class="container-fluid single-letras">
    <div class="row">
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <div class="col-md-12">
           <h1><?php the_title(); ?></h1> 
           <h2><?php echo rwmb_meta('album'); ?></h2>
        </div>
    </div> 
<div class="row"> 
    
    <div class="col-md-6 letraOriginal">
      <?php the_content(); ?>
    </div>
    
    <div class="col-md-6 letraTraduzida">
      <?php echo nl2br(rwmb_meta('traducao')); ?><br /><br />
      <span class="spFonte pull-right"><?php echo rwmb_meta('fonte') ?></span>
              </div>
                    <?php endwhile; else: ?>
    <span class="label label-danger">Letra não existente.</span>
                    <?php endif; ?>
    
    </div>

<?php get_footer(); ?>