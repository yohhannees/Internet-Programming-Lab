<?php
include 'DB.php';

$name = $_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];

$db = new DB_con();
if ($db->insert($name, $email, $phone)) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data.";
}
?>
