<?php
///////////////////////////////////////////////
//Для типа постов service_chivic
// //Поключаем мета поле cvet_fona_img в REST API 
// add_action('rest_api_init', function () {

//     register_rest_field('service_chivic', 'cvet_fona_img', array(
//         'get_callback' => function ($post, $field_name, $request) {
//             return get_post_meta($post['id'], $field_name);
//         },
//         'update_callback' => null,
//         'schema' => null

//     ));
// });
// //Поключаем мета поле cvet_fona_info в REST API 
// add_action('rest_api_init', function () {

//     register_rest_field('service_chivic', 'cvet_fona_info', array(
//         'get_callback' => function ($post, $field_name, $request) {
//             return get_post_meta($post['id'], $field_name);
//         },
//         'update_callback' => null,
//         'schema' => null

//     ));
// });
// //Поключаем мета поле cvet_fona_info в REST API 
// add_action('rest_api_init', function () {

//     register_rest_field('service_chivic', 'foto', array(
//         'get_callback' => function ($post, $field_name, $request) {
//             return get_post_meta($post['id'], $field_name);
//         },
//         'update_callback' => null,
//         'schema' => null

//     ));
// });
//Поключаем мета поле cvet_fona_info в REST API 
add_action('rest_api_init', function () {

    register_rest_field('portfolio', 'url_portfolio', array(
        'get_callback' => function ($post, $field_name, $request) {
            return get_post_meta($post['id'], $field_name);
        },
        'update_callback' => null,
        'schema' => null

    ));
});

//Поключаем мета поле stoimost_service в REST API 
add_action('rest_api_init', function () {

    register_rest_field('service_chivic', 'stoimost_service', array(
        'get_callback' => function ($post, $field_name, $request) {
            return get_post_meta($post['id'], $field_name);
        },
        'update_callback' => null,
        'schema' => null

    ));
});
//Поключаем мета поле vremya_service в REST API 
add_action('rest_api_init', function () {

    register_rest_field('service_chivic', 'vremya_service', array(
        'get_callback' => function ($post, $field_name, $request) {
            return get_post_meta($post['id'], $field_name);
        },
        'update_callback' => null,
        'schema' => null

    ));
});
