<?php

use App\Provider\WebRoute;

class Route implements WebRoute
{
  public function root($config, $models, $controllers, $query, $interface){
    include_once "../config/" . $config;
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controllers;
    include_once "../DataQuery/" . $query;
    include_once "../Providers/" . $interface;
  }
}
