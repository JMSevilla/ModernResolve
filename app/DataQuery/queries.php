<?php

function models_check(){
  $sql = "show tables like :mytable";
  return $sql;
}

function iModel_tableCreation($table){
  $sql = "
  create table if not exists ". $table ." (id int(11) not null auto_increment primary key, firstname varchar(100), createdat datetime default current_timestamp)
  ";
  return $sql;
}

function iController_Insertion($table){
  $sql = "
  insert into ". $table ." values(default, :fname, current_timestamp)
  ";
  return $sql;
}

// emman
function iController_CreateUser($table) {
  $sql = "
    INSERT INTO ".$table." VALUES(default, :classcode, :firstname, :lastname, :birthdate, :age, :contact, :address, :province, :city,
    :street, :zipcode, :email, :password, :sex, :course, :code, current_timestamp)";
    return $sql;
} 

function classcodeCheckup($table){
  $sql = "
  select code from ".$table." where code=:code
  ";
  return $sql;
}

function verificationCodeEntry($table){
  $sql = "
    insert into ".$table." values(default, :vcode, :email, 0, 1, current_timestamp)
  ";
  return $sql;
}

function checkemailifexist($usrtable){
  $sql = "
    select email_address from ".$usrtable." where email_address=:email
  ";
  return $sql;
}

function detectVerificationCode($table){
  $sql = "
    select email from ".$table." where email=:email and isdone=0
  ";
  return $sql;
}

function sanitized_update_verification_code($table){
  $sql = "
    update ".$table." set vcode=:code, sendattempt=sendattempt+1 where email=:email
  ";
  return $sql;
}

function sanitized_sendAttempts($table){
  $sql = "
    select * from ".$table." where email=:email
  ";
  return $sql;
}