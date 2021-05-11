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

  // emman
    public function controller_signup($table, $data) {
      if($this->CHECKSERVER()) {
        if($this->ControllerPrepare(iController_CreateUser($table))) {
          $this->bind(':classcode', $data['classcode']);
          $this->bind(':firstname', $data['fname']);
          $this->bind(':lastname', $data['lname']);
          $this->bind(':birthdate', $data['bdate']);
          $this->bind(':age', $data['age']);
          $this->bind(':contact', $data['contact']);
          $this->bind(':address', $data['address']);
          $this->bind(':city', $data['city']);
          $this->bind(':street', $data['street']);
          $this->bind(':zipcode', $data['zipcode']);
          $this->bind(':email', $data['email']);
          $this->bind(':password', $data['password']);
          $this->bind(':code', $data['code']);
          $this->bind(':sex', $data['sex']);
          $this->bind(':course', $data['course']);
          $this->bind(':code', $data['code']);

          if($this->ControllerExecutable()) {
            echo $this->SuccessJSONResponse();
          }
        }
      }
    }

}


function sendEmail(){
  $mail = new PHPMailer\PHPMailer\PHPMailer();
   $this->emailsender($mail);    
}
