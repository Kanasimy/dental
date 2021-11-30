<nav class="navbar navbar-light navbar-expand-lg d-flex justify-content-between">
  <div class="container">
    @php the_custom_logo() @endphp
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar{{ $namePartials }}" aria-controls="navbar{{ $namePartials }}" aria-expanded="false" aria-label="Toggle navigation">
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
  </div>
</nav>
