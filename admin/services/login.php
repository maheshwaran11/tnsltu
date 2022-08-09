<?php
    include_once('db.php');
    
    header('Content-type: application/json');
    // echo json_decode('test');
    if (isset($_POST['username']) && $_POST['username'] != '' &&
        isset($_POST['password']) && $_POST['password'] != '') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $qur = "select * from `users` WHERE `username`='$username' && `password`='$password' ";
            $result = mysqli_query($conn, $qur);
            
            if ($result->num_rows> 0 ){
                while($response = mysqli_fetch_array($result)){
                    extract($response);
                    $respData[] = array(
                        "username" => $username, 
                        "password" => $password, 
                        "userType" => $userType, 
                        "id" => $id
                    ); 
                }
                session_start();
                $_SESSION['data'] = $respData[0];
                $json = array("status" => 1, "info" => $respData);
            }
            else {
                $json = array("status" => -1, "info" => 'Invalid credentials');
            }
        } else {
            $json = array("status" => -2, "info" => 'Invalid credentials');
        }

    echo json_encode($json);

    @mysqli_close($conn);
?>