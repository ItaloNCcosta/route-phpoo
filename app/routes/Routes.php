<?php

namespace app\routes;

class Routes
{
  public static function get(): array
  {
    return [
      'get' => [
        '/' => 'HomeController@index',
        '/user/[0-9]+' => 'UserController@index',
        '/register' => 'RegisterController@store'
      ],
      'post' => []
    ];
  }
}
