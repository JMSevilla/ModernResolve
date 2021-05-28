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

        public function getprofadmin($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::getprofad_query($table));
            DBIntegrate::bind(':email', $data['email']);
            if(DBIntegrate::ControllerExecutable()) {
                $admin = DBIntegrate::controller_fetch_row();
                
                echo json_encode($admin);
            }
        }

        public function editadminprofile($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::editadminprofile_query($table));
                DBIntegrate::bind(':email', $data['email']);
                DBIntegrate::bind(':firstname', $data['firstname']);
                DBIntegrate::bind(':lastname', $data['lastname']);
                DBIntegrate::bind(':birthdate', $data['birthdate']);
                DBIntegrate::bind(':age', $data['age']);
                DBIntegrate::bind(':gender', $data['gender']);
                DBIntegrate::bind(':contactnumber', $data['contactnumber']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }

        public function changepass_admin($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::checkemailad_query($table));
            DBintegrate::bind(':email', $data['email']);
            if(DBIntegrate::ControllerExecutable()) {
                if(DBIntegrate::controller_row()) {
                    $admin = DBIntegrate::controller_fetch_row();
                    $password_hashed = $admin['password'];
                    $password = $data['oldpass'];
                    if(password_verify($password, $password_hashed)) {
                        DBIntegrate::ControllerPrepare(lightBringerBulk::changepassad_query($table));
                        $chngpass_hash = DBIntegrate::dataEncrypt($data['password']);
                        DBIntegrate::bind(':email', $data['email']);
                        DBIntegrate::bind(':password', $chngpass_hash);
                        if(DBIntegrate::ControllerExecutable()) {
                            echo DBIntegrate::SuccessJSONResponse();
                        }
                    }
                    else {
                        echo DBIntegrate::InvalidJSONResponse();
                    }
                }
            }
        }

        public function insertprov_admin($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::inprov_query($table));
                DBIntegrate::bind(':province', $data['province']);
                DBIntegrate::bind(':municipality', $data['municipality']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }
 
    }