<?php

$name = $_POST['name'];
$password = $_POST['password'];


if ($name == "Yohannes") {

    session_start();
    $_SESSION['username'] = $name;


    setcookie("my_cookie", "cookie_value", time() + (86400 * 30), "/");

    header("Location: home.php");
    exit();
} else {

    header("Location: index.php");
    exit();
}
