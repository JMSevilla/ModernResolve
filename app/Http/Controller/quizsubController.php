<?php
include_once "../config/db.php";
include_once "../DataQuery/queries.php";

class fetchquizsubController extends DBIntegrate {
    public function fetchquizsub_class($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::fetch_quizsub_query($table))){
                DBIntegrate::bind(":class_name", $data['class_name']);
                if(DBIntegrate::ControllerExecutable()){
                   $row = DBIntegrate::controller_fetch_all(); 
                   echo json_encode($row);
                }
            }
        }
    }

    public function fetchquizgrade_class($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::fetch_quizgrade_query($table))){
                DBIntegrate::bind(":scoreID", $data['scoreID']);
                if(DBIntegrate::ControllerExecutable()){
                   $row = DBIntegrate::controller_fetch_all(); 
                   echo json_encode($row);
                }
            }
        }
    }

    public function gradedquiz_controller($table, $data)
    {
        if(DBIntegrate::CHECKSERVER()){
            if(DBIntegrate::ControllerPrepare(lightBringerBulk::gradedquiz_query($table))){
                // DBIntegrate::bind(":score", $data['score']);
                DBIntegrate::bind(":scoreID", $data['scoreID']);
                if(DBIntegrate::ControllerExecutable()){
                    $row = DBIntegrate::controller_fetch_row();
                    $total = $row['score'] + $data['score'];
                    if(DBIntegrate::ControllerPrepare("update student_score set score = $total where scoreID = $data[scoreID]")){
                        if(DBIntegrate::ControllerExecutable()){
                            
                            echo json_encode('success');
                         }
                    }
                    echo json_encode('success');
                }
            }
        }
    }
}