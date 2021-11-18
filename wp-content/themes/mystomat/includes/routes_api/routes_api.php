<?php
///Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('wp/v2', '/posts', array(


        'methods'  => 'POST',
        // 'headers'   => [
        //     'Authorization' => 'Basic ' . base64_encode('mystomat:2yQt 6zSz UFGu URTf AWI0 C29s')
        // ],
        // 'callback' => 'my_rest_api_add_posts',

    ));
});

function my_rest_api_add_posts(WP_REST_Request $request)
{
    // $posts = get_posts(array(
    //     'post_type' => 'otziv',

    // ));
}

//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/otziv', [
        [
            'methods'  => 'GET',
            'callback' => 'my_rest_api_func',
        ],
        // [
        // 'methods'  => 'POST',
        // 'headers'   => [
        //     'Authorization' => 'Basic ' . base64_encode('login:2yQt_6zSz_UFGu_URTf_AWI0_C29s')
        // ],
        //'callback' => 'my_rest_api_add_otziv',
        // ],
    ]);
});

function my_rest_api_func(WP_REST_Request $request)
{
    $posts = get_posts(array(
        'post_type' => 'otziv',

    ));

    if (empty($posts))
        return new WP_Error('no_posts_type_otziv', 'Записей не найдено', ['status' => 404]);

    // $posts = array_map(function ($post) {
    //     $post_data['fio']    = esc_html($post->post_title);
    //     $post_data['date']      = $post->post_date;
    //     $post_data['content'] = $post->post_content;


    //     return $post_data;
    // }, $posts);

    return $posts;
};
function my_rest_api_add_otziv(WP_REST_Request $request)
{

    // $posts = get_posts(array(
    //     'post_type' => 'otziv',

    // ));

    // if (empty($posts))
    //     return new WP_Error('no_posts_type_otziv', 'Записей не найдено', ['status' => 404]);

    // // $posts = array_map(function ($post) {
    // //     $post_data['fio']    = esc_html($post->post_title);
    // //     $post_data['date']      = $post->post_date;
    // //     $post_data['content'] = $post->post_content;


    // //     return $post_data;
    // // }, $posts);

    // return $posts;



};

///////////////////////////////////////////////////////////
//Вывод всех (названий )категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v15', '/portfolio', array(
        'methods'  => 'GET',
        'callback' => 'rest_api_portfolio',
    ));
});

function rest_api_portfolio()
{
    $posts = get_posts(array(
        'post_type' => 'portfolio',


    ));

    // if (empty($posts))
    //     return new WP_Error('no_posts_type_portfolio', 'Записей не найдено', ['status' => 404]);

    // $posts = array_map(function ($post) {
    //     $post_data['title']    = esc_html($post->post_title);
    //     $post_data['api-portfolio-type-service'] = get_the_terms($post->ID, 'type_service_chivic');



    //     return $post_data;
    // }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/post', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_post',
    ));
});

function my_rest_api_post(WP_REST_Request $request)
{
    $posts = get_posts(array(
        'orderby' => 'ID',

        'order' => 'ASC'

    ));

    if (empty($posts))
        return new WP_Error('no_posts_type_otziv', 'Записей не найдено', ['status' => 404]);

    $posts = array_map(function ($post) {
        $post_data['title']    = esc_html($post->post_title);
        //$post_data['date']      = get_post_meta($post->ID, 'url_portfolio');
        $post_data['content'] = $post->post_content;
        $post_data['img'] = get_the_post_thumbnail_url($post->ID, 'full');


        return $post_data;
    }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/usluga', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_usluga',
    ));
});

function my_rest_api_usluga(WP_REST_Request $request)
{
    $posts = get_posts(array(
        'post_type' => 'usluga',
        'orderby' => 'ID',

        'order' => 'ASC'

    ));

    if (empty($posts))
        return new WP_Error('no_posts_type_otziv', 'Записей не найдено', ['status' => 404]);

    // $posts = array_map(function ($post) {
    //     $post_data['title']    = esc_html($post->post_title);
    //     //$post_data['date']      = get_post_meta($post->ID, 'url_portfolio');
    //     $post_data['content'] = $post->post_content;
    //     $post_data['img'] = get_the_post_thumbnail_url($post->ID, 'full');


    //     return $post_data;
    // }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/type_usluga', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_type_usluga',
    ));
});

function my_rest_api_type_usluga(WP_REST_Request $request)
{
    //Выбираем только корневые типы услуг
    $posts = get_categories([
        'taxonomy' => 'type_usluga',
        //'parent' => 0,
        'pad_counts' => true, //что-бы count считал и в дочерних категориях

    ]);

    if (empty($posts))
        return new WP_Error('no_terms_in_taxonomy_type_usluga', 'Записей не найдено', ['status' => 404]);

    $posts = array_map(function ($post) {
        $post_data['id_type_usluga'] = $post->term_id;
        $post_data['id_parent_type_usluga'] = $post->parent;
        $post_data['name']    = esc_html($post->name);
        $post_data['count'] = $post->category_count;
        ///////Получаем url изображения термина таксономии (скрипт с сайта wp-kama)  на ходится в папке includes/img_taxonomy/img_taxonomy.php
        $post_data['url_img'] = wp_get_attachment_image_url(get_term_meta($post->term_id, '_thumbnail_id', 1), 'full');

        return $post_data;
    }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/type_usluga/(?P<id>\d+)', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_type_usluga_preiskurant',
    ));
});

function my_rest_api_type_usluga_preiskurant(WP_REST_Request $request)
{
    //Выбираем только корневые типы услуг
    $posts = get_posts(array(
        'post_type' => 'usluga',
        'tax_query' => array(
            array(
                'taxonomy' => 'type_usluga',
                'field'    => 'id',
                'terms'    => $request['id'],

            )
        ),
    ));

    if (empty($posts))
        return new WP_Error('no_terms_in_taxonomy_type_usluga', 'Записей не найдено', ['status' => 404]);

    $posts = array_map(function ($post) {
        //$post_data['id_type_usluga'] = $post->term_id;
        //$post_data['id_parent_type_usluga'] = $post->parent;
        $post_data['name']    = esc_html($post->post_title);
        //$post_data['count'] = $post->category_count;
        ///////Получаем url изображения термина таксономии (скрипт с сайта wp-kama)  на ходится в папке includes/img_taxonomy/img_taxonomy.php
        //$post_data['url_img'] = wp_get_attachment_image_url(get_term_meta($post->term_id, '_thumbnail_id', 1), 'full');

        $money = get_post_meta($post->ID, 'stoimost_usluga');

        $post_data['stoimost_usluga']  = number_format($money[0], 0, '', ' ');
        return $post_data;
    }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/sotrudnik', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_sotrudnik',
    ));
});

function my_rest_api_sotrudnik(WP_REST_Request $request)
{
    $posts = get_posts(array(
        'post_type' => 'sotrudnik',
        'orderby' => 'ID',

        'order' => 'ASC'

    ));

    if (empty($posts))
        return new WP_Error('no_posts_type_sotrudnik', 'Записей не найдено', ['status' => 404]);

    $posts = array_map(function ($post) {
        $post_data['fio_sotrudnik']    = esc_html($post->post_title);
        //$post_data['date']      = get_post_meta($post->ID, 'url_portfolio');
        $post_data['podrobno_sotrudnik'] = $post->post_content;
        $post_data['img_sotrudnik'] = get_the_post_thumbnail_url($post->ID, 'full');


        return $post_data;
    }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////
//Вывод работ определённой категории из портфолио
add_action('rest_api_init', function () {

    register_rest_route('myplugin/v1', '/obyavlen', array(
        'methods'  => 'GET',
        'callback' => 'my_rest_api_obyavlen',
    ));
});

function my_rest_api_obyavlen(WP_REST_Request $request)
{
    $posts = get_posts(array(
        'post_type' => 'obyavlen',
        'meta_query' => [[
            'key' => 'date_obyavlen',
            'type' => 'DATE',
            'value' => date('Ymd'),
            'compare' => '>=',
        ]],


    ));

    if (empty($posts))
        return new WP_Error('no_posts_type_obyavlen', 'Записей не найдено', ['status' => 404]);

    $posts = array_map(function ($post) {
        $post_data['title_obyavlen']    = esc_html($post->post_title);
        $post_data['date_obyavlen']      = get_post_meta($post->ID, 'date_obyavlen');
        $post_data['podrobno_obyavlen'] = $post->post_content;
        $post_data['img_obyavlen'] = get_the_post_thumbnail_url($post->ID, 'full');


        return $post_data;
    }, $posts);

    return $posts;
};
///////////////////////////////////////////////////////////