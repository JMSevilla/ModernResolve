<?php

include_once "../Providers/interface.php";

class web_api implements IRouteProvider{
  public function middleware($config,$models, $controller, $queries){
    include_once "../config/" . $config;
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controller;
    include_once "../DataQuery/" . $queries;
  }
}