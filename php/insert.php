<?php
include 'DB_con.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $db = new DB_con();
    if($db->insert($name, $email, $phone)) {
        echo "Data inserted successfully";
        header("location:index.php");
    } else {
        echo "Error inserting data";
    }
}
?>
<html> 
<head> 
<body> 
<form method="post"> 
    <table align="center"> 
    <tr> 
    <td><input type="text" name="name" placeholder="Name" /></td> 
    </tr> 
    <tr> 
    <td><input type="text" name="email" placeholder="Email" /></td> 
    </tr> 
    <tr> 
    <td><input type="text" name="phone" placeholder="phone" /></td> 
    </tr> 
    <tr> 
    <td> 
    <button type="submit" name="btn-save"><strong>SAVE</strong></button></td> 
    </tr> 
    </table> 
</form> 
</body> 
</html>