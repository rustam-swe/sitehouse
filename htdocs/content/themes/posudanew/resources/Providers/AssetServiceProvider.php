<?php

  namespace Theme\Providers;

  use Illuminate\Support\ServiceProvider;
  use Themosis\Core\ThemeManager;
  use Themosis\Support\Facades\Asset;

  class AssetServiceProvider extends ServiceProvider {
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register() {
      /** @var ThemeManager $theme */
      $theme = $this->app->make('wp.theme');

      Asset::add('bootstrap_styles', 'css/bootstrap.min.css', [], $theme->getHeader('version'))->to('front');
      Asset::add('theme_woo', 'css/woocommerce.css', ['theme_styles'], $theme->getHeader('version'))->to('front');
      Asset::add('slick', 'css/slick.css', ['theme_styles'], $theme->getHeader('version'))->to('front');
      Asset::add('slick-theme', 'css/slick-theme.css', ['theme_styles', 'slick'], $theme->getHeader('version'))->to('front');
      Asset::add('fontawesome', 'css/fontawesome.min.css', ['theme_styles'], $theme->getHeader('version'))->to('front');
      Asset::add('theme_styles', 'css/theme.css', ['bootstrap_styles'], $theme->getHeader('version'))->to('front');

      Asset::add('jquery', 'js/jquery.min.js', [], $theme->getHeader('version'))->to('front');
      Asset::add('bootstrap_js', 'js/bootstrap.min.js', ['jquery'], $theme->getHeader('version'))->to('front');
      Asset::add('slick_js', 'js/slick.min.js', ['jquery'], $theme->getHeader('version'))->to('front');
      Asset::add('theme_js', 'js/theme.min.js', ['jquery', 'slick_js'], $theme->getHeader('version'))->to('front');
    }
  }
