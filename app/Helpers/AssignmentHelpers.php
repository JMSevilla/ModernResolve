<?php 

    spl_autoload_register('assignment_route');

    // if(isset($_POST['assignInsertTrigger']) == true) {
        // $table = $_POST['table'];
        // $image_name = $_FILES['file']['name'];
        //     $valid_extensions = array("jpg","jpeg","png","xlsx","txt","docx","docm","pdf","ppt","pptx", "mp4", "mkv", "webm");
        //     $extension = pathinfo($image_name, PATHINFO_EXTENSION);
        //     in_array($extension, $valid_extensions);
            
        //     $upload_path = '../../upload/' . time() . '.' . $extension;
        //     move_uploaded_file($_FILES['file']['tmp_name'], $upload_path);
        //     echo json_encode($image_name);
        // AssignmentModel::assignmentInsert_model($table);
    // }
    // $data = [
    //     'class_name' => $_POST['class_name'],
    //     'title' => $_POST['title'],
    //     'instruction' => $_POST['instruction'],
    //     'points' => $_POST['points'],
    //     'duedate' => $_POST['duedate'],
    //     'islock' => $_POST['islock']
    // ];
    
    $image = '';

    // if(isset($_FILES['file']['name']))
    // {
     $image_name = $_FILES['file']['name'];
     $valid_extensions = array("jpg","jpeg","png","xlsx","txt","docx","docm","pdf","ppt","pptx", "mp4", "mkv", "webm");
     $extension = pathinfo($image_name, PATHINFO_EXTENSION);
     if(in_array($extension, $valid_extensions))
     {
        $upload_path = '../../upload/' . time() . '.' . $extension;
        if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path))
        {
        $message = 'File Uploaded';
        $image = $upload_path;
        }
        else
        {
        $message = 'There is an error while uploading file';
        }
     }
     else
     {
      $message = '';
     }
    // }
    // else
    // {
    //  $message = 'Select Image';
    // }
  
    $output = array(
     'message'  => $message,
     'image'   => $image
    );
    
    echo json_encode($image_name);
    echo json_encode($_POST['title']);
    // AssignmentModel::assignmentInsert_model($data, $image_name);
// }

    function assignment_route() {
        include_once "../Models/Assignment.php";
        // include_once "../Providers/interface.php";
    }

