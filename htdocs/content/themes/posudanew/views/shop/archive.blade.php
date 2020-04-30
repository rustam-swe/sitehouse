@extends('layouts.main')

@section('content')

  @if(woocommerce_product_loop())
    <div class="col-9">
      <div class="product-grid">
        @if(wc_get_loop_prop('total'))
          @while(have_posts())
            @php(the_post())

            @php(do_action('woocommerce_shop_loop'))

            @template('shop.content-product')
          @endwhile
        @endif
      </div>
    </div>

    @php(do_action('woocommerce_after_shop_loop'))
  @else
    @php(do_action('woocommerce_no_products_found'))
  @endif

  @php(do_action('woocommerce_after_main_content'))

@endsection