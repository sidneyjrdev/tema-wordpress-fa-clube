<div class="sidebar col-md-3 pull-right">
                    <div class="propaganda">
                        <?php if(get_theme_mod('imgAd1')){ ?>
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('imgAd1')); ?>" alt="" />
                        <?php }else{ ?>
                            <img src="<?php bloginfo('template_url'); ?>/img/publicidade1.png" alt="" />
                        <?php } ?>
                    </div>
                    <div class="propaganda">
                        <?php if(get_theme_mod('imgAd2')){ ?>
                            <img src="<?php echo wp_get_attachment_url(get_theme_mod('imgAd2')); ?>" alt="" />
                        <?php }else{ ?>
                            <img src="<?php bloginfo('template_url'); ?>/img/publicidade2.png" alt="" />
                        <?php } ?>
                    </div>
                    <div class="enquete">
                        <?php if ( function_exists( 'vote_poll' ) && ! in_pollarchive() ): ?>
                        <h2>Enquete</h2>
                        <?php get_poll();?>
                        <?php endif; ?>
                    </div>
                    
                </div>