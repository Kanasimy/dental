<?php
if (!function_exists('post_categories')) {
  /**
   * Функция вывод подкатегорий
   */
  function services_cat()
  {
    echo do_shortcode('[ajax_load_more id="7504684786" no_results_text="Больше услуг нет" loading_style="white" container_type="ul" post_type="service" button_label="Показать еще " transition_container="false"  scroll="false"]');

  }

}
