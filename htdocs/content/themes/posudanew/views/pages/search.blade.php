@extends('layouts.main')

@section('content')
  @if(have_posts())
    <header class="page-header">
      <h1
        class="page-title">{!! sprintf(esc_html__('Результаты посика: %s', THEME_TD), '<span>'.get_search_query().'</span>') !!}</h1>
    </header>
    <div class="product-grid">
      @while(have_posts())
        @php(the_post())
{{--        @template('parts.content', 'search')--}}
        @template('shop.content', 'product')
      @endwhile
      {!! get_the_posts_navigation() !!}
      @else
        @template('parts.content', 'none')
      @endif
    </div>
@endsection