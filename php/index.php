<?php



include 'DB_con.php';

$db = new DB_con();
$data = $db->fetchdata();

if($data) {
    foreach($data as $row) {
        echo "ID: " . $row["userid"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
 
        echo "<a href='update.php?userid=" . $row["userid"] . "'>Update</a> ";
        echo "<a href='delete.php?userid=" . $row["userid"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
        echo "<hr>";
    }
} else {
    echo "No records found";
}

?>