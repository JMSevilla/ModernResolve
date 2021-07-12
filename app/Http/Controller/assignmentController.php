<?php

    include_once "../config/db.php";
    include_once "../DataQuery/queries.php";

    class AssignmentController extends DBIntegrate {

        public function assignmentInsert($table, $data, $image_file) {
            if(DBIntegrate::CHECKSERVER()) {
                DBIntegrate::ControllerPrepare(lightBringerBulk::insert_assignment_query($table));
                DBIntegrate::bind(':class_name', $data['class_name']);
                DBIntegrate::bind(':title', $data['title']);
                DBIntegrate::bind(':instruction', $data['instruction']);
                DBIntegrate::bind(':islock', $data['islock']);
                if(DBIntegrate::ControllerExecutable()) {
                    // echo DBIntegrate::SuccessJSONResponse();
                    if(DBIntegrate::ControllerQuery('select max(assign_titleID) as atID from assignment_title_map')){
                        if(DBIntegrate::ControllerExecutable()) {
                            $row = DBIntegrate::controller_fetch_row();
                            $assigntitleID = $row['atID'];
                            AssignmentController::insert_assignmentController($assigntitleID, $data, $image_file);
                            echo json_encode($row);
                        }
                    }
                }
            }
        }   

        public function insert_assignmentController($assigntitleID, $data, $image_file){
            // $image_name = $_FILES['file']['name'];
            // $valid_extensions = array("jpg","jpeg","png","xlsx","txt","docx","docm","pdf","ppt","pptx", "mp4", "mkv", "webm");
            // $extension = pathinfo($image_name, PATHINFO_EXTENSION);
            // in_array($extension, $valid_extensions)
            
            // $upload_path = '../../upload/' . time() . '.' . $extension;
            // move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)
                
            // $image_name = $_FILES['file']['name'];
            DBIntegrate::ControllerPrepare(lightBringerBulk::insert_assignmentTitle_query('assignment'));
            DBIntegrate::bind(':assigntitleID', $assigntitleID);
            DBIntegrate::bind(':points', $data['points']);
            DBIntegrate::bind(':duedate', $data['duedate']);
            DBIntegrate::bind(':filename', $image_file);

            if(DBIntegrate::ControllerExecutable()){
                echo DBIntegrate::SuccessJSONResponse();
            }
        }       
}
   
    