<?php
        session_start();
        include '../database/config.php';
        $testName = "";

        if(isset($_SESSION['student_details'])){
            $data = $_SESSION['student_details'];
            $student_data = json_decode($data);
        

            foreach($student_data as $obj){
                // echo $obj->test_id;
                $result = mysqli_query($conn, "SELECT * FROM tests WHERE id = '".$obj->test_id."'");
                // $result = mysqli_query($conn, "SELECT * FROM tests WHERE id = 6 AND  status_id IN (1)");
                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['test_id'] = $row['id'];
                        $testName = $row['name'];
                        // echo $_SESSION['test_id'];
                    }
                }     
            }

            echo $testName;
           
           }else{
            echo "Not Found";
           }

        mysqli_close($conn);?>