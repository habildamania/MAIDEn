<?php
$name = $_GET['name'];
$que = "python3 injector_client.py $name";
$data = exec($que);
echo "$data";

?>
