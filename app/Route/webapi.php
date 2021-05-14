<?php

class web_api implements IRouteProvider{
  public function middleware($models, $controller, $queries, $phpmailer, $smtp, $exception, $interfacer, $nightbringer){
    include_once "../Models/" . $models;
    include_once "../Http/Controller/" . $controller;
    include_once "../DataQuery/" . $queries;
    include_once "../vendor/phpmailer/phpmailer/src/" . $phpmailer;
    include_once "../vendor/phpmailer/phpmailer/src/" . $smtp;
    include_once "../vendor/phpmailer/phpmailer/src/" . $exception;
    include_once "../Providers/" . $interfacer;
    include_once "../Thrower/" . $nightbringer;
  }
  
}

function dbroute($routes){
  return "../config/" . $routes;
}

function nb_call($call){
  return "../DataQuery/" . $call;
}

function nightbringer($call){
  return "../Thrower/" . $call;
}