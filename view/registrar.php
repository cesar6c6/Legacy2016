
<html>
    <head>

        <title>Registrar</title>
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
                            <h2>Registrar</h2>
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="login.php.php">Registrar</a></li>
                    </ol> 

                    <!-- grow -->
                    <!--content-->
                    <div class="container">
                        <div class="account">
                            <div class="account-pass">
                                <div class="col-md-4 col-md-offset-2 account-top">
                                   <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apellido</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
                                        </div>
                                       <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                                        </div>
                                    </form>                                     
                                </div>
                                <div class="col-md-4 account-top">              
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirmar contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar password">
                                        </div>                            
                                        <button type="submit" class="btn btn-success">ENVIAR</button>
                                    </form>                                    
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
