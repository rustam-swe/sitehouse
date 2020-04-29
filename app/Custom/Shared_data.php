<?php
  class Shared_data{
    public $theme_url;

    function __construct() {
      $this->theme_url = app('wp.theme')->getUrl();
    }

  }