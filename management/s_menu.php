<?php
    require_once '../controller/CManagementC.php';
    $oManC=new CManagementC();
    //SESIONES EN PHP
    //si no hay session iniciada se redirecciona al login
    if (!$oManC->verificarSesion()) 
    {
        header("Location:login.php");
    }
?>

<header>
    <h3> PANEL DE ADMINISTRACION </h3>
</header>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> Legacy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <!--                        <li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Bienvenido: <?php echo $_SESSION['admi']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mi Cuenta</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>