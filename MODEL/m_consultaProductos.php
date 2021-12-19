<?php

function consultaProductes($connexio, $id){

    try{
        $consulta_productes = $connexio->prepare('SELECT * FROM productes WHERE id_categoria =:id_categoria');
        $id_catgeoria = $id;

        $consulta_productes->bindValue('id_categoria', $id_catgeoria);
        $consulta_productes->execute();

        $resultat_productes = $consulta_productes->fetchAll(PDO::FETCH_ASSOC);

    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_productes);
}

function consultaDetallsProducte($connexio, $id){

    try{
        $idProducte = $id;
        $consulta_detalls_productes = $connexio->prepare('SELECT * FROM productes WHERE id_producte =:id_producte');
        $consulta_detalls_productes->bindValue('id_producte', $idProducte);
        $consulta_detalls_productes->execute();
        $resultat_detalls_producte = $consulta_detalls_productes->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    return ($resultat_detalls_producte);

}

?>

