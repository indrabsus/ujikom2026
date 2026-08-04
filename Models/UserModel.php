<?php
require_once __DIR__ . '/../config/koneksi.php';

class UserModel
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function getByUsername($username)
    {
        $query = "SELECT * FROM user LEFT JOIN profil ON user.id = profil.id_user WHERE username = '$username'";
        $result = $this->conn->query($query);
        $user = $result->fetch_assoc();

        return $user;
    }
}
