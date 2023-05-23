<?php
class DB_con {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_database";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insert($first_name, $last_name, $age) {
        $sql = "INSERT INTO person (first_name, last_name, age) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $first_name, $last_name, $age);
        $stmt->execute();

        $stmt->close();
    }

    public function fetchdata() {
        return $this->conn->query("SELECT * FROM person");
    }

    public function fetchonerecord($id) {
        $result = $this->conn->query("SELECT * FROM person WHERE id=$id");
        return $result->fetch_assoc();
    }

    public function update($first_name, $last_name, $age, $id) {
        $sql = "UPDATE person SET first_name=?, last_name=?, age=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssii", $first_name, $last_name, $age, $id);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM person WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}
