<?php

class DB {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "newphp";
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    public function insertRecord($name, $email, $phone) {
        $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllRecord() {
        $sql = "SELECT * FROM pagination";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getRecordById($userid) {
        $sql = "SELECT * FROM users WHERE id='$userid'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }

    public function update($userid, $name, $email, $phone) {
        $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$userid'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRecordById($rid) {
        $sql = "DELETE FROM users WHERE id='$rid'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
}
?>