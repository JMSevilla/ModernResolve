<?php


interface IRouteProvider{
  public function middleware($models, $controller, $queries, $phpmailer, $smtp, $exception, $interfacer, $nightbringer);
}

interface sender{
  function sendEmail();
}

interface IClassCode{
  public function classcodemodels($table);
}

interface VerifyInterface{
  public function verificationInterface($table, $column);
}

interface VerifierInterface{
  public function verifyController($table, $data, $column);
  public function checkverified($table, $data);
}

interface IProvince{
  public function provinceModel($table);
}


interface check_verification_health{
  public function verify_health_code($table);
}

interface IProvinceSelection{
    public function provinceModels($table, $column);
}

interface IProvinceController{
    public function provinceStore($table, $column, $data);
    public function provinceGet($table, $column);
}
interface InterfaceProvince_Load{
    public function lodash($table, $column);
}
interface IConnect{
    public function connect();
}

interface IDBController{
  public function dbroute($db);
}