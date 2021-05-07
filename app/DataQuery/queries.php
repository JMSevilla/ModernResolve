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
