@extends('layouts.main')

@section('content')
  {{print_r(WC())}}
  @php(do_action( 'woocommerce_before_cart' ))


  <form class="woocommerce-cart-form" action="{{esc_url( wc_get_cart_url() )}}" method="post">
    @php( do_action( 'woocommerce_before_cart_table' ))

    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
      <thead>
      <tr>
        <th class="product-remove">&nbsp;</th>
        <th class="product-thumbnail">&nbsp;</th>
        <th class="product-name">@php( esc_html_e( 'Product', 'woocommerce' ) )</th>
        <th class="product-price">@php( esc_html_e( 'Price', 'woocommerce' ) )</th>
        <th class="product-quantity">@php( esc_html_e( 'Quantity', 'woocommerce' ) )</th>
        <th class="product-subtotal">@php( esc_html_e( 'Subtotal', 'woocommerce' ) )</th>
      </tr>
      </thead>
      <tbody>
      @php( do_action( 'woocommerce_before_cart_contents' ) )


{{--      @foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item )--}}
{{--        @php--}}
{{--          // $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );--}}
{{--        //echo $cart_item_key . " - " . $cart_item;--}}

{{--        @endphp--}}
{{--      @endforeach--}}
      </tbody>
    </table>
  </form>


@endsection
