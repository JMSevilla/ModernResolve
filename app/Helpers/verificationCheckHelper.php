<?php
spl_autoload_register('health_check');
if(isset($_POST['verifyTrigger']) == true){
  $callback = new Verify();
  $callback->verify_health_code($_POST['table']);
}

function health_check(){
  include_once "../Route/webapi.php";
  $callback = new web_api();
  $callback->middleware("db.php", "Verify.php", "verificationController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'interface.php');
}
