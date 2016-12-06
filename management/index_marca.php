<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index de Marcas</title>
        <?php
        include_once './s_links.php';
        include_once './s_js.php';
        ?>
        <script src="../js/js_mant_marca.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include_once './s_menu.php';
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    include './menu_tablas.php';
                    ?>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-8">
                                    <span class="glyphicon glyphicon-pencil"></span> Gestión de Marcas
                                </div>
                                <div class="col-md-4 text-right">
                                    <button type="button" id="btn_new" class="btn btn-warning"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> New</button>
                                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                                </div>
                            </div>

                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 15% ">CODIGO</th>
                                        <th style="width: 45%">MARCA</th>
                                        <th style="width: 20%">FOTO</th>
                                        <th style="width: 10%">ESTADO</th>
                                        <th style="width: 10%">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody id="rows_marc">

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Ventana Modal-->
        <div id="WinMarca" class="modal fade">
            <div class="modal-dialog">   
                <div class="modal-content"> 
                    <form class="form-horizontal" id="frmMarca" method="post" onsubmit="return guardarRegistro();">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                            <h4><i class="fa fa-envira" aria-hidden="true"></i> Registro de Marca </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <!--  Campo Oculto -->
                                <input type="hidden" class="form-control" id="Accion" name="Accion">
                                
                                <label for="InputID" class="col-sm-2 control-label">Codigo: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="InputID" name="InputID" readonly="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputNombre" class="col-sm-2 control-label">Marca: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="InputNombre" name="InputNombre" placeholder="Ingrese la marca">

                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label for="InputDescripcion" class="col-sm-2 control-label">Descripcion: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Ingrese el Nombre">
                                    <textarea id="InputDescripcion" name="InputDescripcion" rows="4" class="form-control">
                                      
                                    </textarea>
                                </div>
                            </div>-->
                             
<!--                            <div class="form-group">
                                <label for="InputIcono" class="col-sm-2 control-label">Icono: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="InputIcono" name="InputIcono" placeholder="Ingrese el Icono">
                                </div>
                            </div>-->
                            
                            <div class="form-group">
<!--                            <input type="file" name="" value="" />-->   
                                <label for="InputFoto" class="col-sm-2 control-label">Foto: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="InputFoto" name="InputFoto" placeholder="Ruta Foto">
                                </div>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="InputEstado" name="InputEstado" value="1" checked> Estado
                                </label> 
                            </div>

                        </div>
                        <div id="msg">
                                
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btn-guardar" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                            <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
                        </div>
                    </form>      
                </div>
            </div>
        </div>

        <?php
        include_once './s_footer.php';
        ?>     

    </body>
</html>  