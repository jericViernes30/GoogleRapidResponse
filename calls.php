<?php
include ('db.php');
$current_date = date('F d, Y');
$current_time = date('g : i : s A');

if(isset($_POST['dispatch'])){
    $responder_name = "Cardo Dalisay";
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    echo $current_date;
    echo $current_time;
    echo $address;
    echo $responder_name;

    $postData = [
        'name' => $name,
        'address' => $address,
        'dispatched_responder' => $responder_name,
        'dispatched_date' => $current_date,
        'dispatched_time' => $current_time
    ];

    $confirmData = [
        'name' => $name,
        'address' => $address,
        'number' => $number,
        'call_date' => $current_date,
        'call_time' => $current_time
    ];

    $ref_table = "history";
    $ref_table1 = "confirmed";
    $postRef = $database->getReference($ref_table)->push($postData);
    $postRef1 = $database->getReference($ref_table1)->push($confirmData);
    
    if($postRef){
        header("Location: admin/admin.php");
    } else {
        header("Location: admin/admin.php");
    }

}

if(isset($_POST['confirm'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    echo $current_date;
    echo $current_time;
    echo $address;
    echo $responder_name;

    $postData = [
        'name' => $name,
        'address' => $address,
        'number' => $number,
        'call_date' => $current_date,
        'call_time' => $current_time
    ];

    $ref_table = "confirmed";
    $postRef = $database->getReference($ref_table)->push($postData);
    
    if($postRef){
        header("Location: admin/admin.php");
    } else {
        header("Location: admin/admin.php");
    }

}