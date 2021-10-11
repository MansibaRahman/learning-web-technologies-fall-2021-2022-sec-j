<?php 
session_start(); 
if(isset($_COOKIE['isLoggedIn'])){ 
    if($_COOKIE['isLoggedIn']=='true'){ 
        header('location: dashboard.php'); 
    } 
    else{ 
        header('location: login.php'); 
    } 
} 
else{ 
    setcookie('isLoggedIn','false', time()+4800,'/'); 
    header('location: home.php'); 
}
?>