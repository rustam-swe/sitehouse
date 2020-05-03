<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class ShopController extends Controller {
    public $theme_url;
    public $categories;

    function __construct() {
//      $this->theme_url = app('wp.theme')->getUrl(); TODO: remove before deploy

      $this->categories = get_categories([
          'taxonomy' => 'product_cat',
          'orderby' => 'name',
          'parent' => 0,
          'hide_empty' => false,
          'exclude' => 15
      ]);
    }

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

  }
