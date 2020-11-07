<?php
    $productId =$_POST['productId'];
    $userMail = $_COOKIE['userMail'];

    require_once 'db.php';
        $sql = 'SELECT * FROM `users`   WHERE `email` = :email';


        $query = $pdo->prepare($sql);
        $query->execute(['email' => $userMail]);
        $user  = $query->fetch(PDO::FETCH_OBJ);
        $userID = $user->id;


        $sql = 'INSERT INTO orders(id, date , idUser) VALUES(?,?,?)';
        $query = $pdo->prepare($sql);
        $query->execute([$productId , date() , $userID]);

