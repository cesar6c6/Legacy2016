<div class="banner">
    <div class="container">
        <script src="../js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider">

                <?php
                require_once '../controller/CSliderC.php';
                //creaci`òn de objeto
                $oSliderC = new CSliderC();
                //ejecutar consulta
                $rows_Sli = $oSliderC->ListarTodos();
                //recorrer las filas y formar la cadena de salida
                $salida = '';
                foreach ($rows_Sli as $row_sli) {
                    $salida.='<div class="banner-text"><p>' . $row_sli['desc_slid'] .'</p></div>';
                }
                //impresiònde la salida
                echo $salida;
                ?>
                <!--                <li>
                                    <div class="banner-text">
                                        <h3>RELOJES ROLEX</h3>
                                        <p>Gracias a sus conocimientos y savoir-faire, pueden garantizar la autenticidad de su Rolex y asegurar que su reloj dispone de una garantía de 5 años.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-text">
                                        <h3>RELOJES CASIO</h3>
                                        <p>Los productos innovadores aportan satisfacción, esbozan nuevas maneras de vivir y son precursores de la economía, sobre todo si es CASIO.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="banner-text">
                                        <h3>RELOJES OMEGA</h3>
                                        <p>Para reflejar más de 100 años de innovadora y bella relojería, OMEGA ha tenido la satisfacción de ofrecer en Pekín una celebración especial, con la embajadora de la firma y oscarizada actriz Nicole Kidman.</p>
                                    </div>
                                </li>-->
            </ul>
        </div>
    </div>
</div>