<?php
    $Tema=$_POST['Tema'];
    session_start();
    $_SESSION['Tema'] = $Tema;
    header('location:../../exercise2.php');
?>