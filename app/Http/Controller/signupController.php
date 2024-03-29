<?php

    // Emman
    include_once "../DataQuery/queries.php";

    class SignupController extends lightBringerBulk implements ISignupController {

        public function signupuser_controller($table, $data) {
            $istype = '1';
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::firstuser_query($table))) {
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
                DBIntegrate::bind(':address', $data['address']);
                DBIntegrate::bind(':email_address', $data['email_address']);
                DBIntegrate::bind(':password', DBIntegrate::dataEncrypt($data['password']));
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
                DBIntegrate::bind(':address', $data['address']);
                DBIntegrate::bind(':email_address', $data['email_address']);
                DBIntegrate::bind(':password', DBIntegrate::dataEncrypt($data['password']));
                DBIntegrate::bind(':is_verified', $isverified);
                DBIntegrate::bind(':is_type', $istype);
                DBIntegrate::bind(':is_activate', $isactivate);

                if(DBIntegrate::ControllerExecutable()) {
                    echo DBIntegrate::SuccessJSONResponse();
                    $this->fetch_data_classCODE($data);
                    // echo json_encode('emman borrico');
                }
            }
        }
        public function fetch_data_classCODE($data) {
          if(DBIntegrate::ControllerPrepare(lightBringerBulk::classCodeMapping("class_code"))){
            DBIntegrate::bind(":code", $data['class_code']);
            DBIntegrate::ControllerExecutable();
            if(DBIntegrate::controller_row()){
              if($row = DBIntegrate::controller_fetch_row()){
                $classcodeID = $row['class_codeID'];
                $this->fetch_data_userID($data, $classcodeID);
              }
            }
          }
        }
        public function fetch_data_userID($data, $classcodeID){
          if(DBIntegrate::ControllerPrepare(lightBringerBulk::userIDGetter("user"))){
            DBIntegrate::bind(":email", $data['email_address']);
            DBIntegrate::ControllerExecutable();
            if(DBIntegrate::controller_row()){
              if($row = DBIntegrate::controller_fetch_row()){
                $userid = $row['userID'];

                 $this->class_code_mapping($userid, $classcodeID);
              }
            }
          }
        }
        public function class_code_mapping($userid, $classcodeID){
          if(DBIntegrate::ControllerPrepare(lightBringerBulk::create_classcode_mapping("class_code_map"))){
              DBIntegrate::bind(":classID",$classcodeID, PDO::PARAM_INT);
              DBIntegrate::bind(":uid",$userid, PDO::PARAM_INT);
              if(DBIntegrate::ControllerExecutable()){
                echo DBIntegrate::SuccessJSONResponse();
              }
          }
        }
    }

    // create_classcode_mapping
