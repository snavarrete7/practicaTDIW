<?php

    function consultaCategoria($connexio){
        try{
            $consulta_categoria = $connexio->prepare("SELECT * FROM categories");
            $consulta_categoria->execute();
            $resultat_categoria = $consulta_categoria->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }


        return($resultat_categoria);
    }



?>


