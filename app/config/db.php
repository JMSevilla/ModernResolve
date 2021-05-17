<?php
/*
Please use this function plugins that i created to create your backend.
Reminder !
1. If you want to edit or add something please notify me.
*/
class config{
  public static $host = "localhost";
  public static $username = "root";
  public static $pwd = "";
  public static $mydb = "dbtorres";
  public static $dataOutbound;
  public static $stmt;
}
class DBIntegrate 
{
  // Connection privates
 

  public function connect(){
    
    try {
    $dsn = "mysql:host=" . config::$host . ";dbname=" . config::$mydb;
    config::$dataOutbound = new PDO($dsn, config::$username, config::$pwd);
    config::$dataOutbound->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return config::$dataOutbound;
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
    return config::$stmt->bindParam($val, $param, $type);
  }


  ///// Controller Starts here.
  public function ControllerPrepare($sql){
    return config::$stmt = DBIntegrate::connect()->prepare($sql);
  }
  public function ControllerExecutable(){
    return config::$stmt->execute();
  }
  public function ControllerQuery($sql){
    return config::$stmt = DBIntegrate::connect()->query($sql);
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
  public function NotVerifiedResponse(){ 
    return json_encode(array("statusCode" => "not verified"));
  }
  public function NotActivate(){
    return json_encode(array("statusCode" => "not active"));
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
  public function dataEncrypt($pass){
    return password_hash($pass, PASSWORD_DEFAULT);
  }
  // Data Counting for controller
  public function controller_row(){
    return config::$stmt->rowCount() > 0;
  }
  public function controller_fetch_row(){
    return config::$stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function controller_fetch_all(){
    return config::$stmt->fetchall();
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
public function emailsender($mail, $receiveremail, $codex){
  $mail->IsSMTP();
  $mail->Mailer = 'smtp';
  $mail->SMTPAuth = true;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->SMTPSecure = 'ssl';
  $mail->Username = "devopsbyte60@gmail.com"; //dev email ex: jm@gmail.com
  $mail->Password = "09663147803miguel"; //dev gmail password
  $mail->IsHTML(true); // if you are going to send HTML formatted emails
  $mail->From = "devopsbyte60@gmail.com";
  $mail->FromName = "Resolve Technologies";
  $mail->addAddress($receiveremail,"");
  $mail->Subject = "Verification Code";
  $mail->Body = '<html><body>';
  $mail->Body .= "<center>";
  $mail->Body .= "<img src='https://ph.joblum.com/uploads/2/1663.jpg' style='margin-bottom: 20px; width: 50%; height: auto;' alt='No Image Found'>";
  $mail->Body .= "<h1 style='font-weight: bold; margin-bottom: 10px;'>Code : ". $codex ."</h1>";
  $mail->Body .= "<p>Copy this code and paste it on our website for verification.</p>";
  $mail->Body .= "</center>";
  $mail->Body .= "</body></html>";
      try {
        $mail->send();

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
}
