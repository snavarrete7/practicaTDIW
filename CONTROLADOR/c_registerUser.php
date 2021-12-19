<?php
    require_once __DIR__.'/../MODEL/m_connectaBD.php';
    require_once __DIR__.'/../MODEL/m_register.php';

    $connexio = connectaBD();

    if(isset($_POST['send'])){
        $validation = usuariCorrecte($type = true);

        if($validation[0])
        {
            $temp = register($connexio);
            if ($temp)
            {
                include __DIR__.'/../VISTA/v_registerCorrecte.php';
            }
        }
        else{
            include __DIR__.'/../VISTA/v_registerIncorrecte.php';
        }
    }


?>