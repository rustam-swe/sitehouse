<?php

  use Themosis\Support\Facades\Action;
  use Themosis\Support\Facades\Filter;

  Action::remove('init', ['WC_Template_Loader', 'init'], 10);

  Action::remove('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
  Action::remove('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
  Action::remove('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

  Action::remove('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
  Action::remove('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
  Action::remove('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

  Action::remove('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
  Action::remove('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

//  Action::remove('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
  Action::remove('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


  Filter::remove('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
  Filter::add('woocommerce_shop_loop_item_title', 'custom_woocommerce_template_loop_product_title');
  function custom_woocommerce_template_loop_product_title() {
    echo '<h2 class="product__title ' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
  }
