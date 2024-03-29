<?php
spl_autoload_register('provide_root');

if(isset($_POST['sprocTrigger'])==1){
    $callback = new SprocModelClass();
    $callback->sprocModelFunction();
}
if(isset($_POST['userTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(userID int NOT NULL auto_increment, firstname varchar(255), lastname varchar(255) NOT NULL, birth_date datetime, age int, gender varchar(255), contact_number varchar(255), province varchar(255), municipality varchar(255), zip_code varchar(255), address text, email_address varchar(255) unique, password varchar(255), is_verified char, is_type char, is_activate char, is_token_verified char, apikey varchar(6500), created_at datetime default current_timestamp, PRIMARY KEY (userID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['provinceTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(provinceID int NOT NULL auto_increment, province varchar(255), municipality varchar(255), created_at datetime default current_timestamp, PRIMARY KEY (provinceID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['classCodeTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(class_codeID int NOT NULL auto_increment, code varchar(255), status varchar(255), name varchar(255), created_at datetime default current_timestamp, PRIMARY KEY (class_codeID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['tokenTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(tokenID int NOT NULL auto_increment, itoken varchar(60000), email varchar(255), is_valid char, isnew char, dateOfValidation datetime, tokenExpiration datetime, PRIMARY KEY (tokenID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['codeverifier']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(codeID int NOT NULL auto_increment, vcode varchar(50), email varchar(255), isdone char(1), apikey varchar(255), sendattempt char(1), created_at datetime default current_timestamp, PRIMARY KEY (codeID) )';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['classCodeMapTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));
    $column = '(class_code_mapID int NOT NULL auto_increment, class_codeID int, userID int, created_at datetime default current_timestamp, PRIMARY KEY (class_code_mapID), FOREIGN KEY(userID) REFERENCES user(userID), FOREIGN KEY(class_codeID) REFERENCES class_code(class_codeID))';
   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
if(isset($_POST['postTrigger']) == 1){
    // echo json_encode(array('helper' => 'call ok'));

    $column = '(postID int NOT NULL auto_increment, userID int, class_codeID int, description text, files varchar(255), created_at datetime default current_timestamp, PRIMARY KEY (postID),  FOREIGN KEY (userID) REFERENCES user(userID), FOREIGN KEY (class_codeID) REFERENCES class_code(class_codeID) )';

   $callback = new Post();
   $callback->postModels($_POST['table'], $column);
}
// if(isset($_POST['likeTrigger']) == 1){
//     // echo json_encode(array('helper' => 'call ok'));
//     $column = '(likeID int NOT NULL auto_increment, created_at datetime default current_timestamp, PRIMARY KEY (likeID) )';
//    $callback = new Post();
//    $callback->postModels($_POST['table'], $column);
// }
function provide_root(){
    include_once "../Route/webapi.php";
    $calls = new web_api();
    $calls->middleware("db.php", "Post.php", "postController.php", "queries.php", "PHPMailer.php", "SMTP.php", "Exception.php");
}
