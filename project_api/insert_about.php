<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$con = new mysqli('localhost', 'root', '', 'nova');

$data = json_decode(file_get_contents('php://input'), true);
$con->query("insert into about(title,details,b_photo,photo)values('" . $data['name'] . "','" . $data['details'] . "','" . $data['b_photo'] . "','" . $data['photo'] . "')");
echo json_encode(['status'=>true]);