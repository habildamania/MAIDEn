<?php
include("config.php");
$id = $_GET['id'];



    $que1 = "DELETE from block_port WHERE id = $id";
$query1=$mysqli_conn->query($que1);
if($query1)
echo "success";


?>
