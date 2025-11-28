<?php
include_once 'db.php';
$named = $_REQUEST['named'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$id = $_REQUEST['id'];

$insert_query = "UPDATE `studentinfoo` SET `name`='$named',`email`='$email',`PASSWORD`='$pass' WHERE `id`= $id";
$query = mysqli_query($conn,$insert_query);

if ($query) {
      echo "form submitted ";
} else {
      mysqli_error($conn);
}




mysqli_close($conn);
