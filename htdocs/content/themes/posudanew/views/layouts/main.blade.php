<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
  <meta charset="{{ get_bloginfo('charset') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  @head
</head>
<body @php(body_class())>
<div class="container">
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">{{ esc_html__('Skip to content', THEME_TD) }}</a>
    {{-- Шапка сайта --}}
    @include('parts.content-header')

    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main">
          @yield('content')
        </main>
      </div>
      <!-- Sidebar -->
      @if(is_active_sidebar('sidebar-1'))
        <aside id="secondary" class="widget-area">
          @php(dynamic_sidebar('sidebar-1'))
        </aside>
    @endif
    <!-- End sidebar -->
    </div><!-- #content -->

    {{-- Подвал сайта --}}
    @include('parts.content-footer')

    {{$theme_url}}
  </div><!-- #page -->
</div>
@footer

</body>
</html>
