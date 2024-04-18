<?php
include 'db.php';

if(isset($_POST['login'])){
    $barangay = $_POST['barangay']; // Get barangay from form submission
    $password = $_POST['password']; // Get password from form submission

    $usersRef = $database->getReference('admin');
    
    // Query to check if the provided barangay and password exist in the database
    $query = $usersRef->orderByChild('barangay')->equalTo($barangay)->getValue();
    var_dump($query);
    if (!empty($query)) {
        foreach ($query as $key => $user) {
            if ($user['password'] === $password) {
                header("Location: admin/admin.php");
            }
        }
    }

    header("Location: index.php"); // Authentication failed
}