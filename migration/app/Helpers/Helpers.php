<?php
spl_autoload_register('provide_root');
if(isset($_POST['userTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(userID int NOT NULL auto_increment, firstname varchar(255), lastname varchar(255) NOT NULL, birth_date datetime, age int, gender varchar(255), contact_number varchar(255), province varchar(255), municipality varchar(255), zip_code varchar(255), class_code varchar(255), address text, email_address varchar(255) unique, password varchar(255), is_verified char, is_type char, is_activate char, is_token_verified char, created_at datetime default current_timestamp, PRIMARY KEY (userID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
function provide_root(){
    include_once "../Route/webapi.php";
    $calls = new web_api();
    $calls->middleware("db.php", "Post.php", "postController.php", "queries.php", "PHPMailer.php", "SMTP.php", "Exception.php");
}