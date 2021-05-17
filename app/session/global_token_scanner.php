<?php

include_once "../config/db.php";
include_once "../DataQuery/queries.php";

if(isset($_POST['token_scanning']) == true){
    if(empty($_POST['email'])){
        echo json_encode(array("statusCode" => "empty"));
    }else{
        scanToken($_POST['table']);
    }
}

function scanToken($table){
    
    if(DBIntegrate::ControllerPrepare(lightBringerBulk::NB_scantoken($table))){
        DBIntegrate::bind(':email', $_POST['email']);
        if(DBIntegrate::ControllerExecutable()) {
            if(DBIntegrate::controller_row()){
                if($row = DBIntegrate::controller_fetch_row()){
                    // update is_valid = 0
                    $isvalid = $row['is_valid'];
                    $valid_date = $row['dateOfValidation'];
                    $expired = $row['tokenExpiration'];
                    $isnew = $row['isnew'];
                    if($valid_date > $expired && $isnew == 0 && $isvalid == 0){
                        token_is_valid_updater();
                    }
                    else{
                        token_scanning_proceed_dashboard();
                    }
                }
            }
            else{
                //nothing just send him to dashboard
                //scanning
                echo json_encode(array("statusCode" => "not exist"));
            }
        }
    }
}

function token_is_valid_updater(){
    if(DBIntegrate::ControllerPrepare(lightBringerBulk::valid_token_updater("token"))){
        DBIntegrate::bind(':email', $_POST['email']);
        if(DBIntegrate::ControllerExecutable()) {
            echo json_encode(array("expired token back to login"));
        }
    }
}

function token_scanning_proceed_dashboard(){
    echo json_encode(array("proceed to dashboard"));
}


