<?php
include 'Db.php';

$db = new DB();
$data = $db->getAllRecord();

if ($data) {
    foreach ($data as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['Name'] . "<br>";
        echo "Email: " . $row['Age'] . "<br>";
        echo "Phone: " . $row['Department'] . "<br>";
        echo "<a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a><br><br>";
    }
} else {
    echo "No data found.";
}


?>