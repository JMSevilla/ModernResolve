<?php
include_once "../config/db.php";
include_once "../DataQuery/queries.php";

class fetchingController extends DBIntegrate {
    public function fetch_class($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::fetchclass($table))){
                DBIntegrate::bind(":email", $data['email']);
                if(DBIntegrate::ControllerExecutable()){
                   $row = DBIntegrate::controller_fetch_all(); 
                   echo json_encode($row);
                }
            }
        }
    }
}