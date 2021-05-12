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
