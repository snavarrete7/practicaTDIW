<div class="productos">
    <ul id="ulProductos">
        <?php foreach ($resultat_productos as $fila){ ?>

            <div class="list_productos">
                <li>
                    <div>
                        <h2> <?php echo $fila['nom']; ?> </h2>
                    </div>

                    <img width="300" src="<?php echo $fila['imatge']; ?>">

                    <div>
                        <h2> <?php echo $fila['nom']; ?> </h2>
                        <h2> <?php echo $fila['preu']; ?> € </h2>
                        <button onclick="list_descripcio(<?php echo $fila['id_producte']; ?>)"> Ver producto </button>
                    </div>
                </li>
            </div>
        <?php } ?>
    </ul>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script>
    function list_descripcio(id){
        $('#productlist').load('index.php?action=getProductDetail&id_producte='+id);
    }
</script>