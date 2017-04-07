<?php 
    $pageTitle = "modify";
    include './Control.php';
    include './Support.php';
    include '../Header and Footer/Header.php';
    include '../Header and Footer/Nav.php';
    
    $users = readUsers();
    $user = null;
    foreach($users as $u) {
        
        //get current user
        if (isset($_SESSION['userName']) && ($u->username == $_SESSION['userName'])) {
            $user = $u;
        }
    
    }
    
    //check to make sure user is admin
    if(!isAdmin($user)) {
        echo "You must be an admin to modify this comment";
    }
    else {
        echo "You are an admin!";
    }
    
?>





<?php include '../Header and Footer/Footer.php'; ?>
