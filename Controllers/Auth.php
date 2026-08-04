<?php
require_once __DIR__ . '/../Models/UserModel.php';

class Auth
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login($input) {
       $username = $input['username'];
       $password = $input['password'];

       $user = $this->userModel->getByUsername($username);


        if($user && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
            header('Location: index.php?page=dashboard');
        } else {
            header('Location: index.php?page=login&error=invalid_password');
        }
    }

}
