<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$con = new mysqli('localhost', 'root', '', 'nova');
$d = $con->query('select * from f_loop order by id desc');
$data = $d->fetch_all(MYSQLI_BOTH);
echo json_encode($data);