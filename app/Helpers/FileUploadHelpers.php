<?php

//upload.php

$image = '';

if(isset($_FILES['file']['name']))
{
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
}
else
{
 $message = 'Select Image';
}

$output = array(
 'message'  => $message,
 'image'   => $image
);

echo json_encode($output);


?>