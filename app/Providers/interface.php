<?php

interface IRouteProvider{
  public function middleware($config, $models, $controller, $queries);
}

