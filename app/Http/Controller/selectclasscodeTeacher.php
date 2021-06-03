<?php 

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";


    class TeacherClassCodeController extends DBIntegrate implements ITeacherClassCode {

        public function teachclasscode($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::classcodeselectteach_query($table));
            DBIntegrate::bind(':userID', $data['id']);
            if(DBIntegrate::ControllerExecutable()) {
                $row = DBIntegrate::controller_fetch_all();

                echo json_encode($row);
            }
        }

        public function classcodeget_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::classcodeget_query($table));
            DBIntegrate::bind(':name', $data['name']);
            if(DBIntegrate::ControllerExecutable()) {
                $row = DBIntegrate::controller_fetch_row();

                echo json_encode($row);
            }
        }

    }