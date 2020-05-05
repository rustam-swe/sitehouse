@if(is_active_sidebar('left-sidebar'))

  <div class="sidebar sidebar_left">
    <div class="sidebar__title ucase">
      <i class="far fa-list-alt"></i> каталог товаров
    </div>

    {{-- Навигационное меню --}}
    @if(has_nav_menu('left-side-menu'))
      @php(
        wp_nav_menu( [
          'theme_location'    => 'left-side-menu',
          'depth'             => 1,
          'container'         => 'div',
          'container_class'   => 'sidebar-nav',
          'menu_class'        => 'sidebar-menu',
          'items_wrap'        => '%3$s',
          'fallback_cb' => '__return_empty_string',
          'link_before' => '<i class="fas fa-arrow-right"></i>'
          ] )
      )
    @else

      @foreach ( $categories as $category )
        <div class="sidebar__item">
          @php(printf( '<a href="%1$s">%2$s</a>',
            get_category_link( $category->term_id ),
            esc_html( $category->name ))
           )
        </div>
      @endforeach

    @endif
  </div>
@endif