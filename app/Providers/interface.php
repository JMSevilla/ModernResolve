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

Interface ILoginController {
  public function loginuser_controller($table, $data);
  public function tokenization($table, $data);
}

Interface ILogin {
  public function loginuser_model($table);
}

Interface ITeacherAdd {
  public function teacher_add($table, $data);
}

Interface ITeacher {
  public function addteacher_model($table);
}