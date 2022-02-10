@extends('layouts.app')
@section('content')
  <div class="container-lg">
    <div class="breadcrumbs">@php breadcrumbs(); @endphp</div>
  @php if(isset($service_slider)) {
  $i = 0;
  @endphp
  <section class="service-slider">
    <div id="carouselService" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @for ($y = 0, $size = count($service_slider); $y < $size; ++$y)
        <li data-target="#carouselService" data-slide-to="{{ $y }}" class="active"></li>
        @endfor
      </ol>
      <div class="carousel-inner">
        @php foreach( $service_slider as $slide ) {
        @endphp
        <div class="carousel-item @if ($i === 0) active @endif">
          <img src="@php echo wp_get_attachment_image_url( $slide[ 'photo' ],"full" );@endphp" class="img-fluid" alt="" >
          <div class="carousel-caption d-none d-md-block">
            <h2 class="service-slider__header">{{ $slide[ 'title' ] }}</h2>
            <a class="btn-order btn-order--servises" href="href="{{ $slide[ 'href' ] }}">
              <span class="text">{{ $slide[ 'button' ] }}</span>
              <div class="icon-container">
                <div class="icon icon--left">
                  <svg viewBox="0 0 10 5">
                    <use xlink:href="https://reallife-clinic.ru/wp-content/themes/real-life/dist/images/svg/arrow.svg#arrow-right"></use>
                  </svg>
                </div>
                <div class="icon icon--right">
                  <svg viewBox="0 0 10 5">
                    <use xlink:href="https://reallife-clinic.ru/wp-content/themes/real-life/dist/images/svg/arrow.svg#arrow-right"></use>
                  </svg>
                </div>
              </div>
            </a>
          </div>
        </div>
        @php $i++; } @endphp
      </div>
    </div>
  </section>
  @php } @endphp
  </div>
  <section class="about animate">
    <div class="container-fix">
      <h2 class="header-text">
        {{ get_term_by('id', get_queried_object_id(), 'services') -> name  }}
      </h2>
      <div class="description-text">{{ get_term_by('id', get_queried_object_id(), 'services') -> description }}</div>
      @php services_cat() @endphp
      <div class="about__text">
      {!! html_entity_decode($description) !!}
      </div>
    </div>
    @php echo do_shortcode('[gallery size="full" columns="0" link="file" ids="518,519,520,517,518,519,520,517"]') @endphp
  </section>

  @include('/partials/free-advice')

  @include('/partials/how-work')

  @if ($staff_service)
    <section class="staff">
      <h3 class="header-text">Наши специалисты</h3>
      <div class="container-fix">
        @foreach($staff_service as $person)
          <div class="row staff__item animate">
            <div class="col-sm-3 p-0">
              <img class="img-fluid" src="@php echo wp_get_attachment_image_url( $person[ 'photo' ],"full" );@endphp" alt="{{ $person[ 'title' ] }}">
            </div>
            <div class="col-sm-9 p-0 staff__description">
              <h4 class="staff__name">{{ $person[ 'title' ] }}</h4>
              <div class="staff__year"><span>Стаж:</span> {{ $person[ 'experience' ] }}</div>
              <div class="staff__info"><span>Подробнее:</span>
                {{ $person[ 'description' ] }}</div>
              <div class="btn btn-outline-primary staff__btn btn-sm">Записаться на прием</div>
            </div>
          </div>
          <!-- /.row -->
        @endforeach
      </div>
      <!-- /.container -->
    </section>
    <!-- /.staff -->
  @endif

  @include('/partials/advantages')

  @include('/partials/certificates')

  @include('/partials/prices')

  @include('/partials/reviews')

  @include('/partials/faq')


  @include('/partials/map')

@endsection
