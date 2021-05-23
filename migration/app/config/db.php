<?php
/* 
Please use this function plugins that i created to create your backend.
Reminder !
1. If you want to edit or add something please notify me. 
*/

class DBIntegration 
{
  // Connection privates
  // private $host = "azuretorrestech28.mysql.database.azure.com";
  private $host = "localhost";
  // private $username = "torresdb@azuretorrestech28";
  private $username = "root";
  // private $pwd = "Syncdb123456";
  private $pwd = "";
  private $mydb = "dbtorres";
  private $dataOutbound;
  private $stmt;

  public function connect(){
    try {
    $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->mydb;
    $this->dataOutbound = new PDO($dsn, $this->username, $this->pwd);
    $this->dataOutbound->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $this->dataOutbound;
    }
    catch (PDOException $e) {
      die("could not connect" . $e->getMessage());
    }
  }
  //Models Starts here
  public function model_prepare($sql){
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function ModelsExecution(){
    return $this->stmt->execute();
  }
  public function ModelsCount(){
    return $this->stmt->rowCount() > 0;
  }
  public function ModelsCreated($sql){
    return $this->connect()->exec($sql);
  }
  // Data binding
  public function bind($val, $param, $type = null)
  {
    if(is_null($type)){
      switch(true){
        case $type == 1:
        $type = PDO::PARAM_INT;
        break;
        default:
        $type = PDO::PARAM_STR;
      }
    }
    return $this->stmt->bindParam($val, $param, $type);
  }

  
  ///// Controller Starts here. 
  public function ControllerPrepare($sql){
    return $this->stmt = $this->connect()->prepare($sql);
  }
  public function ControllerExecutable(){
    return $this->stmt->execute();
  }
  /////JSON Responses 
  public function SuccessJSONResponse(){
    return json_encode(array("statusCode" => "success"));
  }
  public function InvalidJSONResponse(){
    return json_encode(array("statusCode" => "invalid"));
  }
  public function NotFoundJSONResponse(){
    return json_encode(array("statusCode" => "not found"));
  }
  /////Checking Server
  public function CHECKSERVER(){
    return $_SERVER["REQUEST_METHOD"] == "POST";
  }
  /////For Code Testing
  public function teamCodeTester(){
    return json_encode(array("TestCode" => 200));
  }
  // Data Encrypting
  public function dataEncrypt(){
    return password_hash($pass, PASSWORD_DEFAULT);
  }
  // Data Counting for controller
  public function controller_row(){
    return $this->stmt->rowCount() > 0;
  }
  // This is for saving token on cookies.
  //Expires every 7 days
  public function cookieOfLife($originalToken){
    $argsCookie = array(
      'expires' => time() + 60*60*24*7,
      'path' => '/',
      'secure' => true,
      'httponly' => true,
      'samesite' => 'None'
    );
    setcookie('Token', $originalToken, $argsCookie);
}
//sending email *Please don't use this if not necessary 
public function emailsender($mail){
  $mail->IsSMTP();
  $mail->Mailer = 'smtp';
  $mail->SMTPAuth = true;
  $mail->Host = 'smtp.gmail.com'; 
  $mail->Port = ""; //465
  $mail->SMTPSecure = 'ssl';
  $mail->Username = ""; //dev email ex: jm@gmail.com
  $mail->Password = ""; //dev gmail password
  $mail->IsHTML(true); // if you are going to send HTML formatted emails
  $mail->From = "devopsbyte60@gmail.com";
  $mail->FromName = "Resolve Technologies";
  $mail->addAddress("devopsbyte60@gmail.com","JM");
  $mail->Subject = "Thank you";
  $mail->Body = file_get_contents("http://localhost/torreshtech/app/Http/templates/template.php");
      try {
        $mail->send();
        echo json_encode(array("successsent" => "Message has been sent successfully"));
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
}
