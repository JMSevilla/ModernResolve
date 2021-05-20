<?php
spl_autoload_register('valid_token_updater');
if(isset($_POST['token_validate_update']) == true){
    $callback = new TokenUpdate();
    $callback->tokendateupdate($_POST['table']);
}

function valid_token_updater(){
    include_once "../Route/webapi.php";
    $callback = new web_api();
    $callback->middleware("TokenDateUpdate.php", "tokendateupdateController.php", "queries.php", 'PHPMailer.php', 'SMTP.php', 'Exception.php', 'interfaceTokenDateUpdate.php', 'nightbringer.php');
  }