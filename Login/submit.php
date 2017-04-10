<?php 
    $pageTitle = "Submit-Order";
    include './Control.php';
    include './Support.php';
    include '../Header and Footer/Header.php';
    include '../Header and Footer/Nav.php';
    
    $users = readUsers();
    $user = null;
    foreach($users as $u) {
        
        //get current user
        if (isset($_SESSION['userName']) && ($u->username == $_SESSION['userName'])) {
            //echo $u->email;
            //email $u
        }
        if (isset($_SESSION['userName']) && (isAdmin($u))) {
            //echo $u->email;
            //email $u
        }
    
    }
    
    

    echo "Order Submited! Your recipt has been sent via email.";


include '../Header and Footer/Footer.php'; ?>
