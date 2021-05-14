<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Illuminate\Request;
use Providers\DataInterface\IProvinceController;
use DBContext\Connection\DBIntegration;
use lightBringer\Request\Queries\lightBringerBulk;

class provinceController extends DBIntegration implements IProvinceController{
    public function provinceStore($table, $column, $data){
        $ql = new \lightBringer\Request\Queries\lightBringerBulk();
        if($this->ControllerPrepare($ql->selectedProvinceQuery($table, $column))){
            $this->bind(":province", $data['dataselected']);
            $this->ControllerExecutable();
            if($this->controller_row()){
                if($row = $this->controller_fetch_all()){
                    
                    echo json_encode($row);
                }
            }
        }
        
    }
    public function provinceGet($table, $column){
        $data = new \lightBringer\Request\Queries\lightBringerBulk();
            if($this->CHECKSERVER()){
                if($this->ControllerQuery($data->GetAll($table, $column))){
                    if($this->controller_row()){
                        if($row = $this->controller_fetch_all()){
                            echo json_encode($row);
                        }
                    }
                }
            }
        }
}



