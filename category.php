<?php get_header(); ?>

<div class="container">
    <!-- Хлебные крошки -->
    <div class="breadcrumb_12">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <!-- Хлебные крошки -->

    <div class = "row">
        <div class="col-9">
            <div class="row">
                
                    <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-6 col-md-6 category_anons">
                    <?php get_template_part('template-parts/content', 'preview'); ?>
                    
                    </div>
                    <?php $i++; endwhile; ?>
                   
                    <?php else: ?>
                    <!-- no posts found -->
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
                
            </div>
        </div>
        <?php get_sidebar(); ?>
                   
        <?php wp_reset_postdata(); ?>
    </div>
    
    <div class="clearfix"></div>


<?php
get_footer();

