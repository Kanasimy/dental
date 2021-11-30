<footer class="footer">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
  @include('partials.nav-panel',['namePartials' => 'Footer'])
  @include('partials.site-info')
</footer>
