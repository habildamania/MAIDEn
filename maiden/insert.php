<?php
include("config.php");
require('textlocal.class.php');


$data = $_POST['data'];

$lines = explode("\n", $data);

foreach($lines as $line)
{
if(line!=''){
list($algo[],$attack[],$source[],$source_p[],$destination[],$destination_p[],$tim_s[])
= explode(',',$line);
}
}//foreach loop
for ($x = 0; $x <= count($algo); $x++) {

$s = $source[$x];
$s_p = $source_p[$x];
$d = $destination[$x];
$d_p = $destination_p[$x];
$ts = $tim_s[$x];
$att = $attack[$x];
$attn = $algo[$x];
$ts1 = mktime();

$que="SELECT * FROM attack WHERE source_ip = '$s' AND dest_ip = '$d' AND attack_name = '$att' AND ticket = 0 ORDER BY id DESC LIMIT 1";
$query=$mysqli_conn->query($que);

if($rows=$query->fetch_assoc())
{
$row=$query->num_rows;
$classifier = $rows['classifiers'];
$id = $rows['id'];
if($attn==1){$attn_d=$classifier+4;}
else if($attn==2){$attn_d=$classifier+2;}
else if($attn==3){$attn_d=$classifier+1;}

if($attn_d == 6 || $attn_d == 3 || $attn_d == 5){
echo $id;
$que="UPDATE attack SET classifiers = $attn_d, alert = 1 WHERE id = $id";
$query=$mysqli_conn->query($que);



$q_alert = 'python noti.py "attack from '. $s .'" "attack type : '. $att .'" '. $id .' 12';
shell_exec ($q_alert);


/*echo "Setting up message";
//$textlocal = new Textlocal('chaitanya1chavan@gmail.com', 'Cadsqw12qwe');
$name = 'Chaitanya';
$numbers = array('917875050867');
$sender = 'TXTLCL';
$message = 'Hi ' .$name. ' IDS has detected an attack at '. $d. ' Plese go to this link URL to take further actions';
echo "Setting up message Done";
try {
        //$result = $textlocal->sendSms($numbers, $message, $sender);
    //echo $result;
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
 //   echo $e->getMessage();

}
*/

echo $attn_d;
}
else if($attn_d == 7){
echo $id;
echo "third classifer detected";
$que="UPDATE attack SET classifiers = $attn_d WHERE id = $id";
$query=$mysqli_conn->query($que);
}

}
else if($s!=''){
if($attn==1){$attn_d=4;}
else if($attn==2){$attn_d=2;}
else if($attn==3){$attn_d=1;}
    $que1 = "INSERT INTO `attack`(`source_ip`, `source_port`, `dest_ip`, `dest_port`,`attack_name`,`attack_type`,`classifiers`,`timestamp_data`,`timestamp`,`alert`,`ticket`) VALUES ('$s','$s_p','$d','$d_p','$att','','$attn_d','$ts','$ts1',0,0);";
$query1=$mysqli_conn->query($que1);
if($query1)
{echo $attack[$x];echo"inside";
echo $x;}

	
}//else (no entries)
    
}//main for loop 


echo "success";

?>
