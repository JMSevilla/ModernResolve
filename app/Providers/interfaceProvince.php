<?php

interface IProvinceController{
    public function create($table, $column, $data);
    public function GetAll($table, $column);
    public function GetById($id);
    public function patchById($table, $data);
    public function destroyById($id);
}


interface IProvinceSelection{
    public function provinceModels($table, $column);
}

interface InterfaceProvince_Load{
    public function lodash($table, $column);
}