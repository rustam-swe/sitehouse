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
  <main>
    <div class="row">
      @include('parts.content-left-sidebar')

      @if(is_home() || is_front_page())
        @include('shop.banner')
      @endif

      @yield('content')
    </div>
  </main>

</div><!-- #content -->

{{-- Подвал сайта --}}
@include('parts.content-footer')

@footer

</body>
</html>
