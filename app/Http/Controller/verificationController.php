<?php
include( dbroute('db.php') );
// include( nb_call('queries.php') );
include_once "../DataQuery/queries.php";
$emailsaved = "";
class verificationController implements VerifierInterface {
    public function verifyController($table, $data, $column){
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::checkemailifexist("user", $column))){
                DBIntegrate::bind(":email", $data['sendemail']);
                DBIntegrate::ControllerExecutable();
               if(DBIntegrate::controller_row()){
                   //exist
                   //validate email if exist
                   echo json_encode(array("existCode" => "emailexist"));
               }
               else{
                if(DBIntegrate::ControllerPrepare(lightBringerBulk::sanitized_sendAttempts($table))){
                    DBIntegrate::bind(":email", $data['sendemail']);
                    DBIntegrate::ControllerExecutable();
                    if(DBIntegrate::controller_row()){
                        if($row = DBIntegrate::controller_fetch_row()){
                            $attempts = $row['sendattempt'];
                            if($attempts == 3){
                                echo json_encode(array("limit" => "limit"));
                            }else{
                                // Not 3 LIMITS
                                if(DBIntegrate::ControllerPrepare(lightBringerBulk::detectVerificationCode($table))){
                                    DBIntegrate::bind(":email", $data['sendemail']);
                                    DBIntegrate::ControllerExecutable();
                                    if(DBIntegrate::controller_row()){
                                        if(DBIntegrate::ControllerPrepare(lightBringerBulk::sanitized_update_verification_code("codeverifier"))){
                                            DBIntegrate::bind(":code", $data['vcode']);
                                            DBIntegrate::bind(":email", $data['sendemail']);
                                            if(DBIntegrate::ControllerExecutable()){
                                                $emailsaved = $data['sendemail'];
                                                $this->verificationSend($data['sendemail'], $data['vcode']);
                                                echo DBIntegrate::SuccessJSONResponse();
                                            }
                                        }
                                    }else{
                                        if(DBIntegrate::ControllerPrepare(lightBringerBulk::verificationCodeEntry($table))){
                                            DBIntegrate::bind(":vcode", $data['vcode']);
                                            DBIntegrate::bind(":email", $data['sendemail']);
                                            if(DBIntegrate::ControllerExecutable()){
                                                $emailsaved = $data['sendemail'];
                                                $this->verificationSend($data['sendemail'], $data['vcode']);
                                                echo DBIntegrate::SuccessJSONResponse();
                                            }
                                           }
                                    }
                                }else{
                                    if(DBIntegrate::ControllerPrepare(lightBringerBulk::verificationCodeEntry($table))){
                                        DBIntegrate::bind(":vcode", $data['vcode']);
                                        DBIntegrate::bind(":email", $data['sendemail']);
                                        if(DBIntegrate::ControllerExecutable()){
                                            $emailsaved = $data['sendemail'];
                                            $this->verificationSend($data['sendemail'], $data['vcode']);
                                            echo DBIntegrate::SuccessJSONResponse();
                                        }
                                       }
                                }
                            }
                        }
                    }else{
                        // Data Not exists in code verifier
                        if(DBIntegrate::ControllerPrepare(lightBringerBulk::detectVerificationCode("codeverifier"))){
                            DBIntegrate::bind(":email", $data['sendemail']);
                            DBIntegrate::ControllerExecutable();
                            if(DBIntegrate::controller_row()){
                                if(DBIntegrate::ControllerPrepare(lightBringerBulk::sanitized_update_verification_code("codeverifier"))){
                                    DBIntegrate::bind(":code", $data['vcode']);
                                    DBIntegrate::bind(":email", $data['sendemail']);
                                    if(DBIntegrate::ControllerExecutable()){
                                        $emailsaved = $data['sendemail'];
                                        $this->verificationSend($data['sendemail'], $data['vcode']);
                                        echo DBIntegrate::SuccessJSONResponse();
                                    }
                                }
                            }else{
                                if(DBIntegrate::ControllerPrepare(lightBringerBulk::verificationCodeEntry($table))){
                                    DBIntegrate::bind(":vcode", $data['vcode']);
                                    DBIntegrate::bind(":email", $data['sendemail']);
                                    if(DBIntegrate::ControllerExecutable()){
                                        $emailsaved = $data['sendemail'];
                                        $this->verificationSend($data['sendemail'], $data['vcode']);
                                        echo DBIntegrate::SuccessJSONResponse();
                                    }
                                   }
                            }
                        }else{
                            if(DBIntegrate::ControllerPrepare(lightBringerBulk::verificationCodeEntry($table))){
                                DBIntegrate::bind(":vcode", $data['vcode']);
                                DBIntegrate::bind(":email", $data['sendemail']);
                                if(DBIntegrate::ControllerExecutable()){
                                    $emailsaved = $data['sendemail'];
                                    $this->verificationSend($data['sendemail'], $data['vcode']);
                                    echo DBIntegrate::SuccessJSONResponse();
                                }
                               }
                        }
                    }
                }
               }
            }
        }
    }
    public function verificationSend($email, $codex){
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        DBIntegrate::emailsender($mail, $email, $codex);
    }
      public function checkverified($table, $data){
        if(DBIntegrate::CHECKSERVER()){
          if(DBIntegrate::ControllerPrepare(lightBringerBulk::verified_checker($table))){
            DBIntegrate::bind(":vcode", $data['codeverifies']);
            DBIntegrate::ControllerExecutable();
            if(DBIntegrate::controller_fetch_row()){
              //update isverified = 1
                if(DBIntegrate::ControllerPrepare(lightBringerBulk::verifieduser($table))){
                  DBIntegrate::bind(":vcode", $data['codeverifies']);
                  DBIntegrate::bind(":key", $data['key']);
                  if(DBIntegrate::ControllerExecutable()){
                    echo DBIntegrate::SuccessJSONResponse();
                  }
                }
            }
            else{
              //not exist
              echo DBIntegrate::InvalidJSONResponse();
            }
          }
        }
      }
}
