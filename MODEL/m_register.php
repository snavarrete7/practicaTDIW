<?php

    function register($connexio){

        $nom = $_POST['nom'];
        $mail =$_POST['adreçaElectronica'];
        $adreça = $_POST['adreça'];
        $poblacio = $_POST['poblacio'];
        $codi = $_POST['codi'];
        /*
        $f_nom = filter_var($nom, FILTER_SANITIZE_STRING);
        $f_email = filter_var($mail, FILTER_VALIDATE_EMAIL);
        $f_adreça = filter_var($adreça, FILTER_SANITIZE_STRING);
        $f_poblacio = filter_var($poblacio, FILTER_SANITIZE_STRING);
        $f_codi = filter_var($codi, FILTER_SANITIZE_STRING);*/

        if($mail == false)
        {
            $c = false;
        }
        else
        {
            $c = true;
            $x_password = password_hash($_POST['clau'], PASSWORD_DEFAULT);

            //$sql = "INSERT INTO `usuari` (`id_usuari`, `nom`, `adreça_electronica`, `password`, `poblacio`, `codi_postal`, `imatge_perfil`, `adreça`) VALUES (NULL, 'prueba2', 'prueba2@gmail.com', 'sdjfas', 'sdakmgfasm', '08210', NULL, 'sgsdagdafga')";
            //$sql = "INSERT INTO `usuari` (`nom`, `adreça_electronica`, `password`, `poblacio`, `codi_postal`, `adreça`) VALUES (:nom,:adreça_electronica,:password,:poblacio,:codi_postal,:adreça)";
            $sql = "INSERT INTO usuari (nom, adreça_electronica, password, poblacio, codi_postal, adreça) VALUES ('$nom', '$mail', '$x_password','$poblacio', '$codi', '$adreça')";
            $register = $connexio->prepare($sql);
            $register->bindParam(":adreça_electronica", $mail, PDO::PARAM_STR);
            $register->bindParam(":password", $x_password, PDO::PARAM_STR);
            $register->bindParam(":nom", $nom, PDO::PARAM_STR);
            $register->bindParam(":adreça", $adreça, PDO::PARAM_STR);
            $register->bindParam(":codi_postal", $codi, PDO::PARAM_INT);
            $register->bindParam(":poblacio", $poblacio, PDO::PARAM_STR);

            $register->execute();
        }
        return $c;
    }

function usuariCorrecte($type)
{
    if($type == true)
    {
        $name = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['adreçaElectronica']);
        $pass = htmlspecialchars($_POST['clau']);
        $poblacio = htmlspecialchars($_POST['poblacio']);
        $adreça = htmlspecialchars($_POST['adreça']);
        $codi = htmlspecialchars($_POST['codi']);
    }

    $comp = true;
    $error = null;

    if ($name == '')
    {
        //$error = "Error en la introduccion de los valores del nombre, esta vacio ...";
        $comp = false;
    }

    if(!preg_match('/^[a-záéíóúàèìòùäëïöüñ\s]+$/i', $name))
    {
        //$error = "Error en la introduccion de los valores del Nombre...";
        $comp = false;
    }

    if($email == '')
    {
        //$error = "Error en la introduccion de los valores del email, esta vacio ...";
        $comp = false;
    }
    if(!preg_match('/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/', $email)) {
       // $error = "Error en la introduccion de los valores del email...";
        $comp = false;
    }

    if($pass == '')
    {
       // $error = "Error en la introduccion de los valores de la contraseña, esta vacia ...";
        $comp = false;
    }

    if(!preg_match('/^[a-zA-Z0-9\-_\s]{3,20}$/', $pass))
    {
       // $error = "Error en la introduccion de los valores de la Contraseña...";
        $comp = false;
    }

    if($poblacio == '')
    {

        $comp = false;
    }

    if($adreça == '')
    {

        $comp = false;
    }

    if(!preg_match('/^[a-zA-Z0-9\-_\s]{3,20}$/', $adreça))
    {

        $comp = false;
    }
    if(strlen($adreça) > 47) {
       // $error = "Error en la introduccion de los valores, direccion demasiado larga...";
        $comp = false;
    }
    if($codi == '')
    {
       // $error = "Error en la introduccion de los valores del codigo postal, esta vacio ...";
        $comp = false;
    }

    if(strlen($codi) != 5)
    {
       // $error = "Error en la introduccion de los valores del codigo postal, es diferente de 5 caracteres...";
        $comp = false;
    }

    if(!preg_match('/[0-9]/', $codi))
    {
        //$error = "Error en la introduccion de los valores, deben estar entre 0 y 9 ...";
        $comp = false;
    }

    return array($comp, $error);


}





?>
