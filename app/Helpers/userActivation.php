<?php
spl_autoload_register('user_activation');
if(isset($_POST['actT']) == true){
    $callback = new userActivationModel();
    $callback->hold($_POST['uid'], $_POST['val']);
    // echo json_encode($_POST['val']);
}

function user_activation(){
    include_once "../Route/webapi.php";
    $callback = new web_api();
    $callback->middleware("Activation.php", "activationController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'activation.php', 'nightbringer.php');
  }