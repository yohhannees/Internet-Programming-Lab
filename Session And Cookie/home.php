<?php
session_start();

if (!isset($_SESSION['username'])) {

    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>You are now logged in.</p>
</body>