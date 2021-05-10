<?php

namespace App\PostController;
use App\DatabaseIntegration\DBIntegration as DBIntegrate;
use Illuminate\Provider\iPostInterface;
class postController extends DBIntegrate implements iPostInterface{
  public function postControl($table,$data){
    if($this->ControllerPrepare(iController_Insertion($table))){
      $this->bind(":fname", $data['fname']);
      if($this->ControllerExecutable()){
        echo $this->SuccessJSONResponse();
      }
    }
  }
}
