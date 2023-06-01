<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$con = new mysqli('localhost', 'root', '', 'nova');

$data = json_decode(file_get_contents('php://input'), true);
$con->query("insert into contact(name,email,subject,message)values('" . $data['name'] . "','" . $data['email'] . "','" . $data['subject'] . "','" . $data['message'] . "')");
echo json_encode(['status'=>true]);