<?php
    include_once('db.php');
    
    header('Content-type: application/json');
    // echo json_decode('test');
            $qur = "select * from `users`";
            $result = mysqli_query($conn, $qur);
            
            while($response = mysqli_fetch_array($result)){
                extract($response);
                $respData[] = array(
                    "username" => $username, 
                    "password" => $password, 
                    "userType" => $userType, 
                    "id" => $id,
                    "idNumber" => $idNumber,
                    "email" => $email,
                    "mobile" => $mobile,
                    "description" => $description,
                    "joinedDate" => $joinedDate,
                    "photo" => $photo
                );
            }
            $json = array("status" => 1, "info" => $respData);
            
    echo json_encode($json);

    @mysqli_close($conn);
?>