<?php
if(isset($_POST['username'] , $_POST['pass']))
    require_once "database.php" ;
    if($db->findUser($_POST['username'])){
        $pers = $db->findUser($_POST['username']) ;
        if(password_verify( $_POST['pass'] , $pers["user_password"])){
        if(isset($POST["keep"])){
        setcookie("user" , $_POST['username']) ; 
        setcookie("pass" , $_POST['pass']) ; }
        header("location:dashboard.php") ; 
        }
    }
?>