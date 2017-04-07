<?php 
    $pageTitle = "delete";
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
        echo "You must be an admin to delete this comment";
    }
    else {
        if (isset($_GET['id'])) {
        
            require_once '../lib/Database.php';
            $db = new Database();
            $db->deleteComment($_GET['id']);
            
            echo "Comment has been deleted. <br>"; 
            echo '<a href="' . $_SESSION['ingURL'] . '"> Go Back </a>';
           
        
        }
    }
    
?>





<?php include '../Header and Footer/Footer.php'; ?>
