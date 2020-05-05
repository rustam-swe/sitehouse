<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\View;

  View::share(['theme_url' => app('wp.theme')->getUrl()]);

  class ShopController extends Controller {
    public $theme_url;
    public $categories;

    function __construct() {
      $this->theme_url = app('wp.theme')->getUrl(); // theme url

      $this->categories = get_categories([
          'taxonomy' => 'product_cat',
          'orderby' => 'name',
          'parent' => 0,
          'hide_empty' => false,
          'exclude' => 15
      ]);
    }

    // Method returns all categories except the first level
    private function getChildCategories($categories) {
      $childCategories = [];
      foreach ($categories as $category) {
        if ($category->parent != 0) {
          $childCategories[] = $category;
        }
      }
      return $childCategories;
    }

    /*
     * Main functions (returns view)
     */
    public function index() {
      $homePageID = get_option('page_on_front');
      $homeSlider = get_field('slider', $homePageID);
      $args = [
          'taxonomy' => 'product_cat',
          'orderby' => 'name',
          'hide_empty' => false,
          'exclude' => 15
      ];
      $topLevelCategories = get_categories($args);
      $childCategories = self::getChildCategories($topLevelCategories);
      return view('layouts.home', ['childCategories' => $childCategories, 'home_slider' => $homeSlider]);
    }

    public function archive() {
      return view('shop.archive', ['categories' => $this->categories]);
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

    public function cart() {
      return view('pages.default',['theme_url' => $this->theme_url]);
    }
    public function checkout() {
      return view('pages.default',['theme_url' => $this->theme_url]);
    }

  }




