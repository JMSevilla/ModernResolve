<?php

spl_autoload_register('verifyRoute');
if(isset($_POST['verifyuserTrigger']) == 1){
$callback = new Verify();
$callback->verificationInterface($_POST['table'], "email_address");

}

function verifyRoute(){
   include_once "../Route/webapi.php";
    $callback = new web_api();
    $callback->middleware("Verify.php", "verificationController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'interface.php', 'nightbringer.php');
}