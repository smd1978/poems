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

        <div class="row">
            <div class="col single_col"> 
                <div class="vinyetka">
                    <img src = "<?php echo $path_img . '/vinyetki/vinyetka_top.png';?>" width = 200>
                </div>     
                <?php  while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part('template-parts/content', 'page'); ?>
                            <?php endwhile; ?>
                <div class="vinyetka">
                    <img src = "<?php echo $path_img . '/vinyetki/vinyetka_bottom.png';?>" width = 200>
                </div>               
            </div>       

        <?php get_sidebar(); ?>
                
        </div>

</div>
<?php wp_reset_postdata();?>

<?php get_footer(); ?>
