@extends('layouts.main')

@section('content')
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title">{!! esc_html__('Страница не найдена.', THEME_TD) !!}</h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <p>{{ esc_html__('Попробуйте ввести другой запрос', THEME_TD) }}</p>
            {!! get_search_form(false) !!}
        </div>
    </section>
@endsection