<?php
include("config.php");
$id = $_GET['id'];



    $que1 = "UPDATE attack SET ticket = 1 WHERE id = $id";
$query1=$mysqli_conn->query($que1);
if($query1)
echo "success";


?>
