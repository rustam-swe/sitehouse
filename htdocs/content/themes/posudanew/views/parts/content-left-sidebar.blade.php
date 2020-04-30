<div class="col-3">
  <div class="sidebar sidebar_left">
    <div class="sidebar__title ucase">
      каталог товаров
    </div>

    @foreach ( $categories as $category )
      <div class="sidebar__item">
        @php(printf( '<a href="%1$s">%2$s</a>',
          get_category_link( $category->term_id ),
          esc_html( $category->name ))
         )
      </div>
    @endforeach
  </div>
</div>