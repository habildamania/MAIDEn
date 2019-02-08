<!DOCTYPE html>
<html lang="en">
<?php
include("./ax/config.php");
$id = $_GET['parm1'];
$que="SELECT * FROM attack WHERE id = $id";
$query=$mysqli_conn->query($que);
if($rows=$query->fetch_assoc())
{
$s_ip = $rows['source_ip'];
$s_p = $rows['source_port'];
$d_ip = $rows['dest_ip'];
$d_p = $rows['dest_port'];
$attack = $rows['attack_name'];
}

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Team MAIDEn</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Overview</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Analytics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="unique.php">Uniqueness</a>
                                </li>
                                <li>
                                    <a href="threat.php">Threats</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="flot.php"><i class="fa fa-table fa-fw"></i> Performance</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> DNS</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Firewall<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Access Lists</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Traffic<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="login.html">Requests</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     <li>
                            <a href="blank1.html"><i class="fa fa-bar-chart-o fa-fw"></i> Live Graphs</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Resolve Tickets</h1>
                    <h2>Source IP:
                                <medium style="font-size: 25px;" class="text-primary"><?php echo $s_ip  ?></medium>
                            </h2>
                    <h2>Destination IP:
                                <medium style="font-size: 25px;" class="text-primary"><?php echo $d_ip  ?></medium>
                            </h2>
                    <h2>Source Port:
                                <medium style="font-size: 25px;" class="text-primary"><?php echo $s_p  ?></medium>
                            </h2>
                    <h2>Destination Port:
                                <medium style="font-size: 25px;" class="text-primary"><?php echo $d_p  ?></medium>
                            </h2>
                    <h2>Attack Type:
                                <medium style="font-size: 25px;" class="text-danger"><?php echo $attack  ?></medium>
                            </h2>

                     <button type="button" id = "block_ip_button" class="btn btn-outline btn-danger btn-lg btn-block" onclick="block(<?php echo $id  ?>);">Block IP</button>
                    <button type="button" id = "block_ipr_button" class="btn btn-outline btn-danger btn-lg btn-block" onclick="block_range(<?php echo $id  ?>);">Block IP Range</button>
                    <button type="button" id = "block_port_button" class="btn btn-outline btn-danger btn-lg btn-block" onclick="block_port(<?php echo $id  ?>);">Block Port</button>
                    <button type="button" id = "resolve_button" class="btn btn-outline btn-success btn-lg btn-block" onclick="resolve(<?php echo $id  ?>);">Resolve Issue</button>

<br />
<br />
<br />

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
    <script type="text/javascript">


  function block($id){
                                        if(window.XMLHttpRequest)
                                    {
                                        xmlhttp = new XMLHttpRequest();
                                    }else
                                    {
                                        xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                        xmlhttp.onreadystatechange = function(){
                                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if(xmlhttp.responseText=="success"){
	                            document.getElementById("block_ip_button").innerHTML ="Ip blocked";
					$("#block_ip_button").removeClass("btn-danger");
					$("#block_ip_button").addClass("btn-success");
					}        
                                                //get_categoary_table();//to get categoary table after getting this table
                                             }
                                        }
                                        xmlhttp.open('GET','./ax/block_ip.php?id='+$id, true);
                                            xmlhttp.send();
        }
  function block_range($id){
                                        if(window.XMLHttpRequest)
                                    {
                                        xmlhttp = new XMLHttpRequest();
                                    }else
                                    {
                                        xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                        xmlhttp.onreadystatechange = function(){
                                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if(xmlhttp.responseText=="success"){
	                            document.getElementById("block_ipr_button").innerHTML ="IP range blocked";
					$("#block_ipr_button").removeClass("btn-danger");
					$("#block_ipr_button").addClass("btn-success");

					}        
                                                //get_categoary_table();//to get categoary table after getting this table
                                             }
                                        }
                                        xmlhttp.open('GET','./ax/block_ip.php?id='+$id, true);
                                            xmlhttp.send();
        }
  function block_port($id){

                                        if(window.XMLHttpRequest)
                                    {
                                        xmlhttp = new XMLHttpRequest();
                                    }else
                                    {
                                        xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                        xmlhttp.onreadystatechange = function(){
                                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if(xmlhttp.responseText=="success"){
	                            document.getElementById("block_port_button").innerHTML ="Port blocked";
					$("#block_port_button").removeClass("btn-danger");
					$("#block_port_button").addClass("btn-success");

        				}
                                                //get_categoary_table();//to get categoary table after getting this table
                                             }
                                        }
                                        xmlhttp.open('GET','./ax/block_port.php?id='+$id, true);
                                            xmlhttp.send();
        }
  function resolve($id){

                                        if(window.XMLHttpRequest)
                                    {
                                        xmlhttp = new XMLHttpRequest();
                                    }else
                                    {
                                        xmlhttp = ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                        xmlhttp.onreadystatechange = function(){
                                            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if(xmlhttp.responseText=="success"){
	                            document.getElementById("resolve_button").innerHTML ="Ticket Cleared";
					$("#resolve_button").removeClass("btn-success");
					$("#resolve_button").addClass("btn-primary");

        				}
                                                //get_categoary_table();//to get categoary table after getting this table
                                             }
                                        }
                                        xmlhttp.open('GET','./ax/resolve_ticket.php?id='+$id, true);
                                            xmlhttp.send();


        }

</script>

</html>
