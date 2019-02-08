<?php
include("config.php");
$id = $_GET['id'];



    $que1 = "DELETE from block_ip WHERE id = $id";
$query1=$mysqli_conn->query($que1);
if($query1)
echo "success";


?>
