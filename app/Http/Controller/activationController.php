<?php
include_once "../config/db.php";
include_once "../DataQuery/queries.php";
class activationController extends DBIntegrate implements TypeActivation{
    public function patchById($id, $indicator)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::user_activation("user"))){
                DBIntegrate::bind(":indicator", $indicator);
                DBIntegrate::bind(":id", $id);
                if(DBIntegrate::ControllerExecutable()){
                    echo json_encode(array(
                        "statusCode" => "success"
                    ));
                }
            }
        }
    }
}