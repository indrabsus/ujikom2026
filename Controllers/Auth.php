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
            $_SESSION['role'] = $user['role'];
            header('Location: index.php?page=dashboard&success=login_success');
        } else {
            header('Location: index.php?page=login&error=invalid_password');
        }
    }
    public function logout() {
        session_destroy();
        header('Location: index.php?page=login');
    }
    public function register($input) {
        $username = $input['username'];
        $password = $input['password'];
        $nama_lengkap = $input['nama_lengkap'];
        $role = 'user';

        $data = [
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'role' => $role
        ];

        if($this->userModel->create($data)){
            header('Location: index.php?page=login&success=registration_success');
        } else {
            header('Location: index.php?page=register&error=registration_failed');
        }
    }

}
