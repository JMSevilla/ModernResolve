<?php

class Post extends DBIntegration {
  public function postModels($table, $column){
    if($this->model_prepare(models_check())){
      $this->bind(":mytable", $table);
      $this->ModelsExecution();
      if($this->ModelsCount()){
        //exists
        echo json_encode(array('Table' => 'Exist'));
      }
      else{
        //not exists
        if ($table === 'user') {
          $sql = iModel_tableCreation($table,$column);
          try {
            $this->ModelsCreated($sql);
            echo json_encode(array('userTable' => 'Created'));
          } catch (PDOException $th) {
            die("user table creation failed: " . $th->getMessage());
          }
        }
        if ($table === 'province') {
          $sql = iModel_tableCreation($table,$column);
          try {
            $this->ModelsCreated($sql);
            echo json_encode(array('provinceTable' => 'Created'));
          } catch (PDOException $th) {
            die("user table creation failed: " . $th->getMessage());
          }
        }
        if ($table === 'course') {
          $sql = iModel_tableCreation($table,$column);
          try {
            $this->ModelsCreated($sql);
            echo json_encode(array('courseTable' => 'Created'));
          } catch (PDOException $th) {
            die("user table creation failed: " . $th->getMessage());
          }
        }
        if ($table === 'class_code') {
          $sql = iModel_tableCreation($table,$column);
          try {
            $this->ModelsCreated($sql);
            echo json_encode(array('class_codeTable' => 'Created'));
          } catch (PDOException $th) {
            die("user table creation failed: " . $th->getMessage());
          }
        }
        if ($table === 'token') {
          $sql = iModel_tableCreation($table,$column);
          try {
            $this->ModelsCreated($sql);
            echo json_encode(array('tokenTable' => 'Created'));
          } catch (PDOException $th) {
            die("user table creation failed: " . $th->getMessage());
          }
        }
      }
    }
  }
}
