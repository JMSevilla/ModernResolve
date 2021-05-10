<?php

include_once "../Providers/interface.php";

class web_api implements IRouteProvider{
  public function middleware($config,$models, $controller, $queries, $phpmailer, $smtp, $exception){
    include_once "../config/" . $config;
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controller;
    include_once "../DataQuery/" . $queries;
    include_once "../vendor/phpmailer/phpmailer/src/" . $phpmailer;
    include_once "../vendor/phpmailer/phpmailer/src/" . $smtp;
    include_once "../vendor/phpmailer/phpmailer/src/" . $exception;
  }
}