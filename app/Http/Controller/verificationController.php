<?php
$emailsaved = "";
class verificationController extends DBIntegration implements VerifierInterface {
    public function verifyController($table, $usrtable, $data){
        if($this->CHECKSERVER()){
            if($this->ControllerPrepare(checkemailifexist($usrtable))){
               $this->bind(":email", $data['sendemail']);
               $this->ControllerExecutable();
               if($this->controller_row()){
                   //exist
                   //validate email if exist
                   echo json_encode(array("existCode" => "emailexist"));
               }
               else{
                if($this->ControllerPrepare(sanitized_sendAttempts("codeverifier"))){
                    $this->bind(":email", $data['sendemail']);
                    $this->ControllerExecutable();
                    if($this->controller_row()){
                        if($row = $this->controller_fetch_row()){
                            $attempts = $row['sendattempt'];
                            if($attempts == 3){
                                echo json_encode(array("limit" => "limit"));
                            }else{
                                // Not 3 LIMITS
                                if($this->ControllerPrepare(detectVerificationCode("codeverifier"))){
                                    $this->bind(":email", $data['sendemail']);
                                    $this->ControllerExecutable();
                                    if($this->controller_row()){
                                        if($this->ControllerPrepare(sanitized_update_verification_code("codeverifier"))){
                                            $this->bind(":code", $data['vcode']);
                                            $this->bind(":email", $data['sendemail']);
                                            if($this->ControllerExecutable()){
                                                $emailsaved = $data['sendemail'];
                                                $this->verificationSend($data['sendemail'], $data['vcode']);
                                                echo $this->SuccessJSONResponse();
                                            }
                                        }
                                    }else{
                                        if($this->ControllerPrepare(verificationCodeEntry($table))){
                                            $this->bind(":vcode", $data['vcode']);
                                            $this->bind(":email", $data['sendemail']);
                                            if($this->ControllerExecutable()){
                                                $emailsaved = $data['sendemail'];
                                                $this->verificationSend($data['sendemail'], $data['vcode']);
                                                echo $this->SuccessJSONResponse();
                                            }
                                           }
                                    }
                                }else{
                                    if($this->ControllerPrepare(verificationCodeEntry($table))){
                                        $this->bind(":vcode", $data['vcode']);
                                        $this->bind(":email", $data['sendemail']);
                                        if($this->ControllerExecutable()){
                                            $emailsaved = $data['sendemail'];
                                            $this->verificationSend($data['sendemail'], $data['vcode']);
                                            echo $this->SuccessJSONResponse();
                                        }
                                       }
                                }
                            }
                        }
                    }else{
                        // Data Not exists in code verifier
                        if($this->ControllerPrepare(detectVerificationCode("codeverifier"))){
                            $this->bind(":email", $data['sendemail']);
                            $this->ControllerExecutable();
                            if($this->controller_row()){
                                if($this->ControllerPrepare(sanitized_update_verification_code("codeverifier"))){
                                    $this->bind(":code", $data['vcode']);
                                    $this->bind(":email", $data['sendemail']);
                                    if($this->ControllerExecutable()){
                                        $emailsaved = $data['sendemail'];
                                        $this->verificationSend($data['sendemail'], $data['vcode']);
                                        echo $this->SuccessJSONResponse();
                                    }
                                }
                            }else{
                                if($this->ControllerPrepare(verificationCodeEntry($table))){
                                    $this->bind(":vcode", $data['vcode']);
                                    $this->bind(":email", $data['sendemail']);
                                    if($this->ControllerExecutable()){
                                        $emailsaved = $data['sendemail'];
                                        $this->verificationSend($data['sendemail'], $data['vcode']);
                                        echo $this->SuccessJSONResponse();
                                    }
                                   }
                            }
                        }else{
                            if($this->ControllerPrepare(verificationCodeEntry($table))){
                                $this->bind(":vcode", $data['vcode']);
                                $this->bind(":email", $data['sendemail']);
                                if($this->ControllerExecutable()){
                                    $emailsaved = $data['sendemail'];
                                    $this->verificationSend($data['sendemail'], $data['vcode']);
                                    echo $this->SuccessJSONResponse();
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
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $this->emailsender($mail, $email, $codex);
    }
      public function checkverified($table, $data){
        if($this->CHECKSERVER()){
          if($this->ControllerPrepare(verified_checker($table))){
            $this->bind(":vcode", $data['codeverifies']);
            $this->ControllerExecutable();
            if($this->controller_fetch_row()){
              //update isverified = 1
                if($this->ControllerPrepare(verifieduser($table))){
                  $this->bind(":vcode", $data['codeverifies']);
                  if($this->ControllerExecutable()){
                    echo $this->SuccessJSONResponse();
                  }
                }
            }
            else{
              //not exist
              echo $this->InvalidJSONResponse();
            }
          }
        }
      }
}
