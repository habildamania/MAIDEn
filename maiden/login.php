<?php
session_start();
include("config.php");
$user=$_GET['user'];
$pass=$_GET['pass'];




if($user&&$pass!='SETUP')
{
    
$que="SELECT * FROM committee WHERE user = '$user' AND password = '$pass'";
$query=$mysqli_conn->query($que);

if($rows=$query->fetch_assoc())
{
    $row=$query->num_rows;
if($row==1)
{
$user1=$rows['user'];
$pass=$rows['password'];
    if($rows['set_up']==0){header("location: profile.php");}    
    else{
    $_SESSION['user']=$user;
 //echo "logged in";

$log = "login by $user";
$date = time();
$que = "INSERT INTO `logs`( `log`, `date`) VALUES ('$log',$date)";
$query=$mysqli_conn->query($que);

    header("location: profile.php");
    }
}


}
    
else 
//   header("location: index.php");
        
echo '  
        <h2>Log In </h2>  <br />
        <form method ="get">
        <h4 style = "color:red;">INVALID USERNAME OR PASSWORD  </h4>
        <input type="text" id="username" style="margin : 5px"  name="username" placeholder="username" required /><br />
        <input type="password" id="password" style="margin : 5px" name="password" placeholder="password"  /><br />
        <button type="button" id="button" onclick="log_in();" style="margin : 5px" class="btn btn-danger" >SUBMIT </button>
        
        </form>';
    
}
else if($user&&$pass=='SETUP')
{
$que="SELECT * FROM committee WHERE user = '$user' AND set_up = 0";
$query=$mysqli_conn->query($que);

if($rows=$query->fetch_assoc())
{
    $row=$query->num_rows;
if($row==1)
{

    $_SESSION['temp']=$user;
    
    echo'        <h4>Set up a new password</h4>
            <input type="password" id="pass1" style="margin : 5px"  name="pass1" placeholder="password" required /><br />
        <input type="password" id="pass2" style="margin : 5px" name="pass2" placeholder="confirm password"  /><br />
        <button type="button" id="button_set" onclick="login_setup();" style="margin : 5px" class="btn btn-primary" >SUBMIT </button>
';
}
}
        else{
            echo '     
            <h2>Log In </h2>  <br />
            <form method ="get">
        <h4 style = "color:green;">Your password has been already set  </h4>
        <input type="text" id="username" style="margin : 5px"  name="username" placeholder="username" required /><br />
        <input type="password" id="password" style="margin : 5px" name="password" placeholder="password"  /><br />
        <button type="button" id="button" onclick="log_in();" style="margin : 5px" class="btn btn-danger" >SUBMIT </button>
        
        </form>';

    }

  
}

?>
    
    