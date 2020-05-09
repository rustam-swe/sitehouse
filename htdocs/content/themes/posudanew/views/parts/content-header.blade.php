<header class="header">
  <div class="site-branding">
    <div class="logo">
      @if(get_custom_logo())
        <a href="{{ esc_url(home_url('/')) }}">
          {!! get_custom_logo() !!}
        </a>
      @else
        {{ get_bloginfo('name') }}
      @endif
    </div>

    <div class="search-bar">
      <form action="{{esc_url( home_url( '/' ) )}}" method="get" role="search">
        <input type="text" name="s" id="s" value="<?php the_search_query(); ?>"
               placeholder="Поиск среди 10 000 товаров..."/>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
      </form>
    </div>

    <div class="contacts">
      <div class="contacts__icon"><i class="fas fa-phone-alt"></i></div>
      <div class="contacts__info">
        <div class="contacts__label">Звоните нам:</div>
        <div class="contacts__phone">
          <a href="tel:{{the_field('phone', 'options')}}">{{the_field('phone', 'options')}}</a>
        </div>
      </div>
    </div>

    {{--    <div class="cart">@php(woocommerce_mini_cart( [ 'list_class' => 'my-css-class' ] ))</div>--}}
    <div class="header-cart">
      <div class="header-cart__icon"><i class="fas fa-shopping-cart"></i></div>
      <div class="header-cart__info">
        <div class="header-cart__title">
          <a href="{{esc_url( wc_get_cart_url() )}}">Корзина</a></div>
        <div class="header-cart__content">
          @if(WC()->cart->get_cart_contents_count() > 1)
            @php($products_total_count = WC()->cart->get_cart_contents_count())
            @php($total_price = (int)WC()->cart->get_total(''))
            {{$products_total_count}} x {{$total_price}}
          @else
            Торваров нет
          @endif
        </div>
        <div class="authorization">
          {{-- login and return to the current page --}}
          @if(is_user_logged_in())
            <a href="{{wp_logout_url(get_permalink())}}" class="log-in-out">Выйти</a>
          @else
            <a href="{{wp_registration_url()}}" class="register">Регистрация</a>
            /
            <a href="{{wp_login_url(get_permalink())}}" class="log-in-out">Войти</a>
          @endif
        </div>
      </div>
    </div>

  </div><!-- .site-branding -->

  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- Main nav menu --}}
      @php(
        wp_nav_menu( array(
          'theme_location'    => 'header-menu',
          'depth'             => 1,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
          ) )
      )

    </div>
  </nav><!-- #site-navigation -->
</header><!-- #masthead -->