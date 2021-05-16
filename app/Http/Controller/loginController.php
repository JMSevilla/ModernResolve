<?php 

    // Emman
    include_once "../DataQuery/queries.php";

    class LoginController extends DBIntegrate implements ILoginController {

        public function loginuser_controller($table, $data) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::loginuser_query($table));
                DBIntegrate::bind(':email', $data['email']);
                if(DBIntegrate::ControllerExecutable()) {
                    if(DBIntegrate::controller_row()) {
                        $get = DBIntegrate::controller_fetch_row();
                        $password = $get['password'];
                        $istype = $get['is_type'];
                        $isactivate = $get['is_activate'];
                        $isverified = $get['is_verified'];
                        if(password_verify($data['password'], $password)) {
                            if($isverified == '1') {
                                if($isactivate == '1') {
                                    if($istype == '3') {
                                        echo json_encode(array('type' => 'Student'));
                                    }
                                    else if($istype == '2') {
                                        echo json_encode(array('type' => 'Teacher'));
                                    }
                                    else {
                                        echo json_encode(array('type' => 'Admin'));
                                    }
                                }
                                else {
                                    echo DBIntegrate::InvalidJSONResponse();
                                }
                            }
                            else {
                                echo DBIntegrate::InvalidJSONResponse();
                            }
                        }
                        else {
                            echo DBIntegrate::InvalidJSONResponse();
                        }
                    }
                    else {
                        echo DBIntegrate::InvalidJSONResponse();
                    }
                }
            }
        }

    }