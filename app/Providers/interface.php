<?php
//backend providers.
namespace Illuminate\Provider;

interface DBContext
{
  public function connect();
}

interface WebRoute
{
  public function root($config, $models, $controllers, $query, $interface);
}

interface lightweightRoute{
  public function LRoot($config, $controller, $rootqueries, $rootinterface);
}

interface iModelsInterface{
  public function postModels($table);
}

interface iPostInterface{
  public function postControl($table,$data);
}
