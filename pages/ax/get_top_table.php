<?php
include("config.php");
    //echo"In";
echo"                            <table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                <thead>
                                    <tr>
                                        <th>Source ip</th>
                                        <th>Source port</th>
                                        <th>Destination ip</th>
                                        <th>Destination port</th>
                                        <th>Attack Name</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
";
    $que = "SELECT *,count(*) FROM attack where alert = 1 group by attack_name order by count(*) desc";   
 $query=$mysqli_conn->query($que);
$no=1;
while($rows=$query->fetch_assoc())
{
$s_ip = $rows['source_ip'];
$s_p = $rows['source_port'];
$d_ip = $rows['dest_ip'];
$d_p = $rows['dest_port'];
$attack = $rows['attack_name'];
$time = $rows['timestamp_data'];

echo"                                    <tr class='odd gradeX'>
                                        <td>$s_ip</td>
                                        <td>$s_p</td>
                                        <td>$d_ip</td>
                                        <td>$d_p</td>
                                        <td>$attack</td>
                                        <td>$time</td>

                                    </tr>
";

}
echo"</tbody>
</table>
";

?>
