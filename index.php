<?php
session_start();
if(!isset($_GET['page'])){
    header('Location: index.php?page=login');
    exit;
}

require_once 'components/header.php';
require_once "Controllers/Auth.php";
$auth = new Auth();

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
            
            $input = [
                'username' => $_POST['username'],
                'password' => $_POST['password']
            ];
            
            $auth->login($input);
        } elseif($_GET['page'] == 'logout'){
            $auth->logout();
        } elseif($_GET['page'] == 'prosesregister'){
            $input = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'nama_lengkap' => $_POST['nama_lengkap']
            ];
            
            $auth->register($input);
        }
        
        else {
            header('Location: index.php?page=login&error=invalid_page');
            exit;
        }

?>
                    </div>
               <?php  
require_once 'components/footer.php';


?>