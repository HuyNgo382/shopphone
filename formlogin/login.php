<?php
    require_once('./core/function.php');
    header('Access-Control-Allow-Origin: *');
    // login
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $user = login($email , $password);
    if($user == true) {
        $response = array (
            'code' => 200 ,
            'data' =>$user
        );
    } else {
        $response = array(
            'code' => 500,
            'data' => []
        );
     }
     
// register
    $email = $_POST['email2'];
    $password = $_POST['password2'];
    $bool = register($email, $password);

    $response = array(
    'status' => $bool
    );

    echo json_encode($response);
// ?>

