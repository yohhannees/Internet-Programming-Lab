<?php

class DB_con {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "newphp";
    private $conn;

    // constructor function to create database connection
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database,3309);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // function to insert data into users table
    public function insert($name, $email, $phone) {
        $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // function to fetch all data from users table
    public function fetchdata() {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else{
            return false;
        }
    }

    // function to fetch one record from users table based on userid
    public function fetchonerecord($userid) {
        $sql = "SELECT * FROM users WHERE userid='$userid'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    // function to update data in users table based on userid
    public function update($userid, $name, $email, $phone) {
        $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE userid='$userid'";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // function to delete data from users table based on row id
    public function delete($rid) {
        $sql = "DELETE FROM users WHERE userid='$rid'";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // destructor function to close database connection
    public function __destruct() {
        $this->conn->close();
    }
}