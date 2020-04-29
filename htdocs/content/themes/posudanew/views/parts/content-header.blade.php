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
      <form action="/" method="get">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Поиск среди 10 000 товаров..."/>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
      </form>
    </div>

    <div class="contacts">
      <div class="contacts__label">Звоните нам:</div>
      <div class="contacts__phone">
        <a href="tel:+74872792910">+7(4872)79-29-10</a>
      </div>
    </div>

    <div class="cart">Корзина</div>


  </div><!-- .site-branding -->

  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- Навигационное меню --}}
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