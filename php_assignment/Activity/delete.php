<?php
include 'Db.php';

$id = $_GET['id'];

$db = new DB();
if ($db->deleteRecord($rid)) {
    echo "Data deleted successfully!";
} else {
    echo "Error deleting data.";
}
?>