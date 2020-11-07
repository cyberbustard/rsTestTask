<?php
$username = trim(filter_var($_POST['username'] , FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email']  , FILTER_SANITIZE_EMAIL));
$phone = trim(filter_var($_POST['phone'] , FILTER_SANITIZE_STRING));



$error = '';


if ($error != '' ){
    echo $error;

    exit();
}




require_once 'db.php';
$sql = 'INSERT INTO users(fio, email , phone) VALUES(?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$username , $email , $phone]);



setcookie('userMail' , $email , time() + 3600 * 24 *30  , "/");








