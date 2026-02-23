<?php

// cara buat class
class m_koneksi{

// property
private $host = "localhost" , $username = "root" , $password = "", $database = "db_perpustakaan";
public $conn;
 function __construct(){
    $this->conn =mysqli_connect(
    $this->host ,$this->username,$this->password,$this->database);

    if(!$this->conn){
    echo ("error:" . mysqli_connect_error()); 
    } else{
return $this->conn;
    // echo"berhasil";
    }
    

 }
}


?>