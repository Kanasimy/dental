<?php
if (!function_exists('post_categories')) {
  /**
   * Функция вывод подкатегорий
   */
  function services_cat()
  { $slug = get_queried_object()->slug;
    echo do_shortcode('[ajax_load_more posts_per_page="50" no_results_text="Больше услуг нет" loading_style="white" container_type="ul" button_label="Показать еще" transition_container="false" scroll="false" post_type="service"  taxonomy="services" taxonomy_terms="'.$slug.'" taxonomy_operator="IN"]');
  }

}
