<?php
spl_autoload_register('provide_rootbackend');

if(isset($_POST['Trigger']) == 1){
 $callback = new Post();
 $callback->postModels($_POST['table']);
}

function provide_rootbackend(){
 include_once "../Providers/interface.php";
 modelsRouting("Post.php");
}