<?php
spl_autoload_register('provide_root');
if(isset($_POST['Trigger']) == 1){
   $callback = new Post();
   $callback->postModels($_POST['table']);
}
function provide_root(){
    include_once "../Route/webapi.php";
    $calls = new web_api();
    $calls::middleware("db.php", "Post.php", "postController.php", "queries.php");
}