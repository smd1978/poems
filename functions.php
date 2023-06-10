<?php
    // подключаем style.css в header.php с помощью head
function poems_one_style(){
    wp_enqueue_style('poems_one_style-bootstrap', get_template_directory_uri() .'/app/bootstrap/css/bootstrap.min.css');   
    wp_enqueue_style('poems_one_style', get_stylesheet_uri());

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), false, true);
    //wp_enqueue_script( 'jquery' );
    wp_enqueue_script('poems_one_style', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), false, true);
    wp_enqueue_script('poems_one_style-bootstrapjs', get_template_directory_uri() . '/app/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
    }

add_action( 'wp_enqueue_style', 'poems_one_style' );
add_action( 'wp_enqueue_scripts', 'poems_one_style' );

    


//Регистрируем сайдбар right-sidebar
function test_widgets_init()
{
    register_sidebar([
        'name' => 'Сайдбар справа',
        'id' => 'right-sidebar',
        'description' => 'Область для виждетов сайдбара',
        'class' => 'test2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => "</h4>\n",
    ]);
}
//Инициализируем его хуком widgets_init
add_action('widgets_init', 'test_widgets_init');


function test_setup()
{
    //Регистрирует поддержку новых возможностей темы в WordPress (поддержка миниатюр, форматов записей и т.д.).
    add_theme_support('post-thumbnails'); //добавляем изображение записи
    add_theme_support('title-tag'); //выводит title вместо тега <title></title>
    add_theme_support('custom-logo', ['width' => 150, 'height' => 40,]);

    //добавляет цвет и изображение фона
    add_theme_support('custom-background', [
        'default-color' => 'ffffff',
        // 'default-image' => get_template_directory_uri() .'/app/img/fon_main.jpg',
    ]);

    //выводит изображение хедера
    add_theme_support('custom-header', [
        'default-image' => get_template_directory_uri() .
            '/app/img/header.jpg',
        'width' => 1920,
        'height' => 200,
    ]); //выводит логотип
    add_image_size('my_article_image', 200, 200); //регистрируем новый размер изображения
    
    register_nav_menus( array(
        'header_menu1' => 'Меню в шапке 1',
        'footer_menu2' => 'Меню в футере 2',
    ) );
}

add_action('after_setup_theme', 'test_setup');

//путь до картинок
$path_img = '/wp-content/themes/poems_one/app/img/';

// МЕТКИ

add_filter('widget_tag_cloud_args', function ($args) {
    $args['unit'] = 'px';
    $args['smallest'] = 12;
    $args['largest'] = 16;
    return $args;
});

// Убираем заголовок Рубрики
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
 function artabr_remove_name_cat( $title ){
  if ( is_category() ) {
  $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
  $title = single_tag_title( '', false );
  }
  return $title;
 }


 function lt_html_excerpt($text) { 
    global $post;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace('\]\]\>', ']]>', $text);
        $text = strip_tags($text,'<p><br><b><a><em><strong>');
        $excerpt_length = 20;
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words)> $excerpt_length) {
            array_pop($words);
            array_push($words, '...');
            $text = implode(' ', $words);
        }
    }
    return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'lt_html_excerpt');