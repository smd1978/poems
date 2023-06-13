<!--Если сайдбар пустой - скрывает его-->
<?php if (!is_active_sidebar('right-sidebar')) {
    return;
} ?>

<!--Выводит сайдбар-->
<div class="col-md-3 sidebar">

    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="поиск" aria-label="Search">
      <button class="btn btn-outline-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
    </form>

    <?php dynamic_sidebar('right-sidebar'); ?>
       <ul class = "list_cat">
       <?php   
        wp_list_categories([
                'title_li' => '',
                'orderby' => 'name',
                'order' => 'asc',
                'style' => 'none',
                'show_count' => 1,
                'hide_empty' => 1,
                'exclude' => 1,
            ]);?>
        </ul>
    <ul>
    <?php if ( function_exists('wp_tag_cloud') ){

	wp_tag_cloud('smallest=8&largest=17');
} ; ?>
</ul>
</div>