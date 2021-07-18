<?php 
    
    $image = '';
    $newpath_img = '';

    if(isset($_FILES['file']['name']))
    {
     $image_name = $_FILES['file']['name'];
     $valid_extensions = array("jpg","jpeg","png","xlsx","txt","docx","docm","pdf","ppt","pptx", "mp4", "mkv", "webm");
     $extension = pathinfo($image_name, PATHINFO_EXTENSION);
     if(in_array($extension, $valid_extensions))
     {
        $upload_path = '../../uploadPost/' . time() . '.' . $extension;
        $newpath_upload = time() . '.' . $extension;
        if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path))
        {
        $message = 'File Uploaded';
        $image = $upload_path;
        $newpath_img = $newpath_upload;
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
    }
    // else
    // {
    //  $message = 'Select Image';
    // }
  
    $output = array(
     'message'  => $message,
     'image'   => $image
    );
    
    echo json_encode($newpath_img);

