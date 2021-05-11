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
function iModels_table($table) {
  $sql = "
  CREATE TABLE IF NOT EXISTS ".$table." (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, classcode VARCHAR(100), firstname VARCHAR(100), lastname VARCHAR(100), birthdate DATE,
  age VARCHAR(100), contactnumber VARCHAR(100), address VARCHAR(100), province VARCHAR(100), city VARCHAR(100), street VARCHAR(100), zipcode VARCHAR(100),
  email VARCHAR(100), password VARCHAR(100), sex VARCHAR(100), course VARCHAR(100), code VARCHAR(100), created_time DATETIME DEFAULT CURRENT_TIMESTAMP)
  )";
  return $sql;
}

function iController_CreateUser($table) {
  $sql = "
    INSERT INTO ".$table." VALUES(default, :classcode, :firstname, :lastname, :birthdate, :age, :contact, :address, :province, :city,
    :street, :zipcode, :email, :password, :sex, :course, :code, current_timestamp)";
    return $sql;
} 
