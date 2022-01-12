<?php
function create_service(){

  register_taxonomy( 'services', 'service', [
    'label'                 => '', // определяется параметром $labels->name
    'labels'                => [
      'name'              => 'Рубрики услуг',
      'singular_name'     => 'Рубрика',
      'search_items'      => 'Поиск рубрик',
      'all_items'         => 'Все рубрики',
      'view_item '        => 'Просмотр рубрики',
      'parent_item'       => 'Родительская рубрика',
      'parent_item_colon' => 'Родительская рубрика:',
      'edit_item'         => 'Править рубрику',
      'update_item'       => 'Обновить рубрику',
      'add_new_item'      => 'Добавить новую рубрику',
      'new_item_name'     => 'Новое название рубрики',
      'menu_name'         => 'Рубрики услуг',
      'back_to_items'     => '← Назад к рубрикам',
    ],
    'description'           => '', // описание таксономии
    'public'                => true,
    // 'publicly_queryable'    => null, // равен аргументу public
    // 'show_in_nav_menus'     => true, // равен аргументу public
    // 'show_ui'               => true, // равен аргументу public
     'show_in_menu'          => true, // равен аргументу show_ui
    // 'show_tagcloud'         => true, // равен аргументу show_ui
     'show_in_quick_edit'    => true, // равен аргументу show_ui
    'hierarchical'          => true,

    'rewrite'               => true,
    //'query_var'             => 'service', // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
    'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
    'show_in_rest'          => true, // добавить в REST API
    //'rest_base'             => null, // $taxonomy
    // '_builtin'              => false,
    //'update_count_callback' => '_update_post_term_count',
  ] );
}
function register_post_types(){
  register_post_type( 'service', [
    'label'  => null,
    'labels' => [
      'name'               => 'Услуги', // основное название для типа записи
      'singular_name'      => 'Услуга', // название для одной записи этого типа
      'add_new'            => 'Добавить услугу', // для добавления новой записи
      'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
      'new_item'           => 'Новое описание', // текст новой записи
      'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
      'search_items'       => 'Искать услугу', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => 'Услуги', // для родителей (у древовидных типов)
      'menu_name'          => 'Услуги', // название меню
    ],
    'description'         => '',
    'public'              => true,
    // 'publicly_queryable'  => null, // зависит от public
    // 'exclude_from_search' => null, // зависит от public
    // 'show_ui'             => null, // зависит от public
    // 'show_in_nav_menus'   => null, // зависит от public
    'show_in_menu'        => null, // показывать ли в меню адмнки
    // 'show_in_admin_bar'   => null, // зависит от show_in_menu
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => null,
    'menu_icon'           => null,
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    //'taxonomies'          => ['services'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ] );
}
