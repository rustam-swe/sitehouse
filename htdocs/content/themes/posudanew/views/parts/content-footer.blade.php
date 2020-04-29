<footer class="footer">
  <div class="container">
    <div class="row footer-top">
      <div class="footer-copy">
        <p>Posudanew.ru - интернет -магазин посуды в Туле!</p>
        <p>(c) 2016 Все права защищены.</p></div>

      <div class="footer-contacts contacts">
        <div class="contacts__phone">
          <a href="tel:+74872792910">+7(4872)79-29-10</a>
        </div>
      </div>
      <div class="footer-meters">
        {{get_theme_file_uri('/imgs/meter.png')}}
        <br>
        {{get_theme_file_path('meter.png')}}
        <a href="#" class="meter"><img src="{{get_theme_file_uri('meter.png')}}" alt="meter"></a>
        <a href="#" class="meter"><img src="{{get_theme_file_path('meter.png')}}" alt="meter"></a>
      </div>
    </div>

    <div class="row footer-bottom">
      <div class="authors-zone">
        <a href="https://domsaitov.ru/">Создание и продвижение сайтов</a>
{{--        <img src="{{$theme_url}}/dist/imgs/creators-logo.png" alt="logo" class="authors-logo">--}}
      </div>
    </div>
  </div>
</footer>