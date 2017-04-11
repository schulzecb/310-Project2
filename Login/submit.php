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
    
    //drop table once order has been submitted
    include_once '../lib/Database.php';
    $db = new Database();
    $db->deleteCart();
    
?>
<div class="container-fluid lemongrass-container">
 <div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
    <div class="col-md-8 content">
        <p><?php echo "Order Submited! Your receipt has been sent via email."; ?></p>
    </div>
<div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
</div>

<?php include '../Header and Footer/Footer.php'; ?>
