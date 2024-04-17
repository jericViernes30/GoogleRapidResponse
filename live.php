<<<<<<< HEAD
<?php
include("db.php");
$ref = "users";
$fetch = $database->getReference($ref)->getValue();
foreach($fetch as $key => $row){
?>
    <p>Message: <?php echo $row['message'] ?></p>
<?php
}
?>
=======
<?php
include("db.php");
$ref = "users";
$fetch = $database->getReference($ref)->getValue();
foreach($fetch as $key => $row){
?>
    <p>Message: <?php echo $row['message'] ?></p>
<?php
}
?>
>>>>>>> f0c8d8f (initial commit)
