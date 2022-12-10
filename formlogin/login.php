<?php
require_once './core/function.php';
header('Access-Control-Allow-Origin: *');

$email1 = $_POST['email1'];
$password1 = $_POST['password1'];

$user = login($email1, $password1);

if($user == false){
    $response = array(
        'code' => 500,
        'data' => []
    );
}else{
    $response = array(
        'code' => 200,
        'data' => $user
    );
}

echo json_encode($response);
    

// register

$email2 = $_POST['email2'];
$password2 = $_POST['password2'];

$bool = register($email2, $password2);

$response = array(
    'status' => $bool
);

echo json_encode($response);
 ?>

