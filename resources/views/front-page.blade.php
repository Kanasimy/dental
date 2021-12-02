{{--
  Template Name: Главная
--}}

@extends('layouts.app')

@section('content')
  <section class="main-slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="@asset('images/banner1.jpg')" class="img-fluid" alt="" >
          <div class="carousel-caption d-none d-md-block">
            <h2 class="main-slider__header">Лечение алкоголизма</h2>
            <p class="main-slider__text">Мы практикуем комплексный подход к лечению заболевания, ведь <br> алкогольная зависимость затрагивает все сферы жизни человека!</p>
            <button class="btn-order">
                <span class="text">Оставить заявку</span>
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
              </button>
          </div>
        </div>
        <!--div class="carousel-item">
          <img src="@asset('images/banner1.jpg')" class="d-block w-100" alt="" >
          <div class="carousel-caption d-none d-md-block">
            <h2>Лечение никотиновой зависимости</h2>
            <p>Some representative placeholder content for the second slide.</p>
            <button class="btn btn-order">Оставить заявку</button>
          </div>
        </div-->
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
  <section class="main-content">
    <div class="content-fix">
        @while(have_posts()) @php the_post() @endphp
        @include('partials.content-page')
        @endwhile
    </div>
  <section>
  <section class="servises animate">
    <div class="container-fix">
      <h3 class="header-text">Популярные услуги</h3>
      <div class="description-text">
        Программа борьбы с зависимостями, хоть и имеет общие для всех аспекты, для каждого обратившегося разрабатывается индивидуально с учетом его характерологических особенностей.
      </div>
        <div class="row servises__list">
          <div class="col col-3">
            <div class="servises__item">
            <a href=""><img width="224px" src="@asset('images/real-life_09.jpg')" alt="Лечение алкоголизма"></a>
            <a href="" class="servises__cat">Лечение алкоголизма</a>
            </div>
          </div>
          <div class="col col-3">
            <div class="servises__item">
            <a href=""><img width="224px" src="@asset('images/real-life_03.jpg')" alt="Кодирование"></a>
            <a href="" class="servises__cat">Кодирование</a>
            </div>
          </div>
          <div class="col col-3">
            <div class="servises__item">
            <a href=""><img width="224px" src="@asset('images/real-life_12.jpg')" alt="Психотерапия"></a>
            <a href="" class="servises__cat">Психотерапия</a>
            </div>
          </div>
          <div class="col col-3">
            <div class="servises__item">
            <a href=""><img width="224px" src="@asset('images/real-life_06.jpg')" alt="Вывод из запоя"></a>
            <a href="" class="servises__cat">Вывод из запоя</a>
            </div>
          </div>
        </div>
      <button class="btn-order btn-order--servises">
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
      </button>
      </div>
  </section>
  <section class="how-work animate">
    <h3 class="header-text">Как мы работаем</h3>
    <div class="description-text">
      Для помощи пациентам мы воздействуем по всем направлениям.
    </div>
    <div class="how-work__shema">
      <img src="@asset('images/how.png')" alt="">
      <ol class="how-work__list">
        <li><span>1.</span>Связываетесь с нами любым удобным способом</li>
        <li><span>2.</span>Получаете устную консультацию и алгоритм дальнейших действий</li>
        <li><span>3.</span>Проходите курс лечения, соответствующих вашей конкретной ситуации</li>
        <li><span>4.</span>Проходите курс реабилитации с поддержкой нашими специалистами</li>
      </ol>
    </div>
    <!-- /.how-work__img -->
  </section>
  <!-- /.how-work -->
  <section class="staff">
    <h3 class="header-text">Наши специалисты</h3>
    <div class="container-fix">
      <div class="row staff__item animate">
        <div class="col-lg-3 p-0">
          <img src="@asset('images/kolmanko.jpg')" alt="Кольмако Денис Эдуардович">
        </div>
        <div class="col-lg-9 p-0 staff__description">
          <h4 class="staff__name">Кольмако Денис Эдуардович</h4>
          <div class="staff__year"><span>Стаж:</span>10 лет</div>
          <div class="staff__info"><span>Подробнее</span>
            Главный врач клиники психического здоровья и лечения зависимостей, кандидат медицинских наук, врач психиатр-нарколог, психотерапевт, психиатр.</div>
          <div class="btn btn-outline-primary staff__btn btn-sm">Записаться на прием</div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row staff__item animate">
        <div class="col-lg-3 p-0">
          <img src="@asset('images/astapov.jpg')" alt="Астапов Эдуард Денисович">
        </div>
        <div class="col-lg-9 p-0 staff__description">
          <h4 class="staff__name">Астапов Эдуард Денисович</h4>
          <div class="staff__year"><span>Стаж:</span>7 лет</div>
          <div class="staff__info"><span>Подробнее</span>
            Профессор, доктор медицинских наук. Врач психиатр, психиатр-нарколог, консультант, научный руководитель программ реабилитаций невротических расстройств.
          </div>
          <div class="btn btn-outline-primary staff__btn btn-sm">Записаться на прием</div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row staff__item animate">
        <div class="col-lg-3 p-0">
          <img src="@asset('images/sofiulina.jpg')" alt="Софиулина Наталья Борисовна">
        </div>
        <div class="col-lg-9 p-0 staff__description">
          <h4 class="staff__name">Софиулина Наталья Борисовна</h4>
          <div class="staff__year"><span>Стаж:</span>12 лет</div>
          <div class="staff__info"><span>Подробнее</span>
            Профессор. Психиатр, врач высшей категории, доктор медицинских наук, главный научный сотрудник, руководитель группы психиатрических исследований.
          </div>
          <div class="btn btn-outline-primary staff__btn btn-sm">Записаться на прием</div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row staff__item animate">
        <div class="col-lg-3 p-0">
          <img src="@asset('images/tihonov.jpg')" alt="Кольмако Денис Эдуардович">
        </div>
        <div class="col-lg-9 staff__description p-0">
          <h4 class="staff__name">Тихонов Александр Борисович</h4>
          <div class="staff__year"><span>Стаж:</span>6 лет</div>
          <div class="staff__info"><span>Подробнее</span>
            Профессор, доктор медицинских наук, врач психиатр, психотерапевт.
          </div>
          <div class="btn btn-outline-primary staff__btn btn-sm">Записаться на прием</div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.staff -->
  <section class="advantages animate">
    <div class="container-fix">
      <h3 class="header-text">Наркологическая клиника Real life- это:</h3>
      <div class="description-text">
        Современное, превосходно оборудованное медицинское учреждение для<br>
        лечения пациентов с алкогольной зависимостью, неврозами и депрессиями,<br>
        оказывающее весь спектр наркологических и психотерапевтических услуг.
      </div>
      <div class="advantages__scheme">

        <img class="advantages__img" src="@asset('images/advantages.jpg')">
        <ul class="advantages__list">
          <li>Более 20 лет опыта <br>
            лечения алкоголизма
          </li>
          <li>95% успешных случаем <br>
            лечения
          </li>
          <li>Готовность помочь вам 24/7 <br>
            без выходных
          </li>
          <li>Работа с самыми тяжелыми <br>
            случаями
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- /.advantages -->
  <section class="certificates animate">
    <div class="container-fix">
      <h3 class="header-text">Наши сертификаты</h3>
      <div class="owl-carousel certificates-slider">
      <div class="carousel__item">
        <img src="@asset('images/sert-1.jpg')" alt="" class="carousel__img">
      </div>
      <div class="carousel__item">
        <img src="@asset('images/sert-2.jpg')" alt="" class="carousel__img">
      </div>
      <div class="carousel__item">
        <img src="@asset('images/sert-3.jpg')" alt="" class="carousel__img">
      </div>
      <div class="carousel__item">
        <img src="@asset('images/sert-4.jpg')" alt="" class="carousel__img">
      </div>
        <div class="carousel__item">
          <img src="@asset('images/sert-1.jpg')" alt="" class="carousel__img">
        </div>
        <div class="carousel__item">
          <img src="@asset('images/sert-3.jpg')" alt="" class="carousel__img">
        </div>
    </div>
    </div>
  </section>
  <!-- /.certificates -->
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
  <!-- /.patients -->
  <section class="prices animate">
    <div class="container-fix">
    <h3 class="header-text">цены нашей наркологической клиники</h3>
    <div class="description-text">Осмотр врача психиатра-нарколога. (консультация бесплатная). Доктор поможет вам выбрать удобную и самое главное эффективную тактику лечения (однократная капельница, дектоксикация в дневном стационаре или круглосуточное пребывание в клинике).</div>
    <table class="table table--prices">
      <thead>
        <tr>
          <th>Наименование услуги</th>
          <th>Цена</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>Вызов врача на дом</td>
            <td>4000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          <tr>
            <td>Стационарное лечение</td>
            <td>5000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          <tr>
            <td>Кодирование от алкогализма</td>
            <td>от 7000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          <tr>
            <td>Лечение никотиновой зависимости</td>
            <td>7000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          <tr>
            <td>Курс интенсивного лечения</td>
            <td>от 7000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          <tr>
            <td>Стандартная двухместная палата. Одни сутки (3 капельницы)</td>
            <td>5000 руб.
              <button class="btn btn-outline-primary btn-sm">Заказать услугу</button>
            </td>
          </tr>
          </tbody>
    </table>
    </div>
  </section>
  <!-- /.target -->
  <section class="reviews animate">
    <div class="container-fix">
    <h3 class="header-text">Отзывы о работе</h3>
    <div class="reviews__slider">
      @php echo do_shortcode('[testimonial_view id="1"]') @endphp
    </div>
    </div>
    </section>

  <section class="about animate">
    <div class="container-fix">
    <h3 class="header-text">О Клинике</h3>
  <div class="about__text">
    Наркологический центр «Real Life» в Воронеже — это современное, превосходно оборудованное медицинское учреждение для лечения пациентов с алкогольной зависимостью, неврозами и депрессиями, оказывающее весь спектр наркологических и психотерапевтических услуг. В нашей клинике работают опытные специалисты, которые уже на протяжении много лет лечат пациентов от такого заболевания как алкоголизм. Для нас каждый пациент индивидуален. Поэтому программа борьбы с зависимостями, хоть и имеет общие для всех аспекты, для каждого обратившегося разрабатывается индивидуально с учетом его характерологических особенностей, длительности и тяжести зависимости, состояния здоровья и других параметров. Мы практикуем комплексный подход к лечению заболевания. Алкогольная зависимость затрагивает все сферы жизни человека – физическую, психологическую, нравственную, социальную. Для помощи пациентам мы воздействуем по всем направлениям. Этапы лечения алкогольной зависимости в клинике «Real Life»:
    <ul>
      <li>Осмотр врача психиатра-нарколога. (консультация бесплатная). Доктор поможет вам выбрать удобную и самое
        главное эффективную тактику лечения (однократная капельница, дектоксикация в дневном стационаре или
        круглосуточное пребывание в клинике)
      </li>
      <li>С целю купирования абстинентного синдрома в стационаре вам поставят 3 капельницы. Доктор дежурит
        круглосуточно и при необходимости корректирует назначенное лечение. Количество койко-дней зависит от тяжести
        состояния пациента.
      </li>
      <li>Этап активного противоалкогольного лечения. Используем медикаментозные и психотерапевтические методы.</li>
      <li>Диспансерное наблюдение. После выписки из стационара вам назначат лекарственные препараты с целью
        предотвращения рецидива заболевания. Индивидуальная и семейная психотерапия в течение года.
      </li>
    </ul></div>
    </div>
    <div class="about__gallery">
      <a class="about__img" href=""><img src="@asset('images/real-life_35.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_37.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_39.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_41.jpg')" alt=""></a>

      <a class="about__img" href=""><img src="@asset('images/real-life_41.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_39.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_37.jpg')" alt=""></a>
      <a class="about__img" href=""><img src="@asset('images/real-life_35.jpg')" alt=""></a>
    </div>
    <!-- /.about__gallery --></section>
  <!-- /.about -->
  <section class="FAQ animate">
    <div class="container-fix">
    <h3 class="header-text">Ответы на популярные вопросы</h3>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Капельница от запоя как это работает?
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Принцип действия капельницы заключается в постепенном введении определенного состава необходимых медикаментов, которые восстанавливают необходимый баланс витаминов,  микроэлементов и ускоряют выведение токсичных продуктов распада алкоголя. В процессе этого снижается концентрация алкоголя в крови, нормализуются физиологические процессы организма, ускоряется детоксикация и налаживается водно-солевой баланс.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Как работает кодировка по методу Довженко?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Some placeholder content for the second accordion panel. This panel is hidden by default.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Вывод из состояния похмелья
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Вывод из состояния похмелья
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSix">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Вывод из состояния похмелья
            </button>
          </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
          <div class="card-body">
            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSeven">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Вывод из состояния похмелья
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
          <div class="card-body">
            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /.FAQ -->
  <section class="map animate">
    <div class="container-fix">
    <h3 class="header-text">Как к нам добраться</h3>
      <address class="map__address">
        <em>Наш адрес:</em> <br>
        г. Воронеж, ул. Генерала Лизюкова, д. 61 в
      </address>
    <address>
      <span>Наш адрес</span>
      г. Воронеж, ул. Генерала Лизюкова, д. 61 в
      <div class="map__container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d583.4361033937737!2d39.15782761609884!3d51.705302700177626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413b28cf7c572d1b%3A0xa43dea31bef4fd3f!2z0YPQuy4g0JPQtdC90LXRgNCw0LvQsCDQm9C40LfRjtC60L7QstCwLCA2MdCSLCDQktC-0YDQvtC90LXQtiwg0JLQvtGA0L7QvdC10LbRgdC60LDRjyDQvtCx0LsuLCAzOTQwNTM!5e0!3m2!1sru!2sru!4v1636611512062!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </address>
    </div>
  </section>
    <h2>{{ $greeting }} friend!</h2>
@endsection
