




<?php
require_once 'DB_con.php';

$id = $_GET['id'];

$db = new DB_con();
$db->delete($id);

header("location: index.php");
?>