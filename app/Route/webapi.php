<?php

use Illuminate\Provider\WebRoute, Illuminate\Provide\lightweightRoute as lightweight;

class Route implements WebRoute
{
  public function root($config, $models, $controllers, $query, $interface){
    include_once "../config/" . $config;
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controllers;
    include_once "../DataQuery/" . $query;
    include_once "../Providers/" . $interface;
  }
  public function LRoot($config, $controller, $rootqueries, $rootinterface){
    include_once "../config/" . $config;
    include_once "../Http/Controller/" . $controller;
    include_once "../DataQuery/" . $rootqueries;
    include_once "../Providers/" . $rootinterface;
  }
}
