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
    public function create($data){
        $username = $data['username'];
        $password = password_hash($data['password'], PASSWORD_BCRYPT);
        $nama_lengkap = $data['nama_lengkap'];
        $role = $data['role'];

        $queryUser = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')";
        $queryProfil = "INSERT INTO profil (id_user, nama_lengkap) VALUES (LAST_INSERT_ID(), '$nama_lengkap')";

        if ($this->conn->query($queryUser) === TRUE) {
            $this->conn->query($queryProfil);
            return true;
        }
        return false;
    }
}
