<?php
$db_username        = 'root'; //MySql database username
$db_password        = 'maidenmysql'; //MySql dataabse password
$db_name            = 'maiden'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP



$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}
