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
            include 'page/login.php';
        } elseif($_GET['page'] == 'register'){
            include 'page/register.php';
        } elseif($_GET['page'] == 'dashboard'){
            $title = 'Dashboard';
            include 'page/dashboard.php';
        }

?>
                    </div>
               <?php  
include 'components/footer.php';


?>