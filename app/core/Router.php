<?php

namespace app\core;

class Router
{
  public static function run()
  {
    $routeRegistered = new RoutersFilters();
    $router = $routeRegistered->get();

    dd($router);
  }
}
