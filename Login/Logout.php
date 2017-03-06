<?php 
    session_name("310proj1");
    session_start(); 
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy(); 
    
    header("Location: ./Login.php");
  
    exit;
  
?>
