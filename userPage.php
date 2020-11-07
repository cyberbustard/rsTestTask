<?php
        require_once 'db.php';
        $email = $_COOKIE['userMail'];

        $cart = [];
        $sql = 'SELECT * FROM `users`   WHERE `email` = :email';


        $query = $pdo->prepare($sql);
        $query->execute(['email' => $email]);
        $user  = $query->fetch(PDO::FETCH_OBJ);
        $userID = $user->id;


        $sql2 = 'SELECT * FROM `orders` WHERE `idUser` = ?';
        $query2 = $pdo->prepare($sql2);
        $query2->execute([$userID]);
        while($row = $query2->fetch(PDO::FETCH_OBJ)) {
            array_push($cart ,$row->id);


        }



        $allProducts = [];


        $sql3 = 'SELECT * FROM `products`  ';
        $query3 = $pdo->prepare($sql3);
        $query3->execute([$userID]);
        while ($row = $query->fetch(PDO::FETCH_OBJ)){
            array_push($allProducts ,$query3->fetch(PDO::FETCH_OBJ));
        }



        echo "<h1>YOUR ORDERS </h1>";
        foreach ( $allProducts as $item) {

            foreach ($cart as $id){
                if (strval($item->id) == $id){

                    echo "<p>.$item->title.</p>";
                    echo "<p>Цена :.$item->price.</p>";
                }
            }



        }






















