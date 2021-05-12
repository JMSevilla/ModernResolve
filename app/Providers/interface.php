<?php

interface IRouteProvider{
  public function middleware($config, $models, $controller, $queries, $phpmailer, $smtp, $exception, $interfacer);
}

interface sender{
  function sendEmail();
}

interface IClassCode{
  public function classcodemodels($table);
}

interface VerifyInterface{
  public function verificationInterface($table);
}

interface VerifierInterface{
  public function verifyController($table, $usrtable, $data);
  public function checkverified($table, $data);
}

interface IProvince{
  public function provinceModel($table);
}
interface IProvinceController {
  public function provinceStore($table);
}

interface check_verification_health{
  public function verify_health_code($table);
}
