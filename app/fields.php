<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */
add_action( 'carbon_fields_register_fields', function () {

    Container::make( 'post_meta', 'Настройки страницы' )
        ->where( 'post_type', '=', 'page' )
        ->add_fields( array(
            Field::make( 'complex', 'home_slider', 'Слайдер' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Заголовок слайда' ),
                    Field::make( 'image', 'photo', 'Изображение слайда' ),
                ) )
        ));



});

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});


