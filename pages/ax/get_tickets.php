<?php
include("config.php");



$que="SELECT * FROM attack WHERE ticket = 0 and alert = 1";
$query=$mysqli_conn->query($que);
$no=1;
while($rows=$query->fetch_assoc())
{
$d = $rows['dest_ip'];
$attack = $rows['attack_name'];
$id = $rows['id'];

//    $id = $rows['no'];
echo "

                <div class='col-lg-3 col-md-6'>
                    <div class='panel panel-red'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa fa-support fa-5x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='medium'>$d</div>
                                    <div style='font-size: 17px;'>Attack-$attack</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href='tickets.php?parm1=$id'>
                            <div class='panel-footer'>
                                <span class='pull-left'>View Details</span>
                                <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                <div class='clearfix'></div>
                            </div>
                        </a>
                    </div>
                </div>

";

}


?>
