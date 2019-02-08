<?php
include("config.php");
$id = $_GET['id'];


$que="SELECT * FROM attack WHERE id = $id";
$query=$mysqli_conn->query($que);
$no=1;
if($rows=$query->fetch_assoc())
{
$s_ip = $rows['source_ip'];
$d_ip = $rows['dest_ip'];
$time = $rows['timestamp_data'];

    $que1 = "INSERT INTO `block_ip`(`source_ip`, `dest_ip`,`timestamp`) VALUES ('$s_ip','$d_ip','$time');";
$query1=$mysqli_conn->query($que1);
if($query1)
echo "success";

}


?>
