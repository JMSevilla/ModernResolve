<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include( dbroute('db.php') );
include( nb_call('queries.php') );

class provinceController extends lightBringerBulk implements IProvinceController{
    public function provinceStore($table, $column, $data){
        if(DBIntegrate::ControllerPrepare(lightBringerBulk::selectedProvinceQuery($table, $column))){
            DBIntegrate::bind(":province", $data['dataselected']);
            DBIntegrate::ControllerExecutable();
            if(DBIntegrate::controller_row()){
                if($row = DBIntegrate::controller_fetch_all()){
                    
                    echo json_encode($row);
                }
            }
        }
        
    }
    public function provinceGet($table, $column){
            if(DBIntegrate::CHECKSERVER()){
                if(DBIntegrate::ControllerQuery(lightBringerBulk::GetAll($table, $column))){
                    if(DBIntegrate::controller_row()){
                        if($row = DBIntegrate::controller_fetch_all()){
                            echo json_encode($row);
                        }
                    }
                }
            }
        }
}

