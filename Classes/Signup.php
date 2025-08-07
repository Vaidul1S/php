<?php

class Signup extends Dbh {                      // extends - Signup tampa Dbh vaiku
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    private function insertUser() {
        $query = "INSERT INTO users (username, password) VALUES (:username, :password);";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->password);
        $stmt->execute();
    }

    private function isEmptySubmit() {
        if (isset($this->username) && isset($this->password)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser() {
        // Error handlers
        if ($this->isEmptySubmit()) {
            header("Location: ../index24_object.php");
            die();
        } else {
            $this->insertUser();
        }        
    }
}