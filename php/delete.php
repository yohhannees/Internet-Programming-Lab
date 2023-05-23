<?php
include 'DB_con.php';

if(isset($_GET["userid"])) {
    $rid = $_GET["userid"];

    $db = new DB_con();
    if($db->delete($rid)) {
        echo "Data deleted successfully";
        header(location:index.php);
    } else {
        echo "Error deleting data";
    }
}
?>
