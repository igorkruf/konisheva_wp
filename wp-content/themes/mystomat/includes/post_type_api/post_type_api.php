<?php
//добавляем свой тип поста 
add_action('init', 'true_register_post_usluga'); // Использовать функцию только внутри хука

function true_register_post_usluga()
{
    $labels = array(
        'name' => 'Список услуг ',
        'singular_name' => 'Услуга ', // админ панель Добавить->Функцию
        'add_new' => 'Добавить услугу',
        'add_new_item' => 'Добавить новую услугу', // заголовок тега <title>
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'all_items' => '',
        'view_item' => 'Просмотр услуги на сайте',
        'search_items' => 'Искать услугу',
        'not_found' =>  'услуга  не найдена.',
        'not_found_in_trash' => 'В корзине нет услуг.',
        'menu_name' => 'Список услуг',
        'taxonomies' => array('type_usluga')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/uslugi.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail')

    );
    register_post_type('usluga', $args);
}
///////////////////////////////////////////////////////////////////////////////////
//добавляем свой тип поста  Tehnologe
add_action('init', 'true_register_post_sotrudnik'); // Использовать функцию только внутри хука

function true_register_post_sotrudnik()
{
    $labels = array(
        'name' => 'Список сотрудников',
        'singular_name' => 'Сотрудник', // админ панель Добавить->Функцию
        'add_new' => 'Добавить сотрудника',
        'add_new_item' => 'Добавить нового сотрудника', // заголовок тега <title>
        'edit_item' => 'Редактировать сотрудника',
        'new_item' => 'Новый сотрудник',
        'all_items' => '',
        'view_item' => 'Просмотр сотрудника на сайте',
        'search_items' => 'Искать сотрудника',
        'not_found' =>  'Сотрудник   не найдена.',
        'not_found_in_trash' => 'В корзине нет сотрудника.',
        'menu_name' => 'Список сотрудников',
        //'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/sotr.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor',  'author', 'thumbnail')

    );
    register_post_type('sotrudnik', $args);
}
///////////////////////////////////////////////////////////////////////////////////
//добавляем свой тип поста  Отзыв
add_action('init', 'true_register_post_otziv'); // Использовать функцию только внутри хука

function true_register_post_otziv()
{
    $labels = array(
        'name' => 'Список отзывов',
        'singular_name' => 'Отзыв', // админ панель Добавить->Функцию
        'add_new' => 'Добавить отзыв',
        'add_new_item' => 'Добавить новый отзыв', // заголовок тега <title>
        'edit_item' => 'Редактировать отзыв',
        'new_item' => 'Новый отзыв',
        'all_items' => '',
        'view_item' => 'Просмотр отзыва на сайте',
        'search_items' => 'Искать отзыв',
        'not_found' =>  'отзыв   не найден.',
        'not_found_in_trash' => 'В корзине нет отзывов.',
        'menu_name' => 'Список отзывов',
        //'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/otziv.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor')

    );
    register_post_type('otziv', $args);
}
///////////////////////////////////////////////////////////////////////////////////
//добавляем свой тип поста  Объявление
add_action('init', 'true_register_post_obyavlen'); // Использовать функцию только внутри хука

function true_register_post_obyavlen()
{
    $labels = array(
        'name' => 'Список объявлений',
        'singular_name' => 'Объявление', // админ панель Добавить->Функцию
        'add_new' => 'Добавить объявление',
        'add_new_item' => 'Добавить новое объявление', // заголовок тега <title>
        'edit_item' => 'Редактировать объявление',
        'new_item' => 'Новое объявление',
        'all_items' => '',
        'view_item' => 'Просмотр объявления на сайте',
        'search_items' => 'Искать объявление',
        'not_found' =>  'объявление   не найдено.',
        'not_found_in_trash' => 'В корзине нет объявлений.',
        'menu_name' => 'Список объявлений',
        //'taxonomies' => array('type_service_chivic')
        // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true, // показывать интерфейс в админке

        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/obyavlen.png', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'editor',  'author', 'thumbnail')

    );
    register_post_type('obyavlen', $args);
}
///////////////////////////////////////////////////////////////////////////////////