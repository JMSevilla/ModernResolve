<?php
use Bridge\Routing\web_api;
spl_autoload_register('classRoute');
if(isset($_POST['classCodeTrigger']) == 1){
    $callback = new ClassCode();
    $callback->classcodemodels($_POST['table']);
    
}

function classRoute(){
include_once "../Route/webapi.php";
$callback = new web_api();
$callback->middleware('db.php', 'ClassCode.php', 'classcodeController.php', 'queries.php', 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'interface.php', 'nightbringer.php');
}