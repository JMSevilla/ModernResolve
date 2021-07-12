<?php 

    // include_once "../Http/Controller/assignmentController.php";

    class AssignmentModel{

        public function assignmentInsert_model($data, $file_upload) {
            $data = [
                'class_name' => $_POST['class_name'],
                'title' => $_POST['title'],
                'instruction' => $_POST['instruction'],
                'points' => $_POST['points'],
                'duedate' => $_POST['duedate'],
                'islock' => $_POST['islock']
            ];
            echo json_encode($file_upload);
            echo json_encode($data);
            // AssignmentController::assignmentInsert($table, $data, $image_file);
        }        
    }