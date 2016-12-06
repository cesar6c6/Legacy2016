
<html>
    <head>

        <title>Contactanos</title>
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
                            <h2>Contactanos</h2>
                        </div>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="contactanos.php">Contactanos</a></li>
                    </ol> 
                    <!-- grow -->
                    <!--content-->
                    <div class="container">
                        <div class="account">
                            <div class="account-pass">
                                <div class="col-md-6 col-md-offset-2 account-top">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                                        </div>                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tema</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tema">
                                        </div>
                                        <label>Descripción</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                        <div></div>
                                        <button type="submit" class="btn btn-success">ENVIAR</button>
                                        <div></div>
                                    </form>                                   
                                </div>
                                <div class="col-md-4 account-top">              
                                    <div class="address-more">
                                        <h5>Dirección</h5>
                                        <p>Empresa: Legacy S.A.C.</p>
                                        <p>Calle.Changanaqui</p>
                                        <p>Huacho - Lima - Perú </p>
                                    </div>
                                    <div class="address-more">
                                        <h4></h4>
                                        <p>Tel:991820834</p>
                                        <p>Fax:190-4509-494</p>
                                        <p>Email:<a href="legacy@gmail.com"> legacy@gmail.com</a></p>
                                    </div>                                
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-----------------> 

                </div>    
            </div>
        </div>

        <?php
        include_once './s_footer.php';
        ?>

    </body>
</html>
