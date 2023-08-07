<?php
@session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../../includes.php';
include_once '../../api/callapi.php';

$data = [
        "nome"=> $_POST['nome'],
        "descricso"=>$_POST['descricao'],
        "duracao"=>$_POST['duracao'],
        
];

//print_r($data);


$json = callapi($mainUrl . "treinamento/".$_POST['id'], "PUT", $data);
//$response = callapi($mainUrl . "funcionario/".$_GET['id'], "GET");
// print_r($data);

echo json_encode($json);
// // print_r($json);