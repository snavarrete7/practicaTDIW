<header>
    <div id="header">
        <div>
            <ul class="navigation">
                <a href="index.php"><img src="img/logoweb.png" width="100px"/></a>
                <section class="bottons">
                        <li><a href="index.php">Home</a></li>
                        <li onclick="ajax_request_login()"><a>Login</a></li>
                        <li onclick="ajax_request_registre()"><a>Register</a></li>
                </section>
            </ul>
        </div>
    </div>
</header>

<script>
    function ajax_request_login(){
        $('#categorias').load('index.php?action=login');
    }
    function ajax_request_registre(){
        $('#categorias').load('index.php?action=register');
    }

</script>