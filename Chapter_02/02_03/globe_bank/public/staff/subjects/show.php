<?php

// $id = $_GET['id'];

//or

// if(isset($_GET['id'])){
//     $id = $_GET['id'];
// }else{
//     $id = 1;
// }

//or

// $id = isset($_GET['id'])?$_GET['id']:'1';

$id = $_GET['id']?? '1';

 echo $id;

?>
