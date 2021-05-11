<?php
spl_autoload_register('provide_root');
if(isset($_POST['TaskTrigger']) == 1){
    // echo json_encode(array($));
   $callback = new Post();
   $callback->model_signup($_POST['table']);
}
function provide_root(){
    include_once "../Route/webapi.php";
    $calls = new web_api();
    $calls::middleware("db.php", "Post.php", "postController.php", "queries.php", "PHPMailer.php", "SMTP.php", "Exception.php");
}