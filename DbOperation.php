<?php

class DbOperation
{
    private $con;

    function __construct()
    {
        require_once dirname(__FILE__) . '/Connect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    // User Subscription
    function registerUser($name, $email)
    {
        if (!$this->isUserExist($email)) {
            $stmt = $this->con->prepare("INSERT INTO emsubs (name, email) VALUES (?, ?)");
            $stmt->bind_param("ss", $name, $email);
            if ($stmt->execute())
                return USER_CREATED;
            return USER_CREATION_FAILED;
        }
        return USER_EXIST;
    }

// Method to get subscriber by email
function getUserByEmail($email)
{
    $stmt = $this->con->prepare("SELECT id, name, email FROM emsubs WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $name, $email);
    $stmt->fetch();
    $user = array();
    $user['id'] = $id;
    $user['name'] = $name;
    $user['email'] = $email;
    return $user;
}

    // Get all subscribers
    function getAllUsers(){
        $stmt = $this->con->prepare("SELECT id, name, email FROM emsubs");
        $stmt->execute();
        $stmt->bind_result($id, $name, $email);
        $users = array();
        while($stmt->fetch()){
            $temp = array();
            $temp['id'] = $id;
            $temp['name'] = $name;
            $temp['email'] = $email;
            array_push($users, $temp);
        }
        return $users;
    }


    // check if email already exist
    function isUserExist($email)
    {
        $stmt = $this->con->prepare("SELECT id FROM emsubs WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
}
