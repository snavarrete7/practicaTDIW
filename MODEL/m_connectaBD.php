<?php
function connectaBD(){
    $server="127.0.0.1";
    $user="root";
    $password="";
    try {
        $connect=new PDO("mysql:host=$server;dbname=futshirtsbd;port=3306;charset=utf8mb4", $user, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $exception){
        echo "Error:" .$exception->getMessage();
    }

    return($connect);
}
?>

