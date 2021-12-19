<?php

    require_once __DIR__ ."/../MODEL/m_connectaBD.php";
    require_once __DIR__ ."/../MODEL/m_consultaProductos.php";

    $connexio = connectaBD();
    $id_categoria = $_GET['id_categoria'] ?? NULL;
    $resultat_productos = consultaProductes($connexio,$id_categoria);

    require_once __DIR__ ."/../VISTA/v_productos.php";
?>
