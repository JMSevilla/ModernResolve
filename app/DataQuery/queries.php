<?php

// include( nightbringer("nightbringer.php") );

include_once("../Thrower/nightbringer.php");

class lightBringerBulk extends Bulk{
    public function models_check(){
  $sql = "show tables like :mytable";
  return $sql;
}

public function iModel_tableCreation($table){
  $sql = "
  create table if not exists ". $table ." (id int(11) not null auto_increment primary key, firstname varchar(100), createdat datetime default current_timestamp)
  ";
  return $sql;
}

public function iController_Insertion($table){
  $sql = "
  insert into ". $table ." values(default, :fname, current_timestamp)
  ";
  return $sql;
}

// emman
public function iController_CreateUser($table) {
  $sql = "
    INSERT INTO ".$table." VALUES(default, :classcode, :firstname, :lastname, :birthdate, :age, :contact, :address, :province, :city,
    :street, :zipcode, :email, :password, :sex, :course, :code, current_timestamp)";
    return $sql;
}

public function classcodeCheckup($table){
  $sql = "
  select code from ".$table." where code=:code and status='open'
  ";
  return $sql;
}

public function verificationCodeEntry($table){
  return Bulk::NB_updateverification($table);
}

public function checkemailifexist($table, $column){
  return Bulk::NB_CheckEmail($table, $column);
}

public function detectVerificationCode($table){
  return Bulk::NB_Detectverificationcode($table);
}

public function sanitized_update_verification_code($table){
  return Bulk::NB_Sanitized_Update_verification_code($table);
}

public function sanitized_sendAttempts($table){
  return Bulk::NB_verifyattempts($table);
}

public function sanitized_select_province($table){
  $sql = "
  select distinct province from ".$table."
  ";
  return $sql;
}

public function verified_checker($table){
  return Bulk::NB_verified_checker($table);
}

public function verifieduser($table){
  return Bulk::NB_verified_user($table);
}

public function selectedProvinceQuery($table, $column){
    return Bulk::NB_Selected_Province($table, $column);
}

public function GetAll($table, $column){
    return Bulk::NB_Province($table, $column);
}

// Tokenization
public function tokenMigrate($table){
  return BULK::NB_token($table);
}

public function tokenExpiry($table){
 return BULK::NB_scantoken($table);
}

public function valid_token_updater($table){
  return BULK::NB_valid_token_updater($table);
}

public function date_valid_token($table){
  return BULK::NB_current_date_updater_token($table);
}

// Emman
public function signupuser_query($table) {
  return BULK::NB_signupuser_query($table);
}

public function firstuser_query($table) {
  return BULK::NB_firstuser($table);
}

public function loginuser_query($table) {
  return BULK::NB_loginuser($table);
}

public function teacheradd_query($table) {
  return BULK::NB_teacheradd($table);
}

//Class Code ID Mapping
public function classCodeMapping($table){
  return BULK::NB_getClassCodeID($table);
}

public function userIDGetter($table){
  return BULK::NB_getuserID($table);
}
public function create_classcode_mapping($table){
  return BULK::NB_class_code_mapping_create($table);
}
}
