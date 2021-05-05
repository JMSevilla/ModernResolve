<?php

namespace App\DatabaseIntegration;

use App\Provider\DBContext;
use PDO;
class DBIntegration implements DBContext
{
  private $host = "localhost";
  private $username = "root";
  private $pwd = "";
  private $mydb = "dbtorres";
  private $dataOutbound;
  private $stmt;

  public function connect(){
    try {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->mydb;
    $this->dataOutbound = new PDO($dsn, $this->username, $this->pwd);
    $this->dataOutbound->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $this->dataOutbound;
    }
    catch (PDOException $e) {
      die("could not connect" . $e->getMessage());
    }
  }
  public function model_prepare($sql){
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function bind($val, $param, $type = null)
  {
    if(is_null($type)){
      switch(true){
        case $type == 1:
        $type = PDO::PARAM_INT;
        break;
        default:
        $type = PDO::PARAM_STR;
      }
    }
    return $this->stmt->bindParam($val, $param, $type);
  }
  public function ModelsExecution(){
    return $this->stmt->execute();
  }
  public function ModelsCount(){
    return $this->stmt->rowCount() > 0;
  }
  public function ModelsCreated($sql){
    return $this->connect()->exec($sql);
  }
  public function ControllerPrepare($sql){
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function ControllerExecutable(){
    return $this->stmt->execute();
  }
  public function JSONResponse(){
    return json_encode(array("statusCode" => 200));
  }
}
