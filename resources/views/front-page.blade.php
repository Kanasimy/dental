{{--
  Template Name: Главная
--}}

@extends('layouts.app')

@section('content')
  @php if( $slider ) {
  $i = 0;
  @endphp

  <section class="main-slider">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php foreach( $slider as $slide ) {
    @endphp
        <div class="carousel-item @if ($i === 0) active @endif">

          <img src="@php echo wp_get_attachment_image_url( $slide[ 'photo' ],"full" );@endphp" class="img-fluid" alt="" >
          <div class="carousel-caption d-none d-sm-block">
            <h2 class="main-slider__header">{{ $slide[ 'title' ] }}</h2>
            <p class="main-slider__text">{{ $slide[ 'description' ] }}</p>
            <a class="btn-order" href="{{ $slide[ 'href' ] }}">
                <span class="text">{{ $slide[ 'button' ] }}</span>
                <div class="icon-container">
                  <div class="icon icon--left">
                    <svg viewBox="0 0 20 10">
                      <use xlink:href="@asset('images/svg/arrow.svg#arrow-right')"></use>
                    </svg>
                  </div>
                  <div class="icon icon--right">
                    <svg viewBox="0 0 20 10">
                      <use xlink:href="@asset('images/svg/arrow.svg#arrow-right')"></use>
                    </svg>
                  </div>
                </div>
              </a>
          </div>
        </div>
        @php $i++; } @endphp
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </section>
    @php } @endphp

  <section class="servises animate">
    <div class="container-fix container">
      <h3 class="header-text">Популярные услуги</h3>
      <div class="description-text">
        Программа борьбы с зависимостями, хоть и имеет общие для всех аспекты, для каждого обратившегося разрабатывается индивидуально с учетом его характерологических особенностей.
      </div>
        <div class="row servises__list">
          <div class="col-sm-12 col-lg-3">
            <div class="servises__item">
            <a href="https://reallife-clinic.ru/service/lechenie-muzhskogo-alkogolizma/"><img width="224px" src="@asset('images/real-life_09.jpg')" alt="Лечение алкоголизма"></a>
            <a href="https://reallife-clinic.ru/service/lechenie-muzhskogo-alkogolizma/" class="servises__cat">Лечение алкоголизма</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-3">
            <div class="servises__item">
            <a href="https://reallife-clinic.ru/service/kodirovanie/"><img width="224px" src="@asset('images/real-life_03.jpg')" alt="Кодирование"></a>
            <a href="https://reallife-clinic.ru/service/kodirovanie/" class="servises__cat">Кодирование</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-3">
            <div class="servises__item">
            <a href="https://reallife-clinic.ru/service/psihoterapiya/"><img width="224px" src="@asset('images/real-life_12.jpg')" alt="Психотерапия"></a>
            <a href="https://reallife-clinic.ru/service/psihoterapiya/" class="servises__cat">Психотерапия</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-3">
            <div class="servises__item">
            <a href="https://reallife-clinic.ru/service/vyvod-iz-zapoya/"><img width="224px" src="@asset('images/real-life_06.jpg')" alt="Вывод из запоя"></a>
            <a href="https://reallife-clinic.ru/service/vyvod-iz-zapoya/" class="servises__cat">Вывод из запоя</a>
            </div>
          </div>
        </div>
      <a href="/services/alcoholism-treatment/" class="btn-order btn-order--servises">
        <span class="text">Весь спектр услуг</span>
        <div class="icon-container">
          <div class="icon icon--left">
            <svg viewBox="0 0 10 5">
              <use xlink:href="@asset('images/svg/arrow.svg#arrow-right')"></use>
            </svg>
          </div>
          <div class="icon icon--right">
            <svg viewBox="0 0 10 5">
              <use xlink:href="@asset('images/svg/arrow.svg#arrow-right')"></use>
            </svg>
          </div>
        </div>
      </a>
      </div>
  </section>

  @include('/partials/how-work')

  @if ($staff)
      <section class="staff">
    <h3 class="header-text">Наши специалисты</h3>
    <div class="container-fix container">
      @foreach($staff as $person)
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
      @endforeach
    </div>
  </section>
    @endif

  @include('/partials/advantages')

  @include('/partials/certificates')

  <section class="patients animate">
  <div class="container-fix container-fix--patients">
    <h3 class="header-text">Пациенты клиники получают:</h3>
    <ul class="patients__list">
      <li><span class="patients__number">1</span><span class="patients__li">Индивидуальный подход к лечению</span></li>
      <li><span class="patients__number">2</span><span class="patients__li">Полная конфиденциальность</span></li>
      <li><span class="patients__number">3</span><span class="patients__li">Круглосуточное наблюдение за состоянием</span></li>
      <li><span class="patients__number">4</span><span class="patients__li">Комфортное размещение</span></li>
      <li><span class="patients__number">5</span><span class="patients__li">Опытный персонал</span></li>
      <li><span class="patients__number">6</span><span class="patients__li">Сопровождение после реабилитации</span></li>
    </ul>
  </div>
</section>

  @include('/partials/prices')

  @include('/partials/reviews')

  <section class="about animate">
    <div class="container-fix container">
    <h3 class="header-text">О Клинике</h3>
  <div class="about__text">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    @endwhile
  </div>
    </div>
    @php echo do_shortcode('[gallery size="full" columns="0" link="file" ids="518,519,520,517,518,519,520,517"]') @endphp
 </section>

  @include('/partials/faq')

  @include('/partials/map')

@endsection
