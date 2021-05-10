<?php
spl_autoload_register('route_db');

class postController extends DBIntegration {
  public function postControl($table,$data){
    if($this->ControllerPrepare(iController_Insertion($table))){
      $this->bind(":fname", $data['fname']);
      if($this->ControllerExecutable()){
        echo $this->SuccessJSONResponse();
      }
    }
  }
}

function route_db(){
  include_once "../Providers/interface.php";
  configRouting("db.php");
  queriesRouting("queries.php");
}