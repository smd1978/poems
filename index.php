<?php get_header(); ?>

<div class="container">
<div class="breadcrumb_12">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
    <div class="row">
        <div class="col">
            <div class="row author__article-title">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>
                    <!-- post -->
                    <div class="col-md-12">
                        <a class = "post_title" href="<?php the_permalink(); ?>"><?php the_title()?></a> 
                    </div>

                <?php
                    endwhile; ?>
                                    <?php
                else:
                        ?>
                    <!-- no posts found -->
                    <p>Постов нет...</p>
                <?php
                endif; ?>
            </div>
        </div>
            <?php get_sidebar(); ?>

    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>