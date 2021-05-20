<?php 

    if(isset($_POST['agecal']) == true) {
        $dob = $_POST['bdate'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $age = $diff->format('%y');
        
        echo json_encode(array("age" => $age));
    }