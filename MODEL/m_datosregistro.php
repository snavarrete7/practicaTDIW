<?php
    function enregistrarDades($connect){
        
        
        try{

            $SQL ="INSERT INTO usuari ('id_usuari', 'nom', 'adreça_electronica', 'password', 'poblacio', 'codi_postal', 'imatge_perfil', 'adreça') VALUES (NULL, :nom,:adreça_electronica,:clau,:adreça,:poblacio,:codi_postal, NULL)";

            $consulta = $connect->prepare($SQL);
            /*
            $consulta->bindParam(":nom", $_POST['nom'], PDO::PARAM_STR);
            $consulta->bindParam(":adreça_electronica", $_POST['adreçaElectronica'], PDO::PARAM_STR);
            $consulta->bindParam(":clau", $_POST['clau'], PDO::PARAM_STR);
            $consulta->bindParam(":adreça", $_POST['adreça'], PDO::PARAM_STR);
            $consulta->bindParam(":poblacio", $_POST['poblacio'], PDO::PARAM_STR);
            $consulta->bindParam(":codi_postal", $_POST['codi'], PDO::PARAM_INT);
            */

            
            
            $consulta->execute();
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();

        }
        

    }


?>


