<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: *");

$con = new mysqli('localhost', 'root', '', 'nova');

$data = json_decode(file_get_contents('php://input'), true);
$con->query("insert into blog(photo,title,detail,categorie,r_photo,r_title,tag_item)values('" . $data['photo'] . "','" . $data['title'] . "','" . $data['detail'] . "','" . $data['categorie'] . "','" . $data['r_photo'] . "','" . $data['r_title'] . "','" . $data['tag_item'] . "')");
echo json_encode(['status'=>true]);