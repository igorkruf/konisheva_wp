<?php
include "includes/metafields_api/metafields_api.php";
include "includes/post_type_api/post_type_api.php";
include "includes/routes_api/routes_api.php";
include "includes/taxonomy_api/taxonomy_api.php";
include "includes/img_taxonomy/img_taxonomy.php";
//увираем админ панель с сайта
show_admin_bar(false);

add_theme_support('post-thumbnails');