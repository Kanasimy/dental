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
        ->where('post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'complex', 'home_slider', 'Слайдер' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Заголовок слайда' ),
                    Field::make( 'text', 'description', 'Текст слайда' ),
                    Field::make( 'text', 'button', 'Текст кнопки' ),
                    Field::make( 'text', 'href', 'Ссылка с кнопки' ),
                    Field::make( 'image', 'photo', 'Изображение слайда' ),
                ) )
        ));

    Container::make( 'post_meta', 'Наши специалисты' )
        ->where( 'post_id', '=', '63' )
        ->add_fields( array(
            Field::make( 'complex', 'staff', 'Специалисты' )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'ФИО' ),
                    Field::make( 'textarea', 'description', 'Кратко о специалисте' ),
                    Field::make( 'text', 'experience', 'Стаж' ),
                    Field::make( 'image', 'photo', 'Фотография' ),
                ) )
        ));

});

/**
 * Boot Carbon Fields
 */
add_action( 'after_setup_theme', function () {
    \Carbon_Fields\Carbon_Fields::boot();
});


