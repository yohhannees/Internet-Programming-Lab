<?php
include 'DB.php';

$userid = $_POST['userid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$db = new DB();
if ($db->updateRecord($userid, $name, $email, $phone)) {
    echo "Data updated successfully!";
} else {
    echo "Error updating data.";
}
?>