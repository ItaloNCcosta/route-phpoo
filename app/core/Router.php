<?php

namespace app\core;

class Router
{
  public static function run()
  {
    try {
      $routeRegistered = new RoutersFilters();
      $router = $routeRegistered->get();

      $controller = new Controller;
      $controller->execute($router);
    } catch (\Throwable $th) {
      echo $th->getMessage();
    }
  }
}
