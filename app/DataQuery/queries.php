<?php

namespace lightBringer\Request\Queries;
use NightBringer\Request\Queries\Bulk;


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
  select code from ".$table." where code=:code
  ";
  return $sql;
}

public function verificationCodeEntry($table){
  return $this->NB_updateverification($table);
}

public function checkemailifexist($table, $column){
  return $this->NB_CheckEmail($table, $column);
}

public function detectVerificationCode($table){
  return $this->NB_Detectverificationcode($table);
}

public function sanitized_update_verification_code($table){
  return $this->NB_Sanitized_Update_verification_code($table);
}

public function sanitized_sendAttempts($table){
  return $this->NB_verifyattempts($table);
}

public function sanitized_select_province($table){
  $sql = "
  select distinct province from ".$table."
  ";
  return $sql;
}

public function verified_checker($table){
  return $this->NB_verified_checker($table);
}

public function verifieduser($table){
  return $this->NB_verified_user($table);
}

public function selectedProvinceQuery($table, $column){
    return $this->NB_Selected_Province($table, $column);
}

public function GetAll($table, $column){
    return $this->NB_Province($table, $column);
}

// Tokenization
public function tokenMigrate($table){
  $sql = "
  insert into ".$table." values(default, :token, :email, 1, current_timestamp, now() + INTERVAL 7 DAY)
  ";
  return $sql;
}

public function tokenExpiry($table){
  $sql = "
  select itoken from ".$table." where dateOfValidation > tokenExpiration
  ";
  return $sql;
}

}



