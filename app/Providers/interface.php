<?php
//backend providers.
namespace App\Provider;

interface DBContext
{
  public function connect();
}

interface WebRoute
{
  public function root($config, $models, $controllers, $query, $interface);
}

interface iModelsInterface{
  public function postModels($table);
}

interface iPostInterface{
  public function postControl($table,$data);
}
