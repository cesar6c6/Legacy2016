
<html>
    <head>

        <title>Pagina Principal</title>
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
        include_once './s_slider.php';
        ?>
        <!--        <div id="main " class="container">
                       
                </div>-->
        <div class="container">
            <div class="cont">
                <div class="content">
                    <div class="content-top-bottom">
                        <h2>NUESTROS PRODUCTOS</h2>
                        <div class="col-md-6 men">
                            <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/t1.jpg" alt="">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-top top-in   b-delay03 ">
                                        <span>BREITLING</span>	
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md1 ">
                                <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/t2.jpg" alt="">
                                    <div class="b-wrapper">
                                        <h3 class="b-animate b-from-top top-in1   b-delay03 ">
                                            <span>RELOJES DE LAS MEJORES MARCAS</span>	
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md2">
                                <div class="col-md-6 men1">
                                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/t3.jpg" alt="">
                                        <div class="b-wrapper">
                                            <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                                <span>GARANTIA</span>	
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 men2">
                                    <a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="../images/t4.jpg" alt="">
                                        <div class="b-wrapper">
                                            <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                                <span>CALIDAD</span>	
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="content-top">
                        <div id="nuevos_productos">
                            <h1>NUEVOS PRODUCTOS</h1>

                            <div class="row">
                                <?php
                                require_once '../controller/CProductoC.php';
                                $oProdC = new CProductoC();
                                //ejecuta la consulta
                                $rows_pro = $oProdC->ListarNuevos();
                                //recorrer las filas y formar la cadena de salida
                                $salida = '';
                                foreach ($rows_pro as $row_pro) {
                                    
                                    $salida.=' <div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="'.$row_pro['imag_prod'].'" alt="'.$row_pro['nomb_prod'].'">
                                    <div class="caption">
                                    <center>
                                        <h4>'.$row_pro['nomb_prod'].'</h4><br/>
                                        <h3>S/. '.$row_pro['pven_prod'].'</h3><br/>
                                        <a href="#" class="btn btn-success" role="button">Detalles</a> 
                                        <a href="#" class="btn btn-default" role="button">Añadir</a>
                                    </center>    
                                    </div>
                                </div>
                            </div>';
                                }
                                //impresion de la salida
                                echo $salida;
                                ?>         
                            </div>        
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <?php
        include_once './s_footer.php';
        ?>
    </body>
</html>
