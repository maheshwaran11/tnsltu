<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/users.php';
 
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$userObj = new Users($db);
 
$data = json_decode(file_get_contents("php://input"));

// query products
// $username = isset($_POST["username"]) ? $_POST["username"] : '';
// $password = isset($_POST["password"]) ? $_POST["password"] : '';
$stmt = $userObj->getAllUsers();
$num = $stmt->rowCount();
// print_r($username); 
// check if more than 0 record found
if(!empty($data->username)){
 
    // products array
    $users_arr=array();
    $users_arr["users"]=array();
    $users->username = $data->username;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        $user_item=array(
            "id" => $id,
            "username" => $username,
            "password" => $password,
            "email" => $email,
            "userType" => $userType
            // "description" => html_entity_decode($description),
        );
 
        array_push($users_arr["users"], $user_item);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($users_arr);
}
else {
     // set response code - 404 Not found
     http_response_code(404);
 
     // tell the user no products found
     echo json_encode(
         array("message" => "No records found.")
     );
}
 