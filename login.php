<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type ="text/css" href="css/login.css">
</head>
<body>

<header style="grid-area: header1">
    <ul class="navigation">
        <a href="index.php"><img src="img/logoweb.png" width="100px"/></a>
        <section class="bottons">
            <li> <a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a>Register</a></li>
            <li><a href="#">Carrito</a></li>

        </section>

    </ul>
</header>



<div id="divLogin">

    <div>
        <h1>Benvingut, si us plau inici sessió</h1>

    </div>

    <section>
        <div id="formularioLogin">

            <form method="post" action="m_login.php" onsubmit="">

                ADREÇA ELECTRONICA: <input type="email" name="adreça_electronica" required/> <br />
                CLAU: <input type="password" name="clau"required/> <br />
                <input type="submit" value="LOGIN" id="boton"/>

            </form>
        </div>
    </section>

    <div id="imagenAbajo">
        <a href="index.php" target="_blank"><img src="img/logoweb2.png" width="550px"/></a>
    </div>

</div>




</body>
</html>