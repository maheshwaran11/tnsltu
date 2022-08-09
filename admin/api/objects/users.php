<?php
class Users{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
    private $uname;
 
    // object properties
    public $id;
    public $username;
    public $email;
    public $password;
    public $userType;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }


// read products
function getAllUsers(){
    $this->username = htmlspecialchars(strip_tags($this->username));
    
    // select all query
    // $query = "SELECT c.name as category_name, p.id, p.name, p.description, p.prize, p.category_id, p.created_on
    //         FROM " . $this->table_name . " p LEFT JOIN categories c ON p.category_id = c.id ORDER BY p.created_on DESC";
    
    $query = "SELECT * FROM " . $this->table_name . " WHERE username=:username ";
    
    print_r($query);
    // prepare query statement
    $stmt = $this->conn->prepare($query);
    $this->username = htmlspecialchars(strip_tags($this->username));
    $stmt->bindParam(":username", $this->username);
    // execute query
    $stmt->execute();
 
    return $stmt;

}

// create product
// function create(){
 
//     // query to insert record
//     $query = "INSERT INTO " . $this->table_name . " SET
//                 name=:name, prize=:price, description=:description, category_id=:category_id, created_on=:created";
 
//     // prepare query
//     $stmt = $this->conn->prepare($query);
 
//     // sanitize
//     $this->name=htmlspecialchars(strip_tags($this->name));
//     $this->price=htmlspecialchars(strip_tags($this->price));
//     $this->description=htmlspecialchars(strip_tags($this->description));
//     $this->category_id=htmlspecialchars(strip_tags($this->category_id));
//     $this->created=htmlspecialchars(strip_tags($this->created));
 
//     // bind values
//     $stmt->bindParam(":name", $this->name);
//     $stmt->bindParam(":price", $this->price);
//     $stmt->bindParam(":description", $this->description);
//     $stmt->bindParam(":category_id", $this->category_id);
//     $stmt->bindParam(":created", $this->created);
 
//     // execute query
//     if($stmt->execute()){
//         return true;
//     }
 
//     return false;
     
// }
}