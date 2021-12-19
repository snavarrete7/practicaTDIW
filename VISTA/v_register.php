<div id="div1">
    <h1>Benvingut, si us plau registreu-vos</h1>
    <div id = "formulario">
        <form action="index.php?action=registerUser" method="post" target="_self">

                NOM: <input type="text" name="nom" required/> <br />
                ADREÇA ELECTRONICA: <input type="email" name="adreçaElectronica" required/> <br />
                CLAU: <input type="password" name="clau"required/> <br />
                ADREÇA: <input type="text" maxlength="30" name="adreça"required/> <br />
                POBLACIÓ: <input type="text" maxlength="30" name="poblacio"required/> <br />
                CODI POSTAL: <input type="text" maxlength="5" minlength="5" pattern="^[0-9]+$" name="codi"required/> <br />
                <input type="submit" name="send" value="REGISTRAR" id="boton"/></form>
    </div>

</div>

<?php if(!empty($_SESSION['VALIDATION']))
{
    echo $_SESSION['VALIDATION'];
}
?>