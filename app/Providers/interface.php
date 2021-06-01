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
  public function getall_teacher();
  public function delete_teacher($table, $data);
  public function getid_teacher($table, $data);
  public function updatepass_admin($table, $data);
  public function getprofadmin($table, $data);
  public function editadminprofile($table, $data);
  public function changepass_admin($table, $data);
  public function insertprov_admin($table, $data);
  public function getall_prov_muni($table);
  public function getbyIdAddress_controller($table, $data);
  public function updateaddressbyId_controller($table, $data);
  public function deleteAddressbyId_controller($table, $data);
  public function agecal_auto($table, $data);
}

Interface ITeacher {
  public function addteacher_model($table);
  public function deleteteacher_model($table);
  public function getall_teacher_model();
  public function getidT_model($table);
  public function updatepassadmin_model($table);
  public function getprofadmin_model($table);
  public function editprofadmin_model($table);
  public function changepass_model($table);
  public function insertprovince_model($table);
  public function getallprovmuni_model($table);
  public function getbyIdAddress_model($table);
  public function updateaddressbyId_modal($table);
  public function deleteAddressbyId_model($table);
  public function agecalauto_model($table);
}

Interface ITeacherDashboard {
  public function getpassteacher_controller($table, $data);
  public function updatePassTeacherDash_controller($table, $data);
  public function updateProfileTeacherDash_controller($table, $data);
}

Interface ITeacherModel {
  public function getpassteacher_model($table);
  public function updatePassTeacherDash_model($table);
  public function updateProfileTeacherDash_model($table);
}