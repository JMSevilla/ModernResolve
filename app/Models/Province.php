<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Illuminate\Request\provinceController;
use Providers\DataInterface\IProvinceSelection,    Providers\DataInterface\InterfaceProvince_Load;

 class Province extends provinceController implements IProvinceSelection, InterfaceProvince_Load {
    public function provinceModels($table, $column){
        $data = [
            "dataselected" => $_POST['provinceData']
        ];
        $callback = new provinceController();
        $callback->provinceStore($table, $column, $data);
    }
    public function lodash($table, $column){
        $callback = new provinceController();
        $callback->provinceGet($table, $column);
    }
} 