<?php

class User
{
    public $id;
    public $username;
    public $password;

    public function __construct($id = null, $username = null, $password = null)
    {
        $this->id = $id; //ne koristimo dot notaciju
        $this->username = $username;
        $this->password = $password;
    }

    public static function logInUser($user, mysqli $conn)
    {
        $username = $user->username;
        $password = $user->password;
        //$query = "SELECT * FROM user WHERE username='" . $user->username . "' and password='" . $user->password . "'";
        //$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $query = "SELECT * FROM user WHERE username='$user->username' and password='$user->password'";
        //konekcija sa bazom
        return $conn->query($query);
    }

    // public static function logInUser($user, $baza)
    // {

    //     if ($baza[0]['username'] == $user->username && $baza[0]['password'] == $user->password) {
    //         return true;
    //     }
    //     return false;
    // }
}
