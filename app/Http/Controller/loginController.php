<?php 

    // Emman
    include_once "../DataQuery/queries.php";

    class LoginController extends DBIntegrate implements ILoginController {

        public function loginuser_controller($table, $data) {
            $user = new LoginController();
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
                                        
                                        $user->tokenization("token",$data);
                                        echo json_encode(array('type' => 'Student'));
                                    }
                                    else if($istype == '2') {
                                        $user->tokenization("token",$data);
                                        echo json_encode(array('type' => 'Teacher'));
                                    }
                                    else {
                                        $user->tokenization("token",$data);
                                        echo json_encode(array('type' => 'Admin'));
                                    }
                                }
                                else {
                                    echo DBIntegrate::NotActivate();
                                }
                            }
                            else {
                                echo DBIntegrate::NotVerifiedResponse();
                            }
                        }
                        else {
                            echo DBIntegrate::InvalidJSONResponse();
                        }
                    }
                    else {
                        echo DBIntegrate::NotFoundJSONResponse();
                    }
                }
            }
        }
        public function tokenization($table, $data){
            if(DBIntegrate::CHECKSERVER()) {
                if(DBIntegrate::ControllerPrepare(lightBringerBulk::tokenMigrate($table))){
                    DBIntegrate::bind(':token', $data['oauth']);
                    DBIntegrate::bind(':email', $data['email']);
                    if(DBIntegrate::ControllerExecutable()) {
                        DBIntegrate::cookieOfLife($data['oauth']);
                    }
                }
            }
        }


        // token login 
        // public function istypelogin_C($table, $data) {
        //     if(DBIntegrate::CHECKSERVER()) {
        //         DBIntegrate::ControllerPrepare(lightBringerBulk::istypeUser($table));
        //         DBIntegrate::bind(':email', $data['email']);
        //         if(DBIntegrate::ControllerExecutable()) {
        //             if(DBintegrate::controller_row()) {
        //                 $usertype = DBIntegrate::controller_fetch_row();
        //                 $type = $usertype['is_type'];
                        
        //                 echo json_encode(array('type' => $type));
        //             }
        //         }
        //     }
        // }
    }