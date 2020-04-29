<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class ShopController extends Controller {
    public $theme_url;

    function __construct() {
      $this->theme_url = app('wp.theme')->getUrl();
    }

    public function index() {
      return view('layouts.shop', ['theme_url' => $this->theme_url]);
    }

    public function archive() {
      return view('shop.archive', ['theme_url' => $this->theme_url]);
    }

    public function product_category() {
      return view('shop.archive', ['theme_url' => $this->theme_url]);
    }

    public function product_tag() {
      return view('shop.archive', ['theme_url' => $this->theme_url]);
    }

    public function single() {
      return view('shop.single', ['theme_url' => $this->theme_url]);
    }

  }
