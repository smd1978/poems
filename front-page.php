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
    <div class="col-9">
        <div class="row">
            
        
<?php
        $posttags = get_terms('post_tag');
if( $posttags ){
	foreach( $posttags as $tag ){?>
        <div class="col-lg-4 col-md-6">
            <div class="card card--bg bg-transparent">
                <div class="card-body">
                    <img class = "card-text--img" src = "<?php echo $path_img . '/vinyetki/vinyetka_top.png';?>" width = 100>
                    <h5 class = "card-title"><a href = "<?php $tag->name?>"><?php echo $tag->name . ' ';?></a></h5>
                    <img class = "card-text--img" src = "<?php echo $path_img . '/vinyetki/vinyetka_bottom.png';?>" width = 130>
                </div>
            </div>
        </div>
                        <?}
	}?>


            <!-- выводим категории в цикле -->
            <?php $categories = get_categories( 
                [
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                ]);

            foreach( $categories as $category ){?>

            <div class="col-lg-4 col-md-6">
                <div class="card card--bg bg-transparent">
                    <div class="card-body">
                        <img class = "card-text--img" src = "<?php echo $path_img . '/vinyetki/vinyetka_top.png';?>" width = 100>
                        <h5 class = "card-title">
                            <?php 
                                echo '<p><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.' </p> ';
                                echo $category->description . '</a>';
                                
                            ?>
                        </h5>
                        <img class = "card-text--img" src = "<?php echo $path_img . '/vinyetki/vinyetka_bottom.png';?>" width = 130>
                    </div>
                </div>
            </div>
            <?}?>
            
        </div>
    </div><!-- col-9 -->
    <?php get_sidebar(); ?>
</div><!-- row -->

</div><!-- Container -->

<?php wp_reset_postdata();?>
<?php get_footer(); ?>
