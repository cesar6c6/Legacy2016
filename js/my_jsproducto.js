function ListarCuadriculaProductoxIDSub(idsub)
{
    //definir a donde enviamos los datos
    var pUrl='../controller/CProductoC.php';
    //indicamos la accion a realizar
    var pAccion="listarCuadricula";
    //enviamos los datos con Ajax
    $.ajax(
        {
            type:'POST' ,
            url: pUrl,
            data:'accion='+pAccion+'&IdSubcate='+idsub,
            success: function (filas) 
            {
               // alert(filas);
                $('#productosxsub').html(filas);
            }
        }
    );
}
function ListarListaProductoxIDSub(idsub)
{
    //definir a donde enviamos los datos
    var pUrl='../controller/CProductoC.php';
    //indicamos la accion a realizar
    var pAccion="listarLista";
    //enviamos los datos con Ajax
    $.ajax(
        {
            type:'POST' ,
            url: pUrl,
            data:'accion='+pAccion+'&IdSubcate='+idsub,
            success: function (filas) 
            {
               // alert(filas);
                $('#productosxsub').html(filas);
            }
        }
    );
}


