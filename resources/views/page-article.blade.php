{{--
  Template Name: Статьи
--}}
@extends('layouts.app')
  @section('content')
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @php
    $wpb_all_query = new WP_Query(array('post_type'=>'service', 'post_status'=>'publish', 'posts_per_page'=>-1));
    @endphp

    @if ( $wpb_all_query->have_posts() )
<div class="servises">
    <div class="row servises__list">
      <!-- the loop -->
      @php while( $wpb_all_query->have_posts() ):  $wpb_all_query->the_post(); @endphp
      <div class="col-sm-12 col-lg-3">
        <div class="servises__item">
          <a class="servises__cat" href="<?php the_permalink(); ?>">
            @if(get_the_post_thumbnail_url()) {{ the_post_thumbnail(array(224, 224)) }}
            @else
            <svg width="224" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" xml:space="preserve">
            <circle cx="789.5" cy="299.5" r="66.8"/>
            <path d="M983.8 900.9c3.4 0 6.2-2.9 6.2-6.5V105.6c0-3.6-2.8-6.5-6.2-6.5H16.3c-3.5 0-6.3 2.9-6.3 6.5v788.9c0 3.6 2.8 6.5 6.3 6.5h967.5v-.1zM54.5 143.6h890.9v712.7H54.5V143.6z"/>
            <path d="M674.1 445c-3.8-6-11.5-7.4-17.3-3.4l-123.1 86.6c-2.9 2-6.7 1.2-8.5-1.9l-145-250.5c-3.5-6.1-9-6.1-12.3.1l-14.3 27.6L99 794.4c-3.3 6.3-.3 11.3 6.6 11.3h786.5c6.7 0 9.4-4.8 5.6-10.7L674.1 445z"/>
          </svg>
            @endif

          </a>
          <a class="servises__cat" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
    @endwhile
    <!-- end of the loop -->

    </div>
</div>
    @php wp_reset_postdata(); @endphp

    @else
    <p>{{ _e( 'Извините, cтатей еще нет.' ) }}</p>
    @endif

    {!! get_the_posts_navigation() !!}
  @endsection

