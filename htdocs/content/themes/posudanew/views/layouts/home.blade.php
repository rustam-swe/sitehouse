@extends('layouts.main')

@section('content')
  @if($childCategories)
    <div class="product-grid">
      @foreach($childCategories as $category)
        @php
          $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
          $thumbnail_url = wp_get_attachment_url( $thumbnail_id );
          $category_link = get_category_link($category->term_id)
        @endphp
        <div class="product">
          <a href="{{$category_link}}">
            <div class="product__thumb"><img src="{{$thumbnail_url}}" alt="some img"></div>
            <div class="product__title">{{$category->name}}</div>
          </a>
        </div>
      @endforeach
    </div>

  @else
    По вашему запросу ничего не найдено
  @endif
@endsection

@section('seo-block')
  <div class="seo-info">
    <h1 class="ucase">Интернет-магазин посуды www.posudanew.ru</h1>
    <p>Посуда – это неотъемлемая часть любой кухни. Именно она ежедневно используется всеми домочадцами, она долгое
      время способна сохранять свои изначальные качества и иногда некоторые изделия передаются из поколения в поколение.
      На нашем сайте представлена хорошая посуда, с отличными качественными характеристиками и порой уникальными
      свойствами. При этом каждое изделие имеет свои особенности, которые заслуживают пристального внимания.</p>
  </div>
@endsection