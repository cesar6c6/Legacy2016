$(function()
    {
        ListarRegistros();       
          //evento click del boton nuevo
        $('#btn_new').on('click',function()
        {
           //limpiar controles de la ventana
            $('#frmMarca')[0].reset();            
           
            //indicar la accion
            $('#Accion').val('insertar');//CAMPO OCULTO
            $('#InputID').val('0');
           //abrir la ventana modal
            $('#WinMarca').modal(
            {
                show: true,
                backdrop: 'static'
            }
            );
        });
    }
)

function ListarRegistros()
{
    //definir a donde enviamos los datos
    var Url='../controller/CMarcaC.php';
    //definir accion
    var accion="rows";
    //envio de datos con ajax
    $.ajax({
        type:'POST',
        url:Url,
        data:'Accion='+accion,
        success:function(data)
        {
            //escribir en la tabla
            $('#rows_marc').html(data);
        }
    });  
    return false;
}

function guardarRegistro()
{
    //validacion de campos: campos obligatorios, e-mail, nros
    //1. declaramos variables y asignamos contenidos
    var nomb=$('#InputNombre').val();
    //verificamos si tiene contenido
    if (nomb.length==0)
    {
         $('#msg').html('<p class="alert alert-warning">Ingrese la marca</p>').show(500).delay(5000).hide(500);
         $('#InputNombre').focus();
         return false;
    }
//     var cat=$('#InputItem').val();
//    //verificamos si tiene contenido
//    if (cat.length==0)
//    {
//         $('#msg').html('<p class="alert alert-warning">Seleccione la Categoria</p>').show(500).delay(5000).hide(500);
//         $('#InputItem').focus();
//         return false;
//    }
    
    //establecer la Url a donde enviaremos los datos
    var url='../controller/CMarcaC.php';
    //leemos los datos del form utilizando Ajax
    $.ajax({
        type:'POST', 
        url:url,
        data: $('#frmMarca').serialize(),
        success: function(registros){
           // alert(registros);
           //escribir en la tabla
          //  $('#rows_cat').html(registros);
            ListarRegistros();
//            //leer el valor del campo oculto
//            if ($('#Accion').val()=='insert'){
//                //limpiamos el formulario
//                $('#frmCategoria')[0].reset();
//                $('#Accion').val('insert');
//                //mostrar mensaje de reg insertado
//                $('#msg').html('<p class="alert alert-success">Registro Insertado</p>').show(500).delay(5000).hide(500);
//            }
//            else //si se va a actualizar: update
//            {  
//                 //mostrar mensaje de reg insertado
//                $('#msg').html('<p class="alert alert-info">Registro Actualizado</p>').show(500).delay(5000).hide(500);
//            }
//            //refrescamos
//            $('#listado').html(registros);
            //para ver el modal
            return false;
        }
    });
    return false;
}

function editarRegistro(id)
{
    //alert(id);
    //limpiamos el formulario
    $('#frmMarca')[0].reset();
    //establecer URL
    var url='../controller/CMarcaC.php';
    //indicar accion
    var accion='SelectID';
        //leemos los datos del form utilizando Ajax
        $.ajax({
        type:'POST', 
        url:url,
        data: 'InputID='+id+'&Accion='+accion,
        success: function(fila){
           // alert(fila);
            //obtenemos al JSON
            var datos=eval(fila);
            //indicar la accion en el campo oculto
            $('#Accion').val('actualizar');
            //pasar los campos a los controles
            $('#InputID').val(datos[0]);
            $('#InputNombre').val(datos[1]);
//            $('#InputDescripcion').val(datos[2]);
           // $('#InputFile').val(datos[3]);
//            $('#InputIcono').val(datos[3]);
           //cargar la imagen guardada en la tabla y mostrarla en el formulario
//            $('#mi_imagen').attr('src',datos[3]);
//            $('#info_file').text(datos[3]);
            $('#InputFoto').val(datos[2]);
//            
//            $('#InputIDCat').val(datos[4]);
//            //ocultar el boton registrar
//            $('#reg').hide();
//            $('#edi').show();
            
            //ver en el formulario
            $('#WinMarca').modal(
            {
                show:true,
                backdrop:'static'               
            }
           );
            //para ver el modal
            return false;
        }
    });    
        return false;   
}