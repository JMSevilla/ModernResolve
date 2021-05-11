<?php

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

  public function model_signup($table){
    if($this->model_prepare(models_check($table))) {
      $this->bind(':mytable', $table);
      if($this->ModelsExecution()) {
        if($this->ModelsCount()) {
          $data = [
            'classcode' => $_POST['classcode'],
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'bdate' => $_POST['bdate'],
            'age' => $_POST['age'],
            'contact' => $_POST['contact'],
            'address' => $_POST['address'],
            'province' => $_POST['province'],
            'city' => $_POST['city'],
            'street' => $_POST['street'],
            'zipcode' => $_POST['zipcode'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'code' => $_POST['code'],
            'sex' => $_POST['sex'],
            'course' => $_POST['course'],
          ];

          $controller = new postController();
          $controller->controller_signup($table, $data);
        }
        else {
          $sql = iModels_table($table);
          $this->ModelsCreated($sql);
          $data = [
            'classcode' => $_POST['classcode'],
            'fname' => $_POST['fname'],
            'lname' => $_POST['lname'],
            'bdate' => $_POST['bdate'],
            'age' => $_POST['age'],
            'contact' => $_POST['contact'],
            'address' => $_POST['address'],
            'province' => $_POST['province'],
            'city' => $_POST['city'],
            'street' => $_POST['street'],
            'zipcode' => $_POST['zipcode'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'code' => $_POST['code'],
            'sex' => $_POST['sex'],
            'course' => $_POST['course'],
          ];

          $controller = new postController();
          $controller->controller_signup($table, $data);
        }
      }
    }
  }
}
