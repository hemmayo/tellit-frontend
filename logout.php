<?php
    require 'controller.php';
    logout();
    setcookie('token', null, time());
    header('Location: ./');
?>