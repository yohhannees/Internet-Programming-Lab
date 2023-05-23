<?php
include 'DB_con.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $db = new DB_con();
    if($db->update($userid, $name, $email, $phone)) {
        echo "Data updated successfully";
    } else {
        echo "Error updating data";
    }
} else {
    // Get the user's information from the database
    $db = new DB_con();
    $userid = $_GET["userid"]; // get the user ID from the URL parameter
    $row = $db->fetchonerecord($userid); // use the fetchonerecord() function to get the user's information
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];}
?>

<form action="update.php" method="post">
    <input type="hidden" name="userid" value="<?php echo $userid; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
    <input type="submit" value="Update">
</form>

