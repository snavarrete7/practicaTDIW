<?php

    require_once __DIR__ ."/../MODEL/m_connectaBD.php";
    require_once __DIR__ ."/../MODEL/m_consultaProductos.php";

    $connexio = connectaBD();
    $id_producto = isset($_GET['id_producte']) ? $_GET['id_producte'] : NULL;
    $detall_producte = consultaDetallsProducte($connexio,$id_producto);

    include __DIR__ ."/../VISTA/v_productDetail.php";

?>
