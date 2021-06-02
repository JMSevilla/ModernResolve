<?php
include_once "../config/db.php";
include_once "../DataQuery/queries.php";
class CodexController extends DBIntegrate implements CodexInterface{
    public function codex_store($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::add_dynamic_classcode($table))){
                DBIntegrate::bind(":code", $data['class_code']);
                DBIntegrate::bind(":name", $data['class_name']);
                if(DBIntegrate::ControllerExecutable()){
                    if(DBIntegrate::ControllerQuery(lightBringerBulk::get_maxID_classcode("class_code"))){
                        if($row = DBIntegrate::controller_fetch_row()){
                             $maxclasscodeid = $row['aydi'];
                            $this->current_email_getter($data, $maxclasscodeid);
                        }
                    }
                }
            }
        }
    }
    public function current_email_getter($data, $maxclasscodeid){
        if(DBIntegrate::ControllerPrepare(lightBringerBulk::get_current_userID("user"))){
            DBIntegrate::bind(":emailadd", $data['class_current_user']);
            DBIntegrate::ControllerExecutable();
            if($myrow = DBIntegrate::controller_fetch_row()){
                $curuid = $myrow['userID'];
                $this->codex_add_mapping($maxclasscodeid, $curuid);
            }
        }
    }
    public function codex_add_mapping($maxclasscodeid, $currentuserID){
        if(DBIntegrate::ControllerPrepare(lightBringerBulk::add_class_code_mapping("class_code_map"))){
            DBIntegrate::bind(":classcodeid", $maxclasscodeid);
            DBIntegrate::bind(":userid", $currentuserID);
            DBIntegrate::ControllerExecutable();
            echo json_encode(array(
                "class_success" => "success"
            ));
        }
    }
}