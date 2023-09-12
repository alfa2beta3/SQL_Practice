<?php 

require_once("db_credential.php");

function db_connect(){
    $conn = mysqli_connect(HOST, USER, PASS, DATABASE);
    return $conn;
}

function db_disconnect($conn){
    mysqli_close($conn);
}

?>