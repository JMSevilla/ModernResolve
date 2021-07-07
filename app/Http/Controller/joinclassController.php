<?php
include_once "../config/db.php";
include_once "../DataQuery/queries.php";

class JoinclassController extends DBIntegrate {
    public function join_class($data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::join_classID("class_code", "class_codeID", "code"))){
                // DBIntegrate::bind(":email", $data['email']);
                DBIntegrate::bind(":joinclass", $data['classcode']);
                if(DBIntegrate::ControllerExecutable()){
                    if(DBIntegrate::controller_row()){
                        $row = DBIntegrate::controller_fetch_row();
                        $codeID = $row['class_codeID'];
                        if(DBIntegrate::ControllerPrepare(lightBringerBulk::join_classID("user", "userID", "email_address"))){
                         // DBIntegrate::bind(":email", $data['email']);
                             DBIntegrate::bind(":joinclass", $data['email']);
                             if(DBIntegrate::ControllerExecutable()){
                             $row_user = DBIntegrate::controller_fetch_row(); 
                             $userID = $row_user['userID'];
                             JoinclassController::insert_join($codeID, $userID);
                             }
                         }
                    }
                }
            }
        }
    }

    public function insert_join($codeID, $userID){
        DBIntegrate::ControllerPrepare(lightBringerBulk::insert_class("class_code_map"));
        DBIntegrate::bind(":class_codeID", $codeID);
        DBIntegrate::bind(":userID", $userID);
        if(DBIntegrate::ControllerExecutable()){
            echo json_encode("success");
        }
    }
}