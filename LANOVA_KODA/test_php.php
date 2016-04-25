<?php
session_start();

include 'pdo-connect2.php';
    
    $status = $_POST['check'];
    if($status == 1)
    {
        echo 'Odjavili ste se od novic';
        $stavek = $baza1->prepare("UPDATE users SET news = null WHERE username=:user");
        $stavek->bindparam(":user", $_SESSION['login_user']);
        $stavek->execute();
    }
    else
    {
        echo 'Udpešno ste prijavljeni na novice';
        $stavek = $baza1->prepare("UPDATE users SET news = 1 WHERE username=:user");
        $stavek->bindparam(":user", $_SESSION['login_user']);
        $stavek->execute();
    }
?>