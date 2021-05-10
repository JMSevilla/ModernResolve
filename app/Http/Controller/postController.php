<?php

class postController extends DBIntegration {
  public function postControl($table,$data){
    if($this->ControllerPrepare(iController_Insertion($table))){
      $this->bind(":fname", $data['fname']);
      if($this->ControllerExecutable()){
        sendEmail();
        echo $this->SuccessJSONResponse();
      }
    }
  }
}


function sendEmail(){
  $mail = new PHPMailer\PHPMailer\PHPMailer();
   $this->emailsender($mail);    
}
