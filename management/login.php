
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
        <?php
        include_once './s_links.php';
        include_once './s_js.php';
        ?>
        <link href="../css/csslogin.css" rel="stylesheet" type="text/css"/>
        <script src="../js/my_jsadmilogin.js" type="text/javascript"></script>
       
    </head>
    <body>
        <header>
            <h3> PANEL DE ADMINISTRACION </h3>
        </header>
        <div class="container-fluid" style="padding: 10em">

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please sign in</h3>
                        </div>
                        <div class="panel-body">
                            <form id="frm-login" accept-charset="UTF-8" role="form" class="form-signin">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuario" name="email" type="text" id="inputUsuario">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" id="inputPassword">
                                    </div>
                                    <!--                                    <div class="checkbox">
                                                                            <label>
                                                                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                                                            </label>
                                                                        </div>-->
                                    <div id="msg_error">
                                        
                                    </div>
<!--                                    <input id="btn_enviar" class="btn btn-lg btn-success btn-block" type="button" value="Login">-->
                                    <button id="btn_enviar" class="btn btn-lg btn-success btn-block" type="button">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        include_once './s_footer.php';
        '';
        ?>   

    </body>
</html>   