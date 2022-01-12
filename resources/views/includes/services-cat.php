<?php
if (!function_exists('post_categories')) {
  /**
   * Функция вывод подкатегорий во всех типах записей
   */
  function services_cat()
  {
    $args = array(
      'parent' => get_queried_object()->term_id,
    );

    $terms = get_terms('services', $args);
    if ($terms && !is_wp_error($terms)) {
      echo "<ul class='services-cat'>";
      foreach ($terms as $term) {

        echo '<li> <h3>'. $term->name . '</h3>';
        $id = $term->term_id; // ID заданной рубрики
        // выводим посты из элемента таксономии gta_vice_city таксономии game
        $params = array(
          'tax_query' => array(
            array(
              'taxonomy' => 'services',
              'terms' => $id
            )
          )
        );
        $recent = new WP_Query($params);
        ?>
        <ul>
          <?php
          while ($recent->have_posts()) : $recent->the_post();
            ?>
            <li>
              <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
              </a>
            </li>
          <?php
          endwhile;
          // восстанавливаем глобальную переменную $post
          wp_reset_postdata();?>
        </ul>
      <?php }
      echo "</ul>";
    }
  }
}
//Добавляем вывод для экшена categories
//add_action( 'services-cat','post_categories', 10 );
