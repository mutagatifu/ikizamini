<?php
include 'dbconnection.php';
class User extends DbConnection
{
    public function __construct()
    {
        parent::__construct();
    }
    public function check_login($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $query = $this->connection->query($sql);
        if ($query->num_rows > 0) {
            $row = $query->fetch_array();
            return $row['id'];
        } else {
            return false;
        }
    }
    public function details($sess)
    {
        $query = $this->connection->query("SELECT * FROM user WHERE id = '".$sess."'");
        //$row = $query->fetch_array();
        return $query;
    }
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
    //function to return clients with their corresponding orders on a product
}