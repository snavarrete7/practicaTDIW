<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUTSHIRTS</title>
    <link rel="stylesheet" type ="text/css" href="index.css">

</head>
<body>

<?php
$action = isset($_GET['action']) ? $_GET['action'] : null;
switch($action){
    case 'login':
        require __DIR__ . "login.html";
        break;
    case 'register':
        require __DIR__ ."formulari.html";
        break;
    case 'carrito':
        require __DIR__ ."index.php";
        break;
    default:
        require __DIR__ ."index.php";
        break;
}
?>

<div id="layout">
    <header style="grid-area: header1">
        <ul class="navigation">
            <a href="index.php" target="_blank"><img src="logoweb.png" width="100px"/></a>
            <section class="bottons">
                <li> <a href="index.php">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="formulari.html">Register</a></li>
                <li><a href="#">Carrito</a></li>
            </section>

        </ul>
    </header>




</div>

<div id="home-columns">

    <div id="elements" style="grid-area: elementos">

        <div style="grid-area: premier"> <li> <img src="premier.png" width="300"/></li> </div>
        <div style="grid-area: santander"> <li> <img src="laligasantander.png" width="300"/></li> </div>
        <div style="grid-area: bundes"> <li> <img src="ligabundes.png"/></li> </div>
        <div style="grid-area: francesa"> <li> <img src="ligafrancesa.png"/></li> </div>

    </div>

    <div id="camisetas">
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>
        <img src="premier.png" width="300"/>

    </div>




</div>




</body>
</html>
