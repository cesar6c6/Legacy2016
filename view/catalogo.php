
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
        <script src="../js/my_jscatalogo.js" type="text/javascript"></script>
        <script src="../js/my_jsproducto.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include_once './s_header.php';
        ?>

        <div id="main" class="container">   
            <div class="row">

                <!-- grow -->
                <div class="grow">
                    <div class="container">
                        <h2>Relojes</h2>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                </ol> 

                <!-- grow -->
                <div class="col-md-3" style="padding: 0">
                    <?php
                    require_once '../controller/CCategoriaC.php';
                    require_once '../controller/CSubcategoriaC.php';

                    $salida = '';
                    $idcateg = '';
                    $idsubcateg = '';
                    $nomb_sub = '';
                    $imag_sub = '';
                    //ver si existe una categoria seleccionada
                    if (isset($_GET['id_cate'])) {
                        //datos que provienen de s_menu
                        $idcateg = $_GET['id_cate'];  //obtener el ID  
                        $idsubcateg = $_GET['id_scat'];  //obtener el ID  

                        $oSubC = new CSubcategoriaC(); //crear el objeto
                        $rows_sub = $oSubC->SeleccionarxIDSubCategoria($idsubcateg);
                        //recorrido
                        foreach ($rows_sub as $rows) {
                            $nomb_sub = $rows['nomb_scat'];
                            $imag_sub = $rows['imag_scat'];
                        }

                        //imprime panel izquierdo
                        $salida.='<ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>' . $nomb_sub . '</a></li>';

                        $rows_sub = $oSubC->ListarxIDCategoria($idcateg); //lista las categoris de aceuerdo al id
                        foreach ($rows_sub as $rows) {
                            $salida.='<li><a href="catalogo.php?id_cate=' . $rows['id_cate'] . '&id_scat=' . $rows['id_scat'] . '"><i class="fa fa-list-alt fa-fw"></i>' . $rows['nomb_scat'] . '</a></li>';
                        }
                        $salida.='            
            </ul>';
                    }
                    echo $salida;
                    //fin panel izquierdo
                    ?>

                </div>

                <div class="col-md-9" style="padding: 0">
                    <div class="modal-header" style="padding-top: 0; margin-top: 0">
                        <h3><?php echo $nomb_sub ?></h3>
                    </div>
                    <img class="img-responsive" src="<?php echo $imag_sub ?>" alt=""/>
                    <div class="row" style="padding: 0.8em 0; border-bottom: 1px #007bb6 solid; border-top:1px #007bb6 solid; ">
                        <div class="col-md-8">
                            <strong> Nro Articulos </strong> &nbsp;|&nbsp;
                            Ordenar Por: 
                            <select>
                                <option value="1">Nombre</option>
                                <option value="1">Precio</option>
                                <option value="1">Marca</option>
                            </select>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="javascript:ListarCuadriculaProductoxIDSub(<?php echo $idsubcateg ?>)"><span style="font-size: 1.4em;" class="fa fa-table"></span></a>
                            <a href="javascript:ListarListaProductoxIDSub(<?php echo $idsubcateg ?>)"><span style="font-size: 1.4em;" class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <!-- productos de la sub categoria seleccionada-->
                    <div class="row" id="productosxsub" style="padding: 1em;"> 
                        <?php
                        require_once '../controller/CProductoC.php';
                        $oProC = new CProductoC();
                        //recepcionar los registros
                        $prod = $oProC->ListarxIDSubcategoriaCuadricula($idsubcateg);
                        //imprimir
                        echo $prod;
                        ?>
                    </div>

                    <!-- paginacion-->
                    <center>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="disabled">
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </center>
                    <!--fin paginacion-->
                </div>
            </div>    
        </div>

        <?php
        include_once './s_footer.php';
        ?>
    </body>
</html>
