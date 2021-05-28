<?php

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class TeacherController extends DBIntegrate implements ITeacherAdd {

        public function teacher_add($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                $password = DBIntegrate::dataEncrypt($data['password']);
                DBIntegrate::ControllerPrepare(lightBringerBulk::NB_teacheradd($table));
                DBIntegrate::bind(':firstname', $data['firstname']);
                DBIntegrate::bind(':lastname', $data['lastname']);
                DBIntegrate::bind(':email_address', $data['email_address']);
                DBIntegrate::bind(':password', $password);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        } 

    }