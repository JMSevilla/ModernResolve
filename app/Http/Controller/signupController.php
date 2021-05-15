<?php 

    // Emman
    include_once "../DataQuery/queries.php";
    
    class SignupController extends lightBringerBulk implements ISignupController {

        public function signupuser_controller($table, $data) {
            $istype = '1';
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::firstuser_query($table))) {
                DBIntegrate::bind(':is_type', $istype);
                DBIntegrate::ControllerExecutable();
                if(DBIntegrate::controller_row()) {
                    $isverified = '0';
                    $istype = '3';
                    $isactivate = '0';
                    $user = new SignupController();
                    $user->normaluser_insert($table, $data, $isverified, $istype, $isactivate);
                }
                else {
                    $isverified = '1';
                    $istype = '1';
                    $isactivate = '1';
                    $user = new SignupController();
                    $user->admin_insert($table, $data, $isverified, $istype, $isactivate);
                }
            }
        }

        public function admin_insert($table, $data, $isverified, $istype, $isactivate) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::signupuser_query($table));
                DBIntegrate::bind(':firstname', $data['firstname']);
                DBIntegrate::bind(':lastname', $data['lastname']);
                DBIntegrate::bind(':birth_date', $data['birth_date']);
                DBIntegrate::bind(':age', $data['age']);
                DBIntegrate::bind(':gender', $data['gender']);
                DBIntegrate::bind(':contact_number', $data['contact_number']);
                DBIntegrate::bind(':province', $data['province']);
                DBIntegrate::bind(':municipality', $data['municipality']);
                DBIntegrate::bind(':zip_code', $data['zip_code']);
                DBIntegrate::bind(':class_code', $data['class_code']);
                DBIntegrate::bind(':address', $data['address']);
                DBIntegrate::bind(':email_address', $data['email_address']);
                DBIntegrate::bind(':password', $data['password']);
                DBIntegrate::bind(':is_verified', $isverified);
                DBIntegrate::bind(':is_type', $istype);
                DBIntegrate::bind(':is_activate', $isactivate);

                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                    // echo json_encode('emman borrico');
                }
            }
        }

        public function normaluser_insert($table, $data, $isverified, $istype, $isactivate) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::signupuser_query($table));
                DBIntegrate::bind(':firstname', $data['firstname']);
                DBIntegrate::bind(':lastname', $data['lastname']);
                DBIntegrate::bind(':birth_date', $data['birth_date']);
                DBIntegrate::bind(':age', $data['age']);
                DBIntegrate::bind(':gender', $data['gender']);
                DBIntegrate::bind(':contact_number', $data['contact_number']);
                DBIntegrate::bind(':province', $data['province']);
                DBIntegrate::bind(':municipality', $data['municipality']);
                DBIntegrate::bind(':zip_code', $data['zip_code']);
                DBIntegrate::bind(':class_code', $data['class_code']);
                DBIntegrate::bind(':address', $data['address']);
                DBIntegrate::bind(':email_address', $data['email_address']);
                DBIntegrate::bind(':password', $data['password']);
                DBIntegrate::bind(':is_verified', $isverified);
                DBIntegrate::bind(':is_type', $istype);
                DBIntegrate::bind(':is_activate', $isactivate);

                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                    // echo json_encode('emman borrico');
                }
            }
        }

    }