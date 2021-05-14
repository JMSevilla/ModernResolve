<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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