<?php  
    include './Control.php';
    require_once '../lib/ingredient.php';
    include './Support.php';
    $pageTitle = 'display';
    include '../Header and Footer/Header.php';
    include '../Header and Footer/Nav.php';
?>

<?php
    $users = readUsers();
    $user = null;
    foreach($users as $u) {
        
        //get current user
        if (isset($_SESSION['userName']) && ($u->username == $_SESSION['userName'])) {
        
            $user = $u;
        }
    
    }
    
    //connect to database
    require_once '../lib/Database.php';
    $db = new Database();
    
    
?>
    <!-- display ingredient information --> 
    <div class="container-fluid capers-container">
        <div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
        <div class="col-md-8 content">
           <?php 
           if (isCustomer($user)){
                echo "Only customers may purchase items";
            }
           else if (isAdmin($user)){
                if ($_SESSION['control'] == 1){
                    $cart = new ingredient();
                    $cart->ingredient_name = $_SESSION['lastestPage'];
                    $cart->image = $_SESSION['lastImg'];
                    $cart->description = $_SESSION['lastDesc']; 
                    $db->insertCart($cart);
                    echo "Added to the Cart!\n";
                    }
                    $MasterCart = $db->getCart();
                    foreach($MasterCart as $ing){?>
                    <?php $id = $ing["ingredient_id"]; ?>
                        <li class="list-group-item comment">
                        <a class="btn default-btn" href="<?php echo "./shoppingDelete.php?id=$id"?>"> <span class="glyphicon glyphicon-remove" aria-label="Delete"></span> </a>
                            <?php echo $ing["ingredient_name"]; 
                    }?>
                    <h3>
                        <?php
                        ?>
                        <a href="./submit.php">Submit!</a> 
                        
                    </h3>
                    <?php
                
            }
            else{
                echo "Please sign in to purchase items!";
            }

            ?>
            
        </div>
        <div class="col md-2 hidden-sm hidden-xs sidebar"></div>
    </div>

    
<?php
include '../Header and Footer/Footer.php';
