<?php
session_start();
include("session.php");
include("config.php");
$name = $_GET['name'];
$number = $_GET['number'];
$flag = $_GET['flag'];

$que="SELECT * FROM committee WHERE user = '$active_user'";
$query=$mysqli_conn->query($que);

if($rows=$query->fetch_assoc())
{
    if($flag==1)
    $event_name = $rows['event'];
    else if($flag==2)
        $event_name = $rows['event2'];
    else if($flag==3)
        $event_name = $rows['event3'];
}


if($active_user!='NOT_SET'){
    $querry = $mysqli_conn->query("SELECT * FROM `$event_name` WHERE phone='$number'");
                    if($row=$querry->fetch_assoc())
                    {
                        echo "already_registered";
                    }
    else{


   
    $que = "INSERT INTO `$event_name`(`name`, `phone`, `audition`, `removed`) VALUES ('$name','$number',0,0);";
$query=$mysqli_conn->query($que);
if($query)
{
echo "success";
}
    
}
    
}


?>
