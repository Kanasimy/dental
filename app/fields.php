<?php

namespace App;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Define custom fields
 * Docs: https://carbonfields.net/docs/
 */

add_action( 'carbon_fields_register_fields', function () {

    $slider_labels = array(
        'plural_name' => 'слайды',
        'singular_name' => 'слайд',
    );

    $staff_labels = array(
        'plural_name' => 'Наши специалисты',
        'singular_name' => 'сотрудника',
    );

    Container::make( 'post_meta', 'Настройки страницы' )
        ->where('post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'complex', 'home_slider', '' )
                ->setup_labels( $slider_labels )
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
            Field::make( 'complex', 'staff', '' )
                ->setup_labels( $staff_labels )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'ФИО' ),
                    Field::make( 'textarea', 'description', 'Кратко о специалисте' ),
                    Field::make( 'text', 'experience', 'Стаж' ),
                    Field::make( 'image', 'photo', 'Фотография' ),
                ) )
        ));

    Container::make( 'post_meta', 'Наши специалисты' )
        ->where( 'post_type', '=', 'service' )
        ->add_fields( array(
            Field::make( 'complex', 'staff_service', '' )
                ->setup_labels( $staff_labels )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'ФИО' ),
                    Field::make( 'textarea', 'description', 'Кратко о специалисте' ),
                    Field::make( 'text', 'experience', 'Стаж' ),
                    Field::make( 'image', 'photo', 'Фотография' ),
                ) )
        ));

    Container::make( 'term_meta', 'Дополнительно' )
        ->where('term_taxonomy', '=', 'services' )
        ->add_fields( array(
            Field::make( 'textarea', 'description', 'Полное описание услуги' )
        ));

    Container::make( 'term_meta', 'Слайдер для рубрики' )
        ->where('term_taxonomy', '=', 'services' )
        ->where( 'term_level', '=', 1 )
        ->add_fields( array(
            Field::make( 'complex', 'service_slider', 'Слайдер для рубрики' )
                ->setup_labels( $slider_labels )
                ->add_fields( array(
                    Field::make( 'text', 'title', 'Заголовок слайда' ),
                    Field::make( 'text', 'button', 'Текст кнопки' ),
                    Field::make( 'text', 'href', 'Ссылка с кнопки' ),
                    Field::make( 'image', 'photo', 'Изображение слайда' ),
                ) )
        ));

    Container::make( 'term_meta', 'Наши специалисты' )
        ->where('term_taxonomy', '=', 'services' )
        ->where( 'term_level', '=', 1 )
        ->add_fields( array(
            Field::make( 'complex', 'staff_service', 'Наши специалисты' )
                ->setup_labels( $staff_labels )
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


