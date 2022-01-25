<?php
function breadcrumbs()
{
  $separator = ' / ';
  $id = get_queried_object_id();

// если главная страница сайта
  if (!is_front_page()) { // не главная

    echo '<a href="' . site_url() . '">Главная</a>' . $separator;

    if (is_single()) { // записи
      $terms = wp_get_object_terms($id, 'services');
      $term_link = get_term_link($terms[0]->term_id, 'services');
      echo '<a href="'. $term_link .'">';
      echo $terms[0]->name . '</a>';

      echo $separator;

      echo '<span>';
      the_title();
      echo '</span>';

    } elseif (is_tax()) { // рубрика
      echo get_term_by('id', $id, 'services') -> name;
    }

  }

}
