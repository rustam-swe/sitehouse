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
  {{-- Шапка сайта --}}
  @include('parts.content-header')
  <div class="content-wrapper">
    @php($show)
    @if(!is_product() && !is_cart() && !is_checkout())
      <aside class="aside">
        @include('parts.content-left-sidebar')
      </aside>
      <main class="main">
        @else
          <main class="main_full-width">
            @endif


            @if(is_home() || is_front_page())
              @include('shop.banner')
            @endif

            @yield('content')

            @yield('seo-block')

          </main>
  </div>

</div><!-- #content -->

{{-- Подвал сайта --}}
@include('parts.content-footer')

@footer

</body>
</html>
