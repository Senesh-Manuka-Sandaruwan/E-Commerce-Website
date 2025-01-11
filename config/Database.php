<?php
// class Database {
//     private $host = "localhost";
//     private $db_name = "crunchy_sweets";
//     private $username = "root";
//     private $password = "";
//     public $conn;

//     public function connect() {
//         $this->conn = null;
//         try {
//             $this->conn = new PDO("mysql:host=" . $this->hostt . ";dbname=" . $this->db_name, $this->username, $this->password);
//             $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         } catch (PDOException $e) {
//             echo "Connection error: " . $e->getMessage();
//         }
//         return $this->conn;
//     }
// }

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crunchy_sweets");

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$conn){
    die("Connection Falied");
}

else{
    echo ('');
}

?>
