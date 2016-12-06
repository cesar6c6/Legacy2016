
<html>
    <head>

        <title>Acceso</title>
        <?php
        // <!--Metas-->
        include_once './s_metas.php';
        //Links
        include_once './s_links.php';
        //js
        include_once './s_js.php';
        ?>

    </head>

    <body>
        <?php
        include_once './s_header.php';
        ?>
        <div id="main " class="container">
            <div class="row">
                <div class="col-md-12" style="padding: 0">

                    <!----------------->
                    <!-- grow -->
                    <div class="grow">
                        <div class="container">
                            <h2>Acceso</h2>
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="login.php.php">Acceso</a></li>
                    </ol> 

                    <!-- grow -->
                    <!--content-->
                    <div class="container">
                        <div class="account">
                            <div class="account-pass">
                                <div class="col-md-4 col-md-offset-2 account-top">                                   
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>                            
                                        <button type="submit" class="btn btn-success">ENVIAR</button>
                                    </form>
                                    
                                </div>
                                <div class="col-md-4 left-account ">
                                    <a href="#"><img class="img-responsive " src="../images/login.png" alt=""></a>
<!--                                    <div class="five">
                                        <h2>25% </h2><span>descuento</span>
                                    </div>-->
                                    <a href="registrar.php" class="create">Crear una cuenta</a>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <!--//content-->
                    <!-----------------> 

                </div>    
            </div>
        </div>

        <?php
        include_once './s_footer.php';
        ?>

    </body>
</html>
