<?php

use Illuminate\Provider\WebRoutebackend as webrouting;

class Route implements webrouting 
{
  public function routebackend($config, $models, $controllers, $query, $interface){
    include_once "../config/" . $config;
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controllers;
    include_once "../DataQuery/" . $query;
    include_once "../Providers/" . $interface;
  }
}