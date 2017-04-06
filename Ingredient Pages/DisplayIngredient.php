<?php  
    include '../Login/Control.php';
    $pageTitle = 'display';
    include '../Header and Footer/Header.php';
    include '../Header and Footer/Nav.php';
?>

<?php
    
    //grab name of ingredient from GET
    $ing_name = $_GET['ing'];
    
    //connect to database
    require_once '../lib/Database.php';
    $db = new Database();
    $ingredient = $db->retrieveIngredient($ing_name);
    
?>
    <!-- display ingredient information --> 
    <div class="container-fluid capers-container">
        <div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
        <div class="col-md-8 content">
            <div class = "ingredient_title"><h1><?php echo $ingredient["ingredient_name"];?></h1></div>
            <div class="ingredient-text">
                <p><?php echo $ingredient["description"];?></p><br>
            </div>
            <?php include "../Login/Message.php"; ?>
        </div>
        <div class="col md-2 hidden-sm hidden-xs sidebar"></div>
    </div>

    

<?php include '../Header and Footer/Footer.php';
