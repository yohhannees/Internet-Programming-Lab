<?php
require_once 'DB_con.php';

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['age'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $db = new DB_con();
    $db->insert($first_name, $last_name, $age);
}

header("location: index.php");
