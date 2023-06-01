<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$con = new mysqli('localhost', 'root', '', 'nova');
$d = $con->query('select * from about order by id desc');
$data = $d->fetch_assoc();
echo json_encode($data);