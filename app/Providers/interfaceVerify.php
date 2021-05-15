<?php

interface VerifierInterface{
    public function create($table, $data, $column);
    public function GetByEmail($table, $data);
    public function GetAll($table);
    public function patchById($data);
    public function destroyById($data);
  }
  interface VerifyInterface{
    public function verificationInterface($table, $column);
  }

  interface check_verification_health{
    public function verify_health_code($table);
  }