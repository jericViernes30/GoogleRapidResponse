<?php
session_start();
include ('../../db.php');

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $postData = [
        'name' => $name,
        'gender' => $gender
    ];

    $ref_table = "users";
    $postRef = $database->getReference($ref_table)->push($postData);
    
    if($postRef){
        $_SESSION['status'] = "Added Successfully";
        header("Location: insert.php");
    } else {
        $_SESSION['status'] = "Not added";
        header("Location: insert.php");
    }
}