<?php

use Illuminate\Provider\iModelsInterface;
use App\DatabaseIntegration\DBIntegration as DBIntegrate;
use App\PostController\postController;
class Post extends DBIntegrate implements iModelsInterface{
  public function postModels($table){
    if($this->model_prepare(models_check())){
      $this->bind(":mytable", $table);
      $this->ModelsExecution();
      if($this->ModelsCount()){
        //exists
        $data = ['fname' => $_POST['fname']];
        $callback = new postController();
        $callback->postControl($table,$data);
      }
      else{
        //not exists
        $sql = iModel_tableCreation($table);
        $this->ModelsCreated($sql);
        $data = ['fname' => $_POST['fname']];
        $callback = new postController();
        $callback->postControl($table,$data);
      }
    }
  }
}
