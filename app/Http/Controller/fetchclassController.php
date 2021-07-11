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

    public function editclass_name_controller($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::editclss_query($table))){
                DBIntegrate::bind(":id", $data['id']);
                DBIntegrate::bind(":name", $data['name']);
                if(DBIntegrate::ControllerExecutable()){
                //    $row = DBIntegrate::controller_fetch_all(); 
                   echo json_encode('success');
                //    $clss_nem = $data['class_name'];
                //    DBIntegrate::ControllerPrepare("update quiz_title_table set class_name = $clss_nem where class_name = ");
                }
            }
        }
    }
}