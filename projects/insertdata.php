<?php
include_once 'db.php';
$named = $_REQUEST['named'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];


$insert_query = "INSERT INTO `studentinfoo`( `name`, `email`, `PASSWORD`) VALUES ( '$named','$email ','$pass')";
$res =  mysqli_query($conn,$insert_query);

if ($res) {
      echo "form submitted ";
}else{
      mysqli_error($conn);
}




mysqli_close($conn);



?>