<?php 

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class TeacherPostController extends DBIntegrate implements ITeacherPostInterface {

        public function writepost_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::writepost_query($table));
                DBIntegrate::bind(':userID', $data['userID']);
                DBIntegrate::bind(':class_codeID', $data['class_codeID']);
                DBIntegrate::bind(':description', $data['description']);
                DBIntegrate::bind(':files', $data['files']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }

        public function fetchpost_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::fetchpost_query($table));
            DBIntegrate::bind(':id', $data['id']);
            if(DBIntegrate::ControllerExecutable()) {
                $row = DBIntegrate::controller_fetch_row();

                echo json_encode($row);
            }
        }
        

        public function editclass_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::editclassname_query());
                DBIntegrate::bind(':id', $data['id']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }

        public function lockedclass_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::lockedclassname_query($table));
                DBIntegrate::bind(':id', $data['id']);
                DBIntegrate::bind(':status', $data['status']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }
        
    }