<?php

namespace app\routes;

class Routes
{
  /**
   * Routes list
   * [a-zA-z]+ pode receber parametros de texto na url como slug, nome, etc. 
   * O [a-z]+ indica que pode ser texto minusculo. Ja o [A-Z]+ indica que pode ser maiusculo.
   * [0-9]+ pode receber parametros numericos na url como ids.
   */
  public static function get(): array
  {
    return [
      'get' => [
        '/' => 'HomeController@index',
        '/user/[a-zA-Z]+/edit/[0-9]+' => 'UserController@edit',
        '/register' => 'RegisterController@store'
      ],
      'post' => []
    ];
  }
}
