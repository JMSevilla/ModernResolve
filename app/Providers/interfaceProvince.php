<?php

interface IProvinceController{
    public function create($table, $column, $data);
    public function GetAll($table, $column);
    public function GetById($id);
    public function patchById($table, $data);
    public function destroyById($id);
}