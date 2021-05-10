<?php
spl_autoload_register('route_controller');
class Post extends DBIntegration {
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

function route_controller(){
  include_once "../Providers/interface.php";
  configRouting("db.php");
  queriesRouting("queries.php");
  controllersRouting("postController.php");
}