<?php
include("config.php");
$id = $_GET['id'];


$que="SELECT * FROM attack WHERE id = $id";
$query=$mysqli_conn->query($que);
$no=1;
if($rows=$query->fetch_assoc())
{
$s_ip = $rows['source_ip'];
$d_port = $rows['dest_port'];
$time = $rows['timestamp_data'];

    $que1 = "INSERT INTO `block_port`(`dest_ip`, `dest_port`) VALUES ('$s_ip','$d_port');";
$query1=$mysqli_conn->query($que1);
if($query1)
echo "success";
else
echo "ajax working";
}


?>
