@if($home_slider)
  <div class="home-slider">

    @foreach($home_slider as $slide)
      <div
              class="home-slider__slide"
              style="background-image:url({{$slide['photo']}});">
      </div>
    @endforeach
  </div>
@endif