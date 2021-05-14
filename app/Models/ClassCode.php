<?php

include( dbroute('db.php') );
include( nb_call('queries.php') );

class ClassCode implements IClassCode{
    public function classcodemodels($table){
       
        if(DBIntegrate::ControllerPrepare(lightBringerBulk::classcodeCheckup($table))){
            $data=['code' => $_POST['classcode']];
            DBIntegrate::bind(":code", $data['code']);
            DBIntegrate::ControllerExecutable();
            if(DBIntegrate::controller_row()){
                echo json_encode(array("exist" => "exist"));
            }else{
                echo json_encode(array("notexist" => "not exist"));
            }
        }
    }

}
