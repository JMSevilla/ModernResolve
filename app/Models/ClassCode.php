<?php

class ClassCode extends DBIntegration implements IClassCode{
    public function classcodemodels($table){
        if($this->ControllerPrepare(classcodeCheckup($table))){
            $data=['code' => $_POST['classcode']];
            $this->bind(":code", $data['code']);
            $this->ControllerExecutable();
            if($this->controller_row()){
                echo json_encode(array("exist" => "exist"));
            }else{
                echo json_encode(array("notexist" => "not exist"));
            }
        }
    }
}