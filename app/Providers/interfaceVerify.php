<?php

interface VerifierInterface{
    public function create($table, $data, $column);
    public function GetByEmail($table, $data);
    public function GetAll($table);
    public function patchById($data);
    public function destroyById($data);
  }