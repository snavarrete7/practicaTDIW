<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUTSHIRTS</title>
    <link rel="stylesheet" type ="text/css" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body id="categorias">
    <header>
        <?php require __DIR__. "/CONTROLADOR/c_header.php";?>
    </header>

    <div class="portada">
        <?php require_once __DIR__ ."/CONTROLADOR/c_categorias.php"; ?>
    </div>

    <footer>

    </footer>



</body>

</html>
