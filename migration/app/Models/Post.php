<?php

class Post extends DBIntegration {
  public function postModels($table, $column){
    if($this->model_prepare(models_check())){
      $this->bind(":mytable", $table);
      $this->ModelsExecution();
      if($this->ModelsCount()){
        //exists
        echo json_encode(array('userTable' => 'Exist'));
      }
      else{
        //not exists
        $sql = iModel_tableCreation($table,$column);
        
        try {
          $this->ModelsCreated($sql);
          echo json_encode(array('userTable' => 'Created'));
        } catch (PDOException $th) {
          die("user table creation failed: " . $th->getMessage());
        }
        
      }
    }
  }
}
