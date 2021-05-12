<?php

interface IRouteProvider{
  public function middleware($config, $models, $controller, $queries, $phpmailer, $smtp, $exception);
}

interface sender{
  function sendEmail();
}
