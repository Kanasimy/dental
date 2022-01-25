<div class="container-lg">
  <nav class="navbar navbar-light navbar-expand-lg d-flex justify-content-between">
    <a class="navbar-brand" href="#"><h4>Меню</h4></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbar{{ $namePartials }}" aria-controls="navbar{{ $namePartials }}" aria-expanded="false"
            aria-label="Переключатель меню">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (has_nav_menu('primary_navigation'))
      {!!
        wp_nav_menu( array(
          'theme_location'  => 'primary_navigation',
          'depth'           => 2,
          'container'       => 'div',
          'container_id'    => 'navbar'.$namePartials,
          'container_class' => 'collapse navbar-collapse ',
          'menu_class'      => 'nav navbar-nav d-flex justify-content-between',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker()
        ) );
    !!}
    @endif
  </nav>
</div>
