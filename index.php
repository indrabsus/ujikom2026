<?php
session_start();
if(!isset($_GET['page'])){
    header('Location: index.php?page=login');
    exit;
}

include 'components/header.php';

?>
                    <div class="container">
    <?php
        if($_GET['page'] == 'login'){
            if(isset($_SESSION['user_id'])){
                header('Location: index.php?page=dashboard');
                exit;
            }
            include 'page/login.php';
        } elseif($_GET['page'] == 'register'){
            include 'page/register.php';
        } elseif($_GET['page'] == 'dashboard'){

            if(!isset($_SESSION['user_id'])){
                header('Location: index.php?page=login');
                exit;
            }

            $title = 'Dashboard';
            include 'page/dashboard.php';
        } elseif($_GET['page'] == 'proseslogin'){
            include "Controllers/Auth.php";
            $input = [
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ];
            $auth = new Auth();
            $loginSuccess = $auth->login($input);
        } elseif($_GET['page'] == 'logout'){
            session_destroy();
            header('Location: index.php?page=login');
            exit;
        } else {
            header('Location: index.php?page=login&error=invalid_page');
            exit;
        }

?>
                    </div>
               <?php  
include 'components/footer.php';


?>