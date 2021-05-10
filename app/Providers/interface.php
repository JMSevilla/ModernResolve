<?php
//backend providers.



function configRouting($configRoute){
  return include_once "../config/" . $configRoute;
}

function modelsRouting($modelsRoute){
  return include_once "../Models/" . $modelsRoute;
}

function controllersRouting($ControllerRoutes){
  return include_once "../Http/Controller/" . $ControllerRoutes;
}

function queriesRouting($queries){
  return include_once "../DataQuery/" . $queries;

}