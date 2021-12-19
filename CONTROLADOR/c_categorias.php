<?php

    require_once __DIR__ ."/../MODEL/m_connectaBD.php";
    require_once __DIR__ ."/../MODEL/m_consultaCategoria.php";

    $connexio = connectaBD();
    $resultat_categoria = consultaCategoria($connexio);

    require_once __DIR__ ."/../VISTA/v_categorias.php";
    //include ("./VISTA/v_categorias.php");
?>
