<?php

/* 
Create interface for single functions only.

try practicing creating new interface file into our providers folder with multiple functions.
*/



interface sender{
  function sendEmail();
}

interface IClassCode{
  public function classcodemodels($table);
}





interface IProvince{
  public function provinceModel($table);
}








interface IConnect{
    public function connect();
}

interface IDBController{
  public function dbroute($db);
}




// Emman
Interface ISignupController {
  public function signupuser_controller($table, $data);
}

Interface ISignupModel {
  public function signup_model($table);
}