<?php
    $usuario = $_POST['adreça_electronica'];
    $contraseña = $_POST['clau'];
    session_start();
    $_SESSION['adreça_electronica'] = $usuario;
    $connexio = mysqli_connect("localhost", "root", "", "futshirtsbd");
    $consulta = "SELECT * FROM usuari where adreça_electronica='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($connexio,$consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        header("location: index.php");
    }
    else {
        ?>
        <?php
        include("location: login.php");
        ?>
        <h1> Error en la autentificación </h1>

        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connexio);


?>


