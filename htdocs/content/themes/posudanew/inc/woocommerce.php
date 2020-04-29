<?php

  use Themosis\Support\Facades\Action;

  Action::remove('init', ['WC_Template_Loader', 'init'], 10);