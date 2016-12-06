
<?php
require_once '../controller/CCategoriaC.php';
require_once '../controller/CSubcategoriaC.php';
?>

<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="facebok"> </i></a></li>
                    <li><a href="#"><i class="twiter"> </i></a></li>
                    <li><a href="#"><i class="inst"> </i></a></li>
                    <li><a href="#"><i class="goog"> </i></a></li>
                    <div class="clearfix"></div>	
                </ul>
            </div>
            <div class="header-left">

                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Buscar ..." type="search"  id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>

                <!-- search-scripts -->
                <script src="../js/classie.js"></script>
                <script src="../js/uisearch.js"></script>
                <script>
                    new UISearch(document.getElementById('sb-search'));
                </script>
                <!-- //search-scripts -->

                <div class="ca-r">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total">
                                    <span class="simpleCart_total"></span> </div>
                                <img src="../images/cart.png" alt=""/></h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Limpiar carrito</a></p>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="head-top">
            <div class="logo">
                <h1><a href="index.php">LEGACY</a></h1>
            </div>
            <div class=" h_menu4">
                <ul class="memenu skyblue">
                    <li><a class="color8" href="index.php">Inicio</a></li>	
                    <li><a class="color1" href="#">Relojes</a>
                        <div class="mepanel">
                            <div class="row">
                                    <div class="h_nav">
                                        <ul>
                                         
                                                <?php
                                        $salida = '';
                                        //crear el objeto hacia categoria
                                        $oCatC = new CCategoriaC();
                                        //ejecuta la consulta
                                        $rows_cat = $oCatC->ListarTodos();
                                        //recorrido
                                        foreach ($rows_cat as $rowc) {
                                            $salida.='<li class="col-sm-3">                               
                                <ul>
                                    <li class="text-success" >'.$rowc['nomb_cate'].'</li>';
                                            
                                            //crear el objeto hacia subcategoria
                                            $oSubC = new CsubcategoriaC();
                                            //ejecuta la consulta
                                            $rows_sub = $oSubC->ListarxIDCategoria($rowc['id_cate']);
                                            foreach ($rows_sub as $rows) {
                                                $salida.='<li><a href="catalogo.php?id_cate=' . $rows['id_cate'] . '&id_scat=' . $rows['id_scat'] . '">' . $rows['nomb_scat'] . '</a></li>';
                                            }
                                            $salida.='
                                    <li class="divider"></li>
                                </ul>
                            </li>';
                                        }

                                        echo $salida;
                                        ?> 
                
<!--                                            <li><a href="">Modelo</a></li>
                                            <li><a href="products.html">Blanket/Throw</a></li>
                                            <li><a href="products.html">Collection/Duvet</a></li>
                                            <li><a href="products.html">Comforter</a></li>
                                            <li><a href="products.html">Comforter Set</a></li>
                                            <li><a href="products.html">Decorative Pillow</a></li>
                                            <li><a href="products.html">Mattress Pad </a></li>
                                            <li><a href="products.html">Mattress Topper</a></li>
                                            <li><a href="products.html">Pillow</a></li>
                                            <li><a href="products.html">Pillow Protector</a></li>-->
                                        </ul>	
                                    </div>												
                                </div>
                            </div>
                    </li>

                    <li><a class="color4" href="login.php">Acceder</a></li>
                    <li><a class="color6" href="registrar.php">Registrarse</a></li>
                    <li><a class="color6" href="#">Mi cuenta</a></li>
                </ul> 
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>