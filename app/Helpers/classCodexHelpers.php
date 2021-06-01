<?php
spl_autoload_register('ClassCodexRoute');
if(isset($_POST['classCodeTrigger']) == true){
$callback = new Codex();
$callback->codexhandler();
}

function ClassCodexRoute(){
    include_once "../Route/webapi.php";
     $callback = new web_api();
     $callback->middleware("ClassCodex.php", "classcodexController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'classCodexInterface.php', 'nightbringer.php');
 }