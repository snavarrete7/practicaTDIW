<div id = "cate">
    <?php foreach ($resultat_categoria as $fila){?>
        <?php $auxID =  $fila['id_categoria']; ?>
            <div class="list_cate">
                <li>
                    <h2><?php echo $fila['nom']; ?></h2>
                    <img src="<?php echo $fila['imagen']; ?>" width="300" onclick="list_products(<?php echo $fila['id_categoria']; ?>)"/>
                </li>
            </div>
    <?php } ?>
</div>

<script>
    function list_products(id){
        $('#categorias').load('index.php?action=getProducts&id_categoria='+id);
    }

    function ajax_request_jquery(element, action) {
        $.ajax({type: "GET", url: "?action=" + action, success:
                function (result) { $('#'+element).html(result);}
        });
    }

</script>






