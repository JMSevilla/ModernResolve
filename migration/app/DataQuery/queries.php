<?php

function models_check(){
  $sql = "show tables like :mytable";
  return $sql;
}

function iModel_tableCreation($table, $column){
  $sql = "
  create table if not exists ". $table ." ".$column."
  ";
  return $sql;
}

function iController_Insertion($table){
  $sql = "
  insert into ". $table ." values(default, :fname, current_timestamp)
  ";
  return $sql;
}

function TeacherInsertSprocQuery (){
  $sql = "
  DROP PROCEDURE IF EXISTS teacher_insert;
  CREATE DEFINER=`root`@`localhost`PROCEDURE`teacher_insert`(
  IN firstname VARCHAR (255),
  IN lastname VARCHAR (255),
  IN birth_date DATE,
  IN age INT,
  IN gender VARCHAR (255),
  IN contact_number VARCHAR (255),
  IN province VARCHAR (255),
  IN municipality VARCHAR (255),
  IN zip_code VARCHAR (255),
  IN address TEXT,
  IN email_address VARCHAR (255),
  IN password VARCHAR (255),
  IN is_verified CHAR (1),
  IN is_type CHAR (1),
  IN is_activate CHAR (1),
  IN is_token_verified CHAR (1),
  IN apikey VARCHAR (255)
  )
  BEGIN
  
  insert into user values(default, firstname, lastname, birth_date, age, gender, contact_number, province, municipality, zip_code,
  address, email_address, password, is_verified, is_type, is_activate, is_token_verified, apikey, current_timestamp);
  
  END
  ";
  return $sql;
}

function sproc_insertQuery(){
  $sql = "
  DROP PROCEDURE IF EXISTS sproc_insert;
  CREATE DEFINER=`root`@`localhost`PROCEDURE`sproc_insert`(
  IN firstname VARCHAR (255),
  IN lastname VARCHAR (255),
  IN birth_date DATE,
  IN age INT,
  IN gender VARCHAR (255),
  IN contact_number VARCHAR (255),
  IN province VARCHAR (255),
  IN municipality VARCHAR (255),
  IN zip_code VARCHAR (255),
  IN address TEXT,
  IN email_address VARCHAR (255),
  IN password VARCHAR(255),
  IN is_verified CHAR (1),
  IN is_type CHAR (1),
  IN is_activate CHAR (1),
  IN is_token_verified CHAR (1),
  IN apikey VARCHAR (255)
  )
  BEGIN
   
  insert into user values (default, firstname, lastname, birth_date, age, gender, contact_number, province, municipality, zip_code,
  address, email_address, password, is_verified, is_type, is_activate, is_token_verified, apikey, current_timestamp);
   
  END
  ";
  return $sql;
}