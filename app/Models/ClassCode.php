<?php

use Providers\DataInterface\IClassCode;
use DBContext\Connection\DBIntegration;
class ClassCode extends DBIntegration implements IClassCode{
    public function classcodemodels($table){
        $ql = new \lightBringer\Request\Queries\lightBringerBulk();
        if($this->ControllerPrepare($ql->classcodeCheckup($table))){
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
