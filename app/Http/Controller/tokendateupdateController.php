<?php

include( dbroute('db.php') );
include_once "../DataQuery/queries.php";

class TokenUpdateController implements TokenUpdaterInterface{
    public function create($table, $request){}
    public function patchByEmail($table, $request){
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::date_valid_token($table))){
                DBIntegrate::bind(":email", $request);
                if(DBIntegrate::ControllerExecutable()) { 
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }
    }
}