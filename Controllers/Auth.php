<?php
require_once __DIR__ . '/../config/koneksi.php';

class Auth
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function login($input) {
       $username = $input['username'];
       $password = $input['password'];
         $query = "SELECT * FROM user LEFT JOIN profil ON user.id = profil.id_user WHERE username = '$username'";
         $result = $this->conn->query($query);
        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
                header('Location: index.php?page=dashboard');
            } else {
                header('Location: index.php?page=login&error=invalid_password');
            }
        } else {
            header('Location: index.php?page=login&error=gagal_login');
        }
    }

}
