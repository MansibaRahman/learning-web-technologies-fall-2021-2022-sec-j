<?php

    session_start();
    setcookie('isLoggedIn', 'false', time()+4800, '/');
    header('location: login.php')

?>