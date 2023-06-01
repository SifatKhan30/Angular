<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$con = new mysqli('localhost', 'root', '', 'nova');
$d = $con->query('select * from team order by id desc limit 4');
$data = $d->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);