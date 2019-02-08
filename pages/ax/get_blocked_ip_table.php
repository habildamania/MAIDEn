<?php
include("config.php");
    //echo"In";
echo"                            <table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                <thead>
                                    <tr>
                                        <th>Source ip</th>
                                        <th>Destination ip</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
";
    $que = "SELECT * FROM `block_ip`";   
 $query=$mysqli_conn->query($que);
$no=1;
while($rows=$query->fetch_assoc())
{
$id = $rows['id'];
$s_ip = $rows['source_ip'];
$d_ip = $rows['dest_ip'];
$time = $rows['timestamp'];

echo"                                    <tr class='odd gradeX'>
                                        <td>$s_ip</td>
                                        <td>$d_ip</td>
                                        <td>$time</td>
                                        <td><button type = 'button' onclick = 'unblock_ip($id);'> Unblock IP </button></td>


                                    </tr>
";

}
echo"</tbody>
</table>
";

?>
