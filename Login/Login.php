<?php session_name("310proj1"); ?>
<?php session_start(); ?>

<?php  
    $pageTitle = 'Sign In';
    include '../Header and Footer/Project1Header.php';
?>

<?php
        include "../Header and Footer/Project1Nav.php";
?>

<!-- Authentication section -->
<?php $date = date('m/d/Y h:i:s a', time()); ?>
<?php $loginSuccess = false ?>
<?php if (isset($_POST['user']) && isset($_POST['pwd'])) {
    $usernm = $_POST['user']; 
    
    //Credentials #1: ct310
    if ($usernm == "ct310"){
        $hash = md5($_POST['pwd']);
        if ($hash == "48f2f942692b08ec9de1ef9ada5230a3") {
            $loginSuccess = true;
            $_SESSION['username'] = $usernm;
            $_SESSION['loginTime'] = $date;
        }
        else {
            echo "Login Failure: Wrong password for: " . $usernm . '<br>';
            echo $date . "\n";
        }
    }
    //Credentials #2: Courtney
    elseif ($usernm == "cschulze") {
        $hash = md5($_POST['pwd']);
            if ($hash == "6266eecd3b1b4f7133fddd911b615218") {
                $loginSuccess = true;
                $_SESSION['username'] = $usernm;
                $_SESSION['loginTime'] = $date;
            }
            else {
               echo "Login Failure: Wrong password for: " . $usernm . '<br>';
                echo $date . "\n";
            }
    }
    else {
        echo "Login Failure: Wrong username<br />";
        echo $date . "\n";
    }
}
?>
        
<?php if ($loginSuccess) {
    header("Location: ./Login.php");
}
?>
<!-- End authentication section -->


<div class="container-fluid wasabi-container">
<div class="col-md-2 hidden-sm hidden-xs sidebar"></div>
<div class="col-md-8 content">

    <!--If not signed in -->
    <?php if (!isset($_SESSION['username'])) : ?>
        <h2>Sign in</h2>
        <form action="Login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" aria-describedby="username" name="user">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" aria-describedby="pass" name="pwd">
            </div>
            <button class="btn btn-default" role="button" type="submit">Sign in</button>
        </form>
    
    <!--Direct them to log out if they are signed in -->
    <?php else : ?>
        <?php 
            echo '<p>' . "You are currently signed in as '" . $_SESSION['username'] . "'" . '</p>';
        ?>
        <div class="logout"><p><a href="Logout.php">Logout</a></p></div>
    <?php endif; ?>
</div>


<div class="col md-2 hidden-sm hidden-xs sidebar"></div>
</div>
<?php
        include "../Header and Footer/Project1Footer.php";
?>