<?php 

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class TeacherDashController extends DBIntegrate implements ITeacherDashboard {

        public function getpassteacher_controller($table, $data) {
            DBIntegrate::ControllerPrepare(lightBringerBulk::getprofad_query($table));
            DBIntegrate::bind(':email', $data['email']);
            if(DBIntegrate::ControllerExecutable()) {
                $teacher = DBIntegrate::controller_fetch_row();
                
                echo json_encode($teacher);
            }
        }

        public function updatePassTeacherDash_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::checkemailad_query($table));
                DBIntegrate::bind(':email', $data['email']);
                if(DBIntegrate::ControllerExecutable()) {
                    if(DBIntegrate::controller_row()) {
                        $teachpass = DBIntegrate::controller_fetch_row();
                        $passhashed = $teachpass['password'];
                        $pass = $data['old'];
                        if(password_verify($pass, $passhashed)) {
                            DBIntegrate::ControllerPrepare(lightBringerBulk::changepassad_query($table));
                            $chngpassteach = DBIntegrate::dataEncrypt($data['password']);
                            DBIntegrate::bind(':email', $data['email']);
                            DBIntegrate::bind(':password', $chngpassteach);
                            if(DBIntegrate::ControllerExecutable()) {
                                echo DBIntegrate::SuccessJSONResponse();
                            }
                        }
                        else {
                            echo DBIntegrate::NotFoundJSONResponse();
                        }
                    }
                }
            }
        }

        public function updateProfileTeacherDash_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::updateteachProfile_query($table));
                DBIntegrate::bind(':email', $data['email']);
                DBIntegrate::bind(':firstname', $data['firstname']);
                DBIntegrate::bind(':lastname', $data['lastname']);
                DBIntegrate::bind(':birth_date', $data['birthdate']);
                DBIntegrate::bind(':gender', $data['gender']);
                DBIntegrate::bind(':contact_number', $data['contact_number']);
                DBIntegrate::bind(':province', $data['province']);
                DBIntegrate::bind(':municipality', $data['municipality']);
                DBIntegrate::bind(':address', $data['street']);
                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                }
            }
        }

    }