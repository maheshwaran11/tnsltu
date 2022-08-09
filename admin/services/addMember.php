<?php
    include_once('db.php');
    
    $data = json_decode($_POST['data']);
    header('Content-type: application/json');
    $firstName = $data->firstName;
    $username = $firstName.'user';
    $password = $firstName.'pass';
    $lastName = $data->lastName;
    $email = $data->email;
    $mobile = $data->mobile;
    $idNumber = $data->idNumber;
    $adminType = $data->adminType;
    $description = $data->description;
    $photoName = $data->photoName;
    $joinedDate = '11/01/1000';
    if (!empty($firstName)) {
        $qur = "insert into users (`username`, `firstName`, `lastName`, `password`, `email`, `userType`, `mobile`, `idNumber`, `description`, `joinedDate`, `photo` ) 
                        VALUES ('$username', '$firstName', '$lastName', '$password', '$email', '$adminType', '$mobile', '$idNumber', '$description', '$joinedDate', '$photoName') ";
        $result = mysqli_query($conn, $qur);
        if($result) {
            $json = array("status" => 1, "info" => 'Data added successfully');
        } else {
            $json = array("status" => -1, "info" => 'Try again');
        }
    } else {
        $json = array("status" => -2, "info" => 'Try again');
    }
    echo json_encode($json);

    @mysqli_close($conn);

?>