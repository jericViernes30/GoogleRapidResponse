<?php
include 'db.php';

if(isset($_POST['login'])){
    $barangay = $_POST['barangay'];
    $password = $_POST['password'];
    


    header("Location: admin/admin.php");
    // $query = $usersRef->orderByChild('barangay')->equalTo($barangay)->getValue();
    // var_dump($query);
    // if (!empty($query)) {
    //     foreach ($query as $key => $user) {
    //         if ($user['password'] === $password) {
                
    //         }
    //     }
    // }

    // header("Location: index.php");
}