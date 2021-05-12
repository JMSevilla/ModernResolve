<?php
// spl_autoload_register('provide_root');
if(isset($_POST['TaskTrigger']) == 1){
    // echo json_encode(array($));
    $data = [
        'classcode' => $_POST['classcode'],
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'bdate' => $_POST['bdate'],
        'age' => $_POST['age'],
        'contact' => $_POST['contact'],
        'address' => $_POST['address'],
        'province' => $_POST['province'],
        'city' => $_POST['city'],
        'street' => $_POST['street'],
        'zipcode' => $_POST['zipcode'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'code' => $_POST['code'],
        'sex' => $_POST['sex'],
        'course' => $_POST['course'],
      ];
      echo json_encode($data);
    //   $controller = new postController();
    //   $controller->controller_signup($data);
}

// function provide_root(){
//     include_once "../Route/webapi.php";
//     $calls = new web_api();
//     $calls::middleware("db.php", "Post.php", "postController.php", "queries.php", "PHPMailer.php", "SMTP.php", "Exception.php");
// }