<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    $output = [
        'userId' => $userId,
        'password' => $password,
    ];

    header('Content-Type: application/json');
    
    echo json_encode($output);
    //exit; Stop execution after sending JSON response
}
?>