<?php
@session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../../../includes.php';
include_once '../../api/callapi.php';


$url = null;
$caminho = "uploads/";
$target_dir = "../../../uploads/";
$target_file = $target_dir . basename($_FILES["foto_perfil"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto_perfil"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["foto_perfil"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $target_file)) {
    $url = $caminho.htmlspecialchars( basename( $_FILES["foto_perfil"]["name"]));
    // echo "The file ". $url . " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$data = [
        "caminho"=>$url, 
        "nome"=> $_POST['nome'],
        "id_departamento"=>$_POST['departamento'],
        "id_provincia"=>$_POST['provincia'],
        "id_distrito"=>$_POST['distrito'],
        "data_nascimento"=>$_POST['data_de_nascimento'],
        "contacto"=>$_POST['contacto'],
        "genero"=>$_POST['genero']  
];

$json = callapi($mainUrl . "funcionario", "POST", $data);
// echo "<pre>";
// print_r($data);
// echo "</pre";



echo json_encode($json);
//print_r($json);
