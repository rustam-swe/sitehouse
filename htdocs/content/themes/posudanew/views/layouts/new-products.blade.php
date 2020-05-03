@extends('layouts.main')

@section('new-products-grid')
  @if(woocommerce_product_loop())
    <div class="product-grid">
      @if(wc_get_loop_prop('total'))
        @while(have_posts())
          @php(the_post())

          @php(do_action('woocommerce_shop_loop'))

          @template('shop.content-product')
        @endwhile
      @endif
    </div>
  @else
    @php(do_action('woocommerce_no_products_found'))
  @endif
  @endsection