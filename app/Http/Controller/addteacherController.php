<?php

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class TeacherController extends DBIntegrate implements ITeacherAdd {

        public function teacher_add($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::checkemail_query());
                DBIntegrate::bind(':email', $data['email_address']);
                if(DBIntegrate::ControllerExecutable()) {
                    if(DBIntegrate::controller_row()) {
                        echo DBIntegrate::InvalidJSONResponse();
                    }
                    else {
                        $password = DBIntegrate::dataEncrypt($data['password']);
                        DBIntegrate::ControllerPrepare(lightBringerBulk::teacheradd_query($table));
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
        } 

        public function delete_teacher($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::teacherdel_query($table));
                DBIntegrate::bind(':id', $data['userID']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }

        public function getall_teacher() {
            DBIntegrate::ControllerPrepare(lightBringerBulk::allteacher_query());
            if(DBIntegrate::ControllerExecutable()) {
                // echo DBIntegrate::SuccessJSONResponse();
                $teachers = DBIntegrate::controller_fetch_all();
                
                echo json_encode($teachers);
            }
        }

        public function getid_teacher($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::getidteacher_query($table));
            DBIntegrate::bind(':id', $data['id']);
            if(DBIntegrate::ControllerExecutable()) {
                $teacher = DBIntegrate::controller_fetch_row();

                echo json_encode($teacher);
            }
        }

        public function updatepass_admin($table, $data) {
            $password = DBIntegrate::dataEncrypt($data['password']);
            DBIntegrate::ControllerPrepare(lightBringerBulk::Upassadmin_query($table));
            DBIntegrate::bind(':id', $data['id']);
            DBIntegrate::bind(':password', $password);
            if(DBIntegrate::ControllerExecutable()) {
                echo DBIntegrate::SuccessJSONResponse();
            }
        }
 
    }