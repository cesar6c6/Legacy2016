$(function()
    {
        $('#btn_enviar').on('click',function()
        {
           validarControles();         
        }
        );

        $('#inputPassword').keypress(
                function(e)
                {
                    if (e.which==13)
                    {
                        validarControles();
                    }                       
                }
            );
    }
);

function validarControles()
{
    //alert("hola Logueo");
           //verificar si se llenaron las cajas de texto
           var login=$('#inputUsuario').val();//leer la caja de texto y pasarlo a la variable
           //preguntamos por el contenido de la variable
           if(login.length==0)
           {
               //mostrar mensaje
               $('#msg_error').html('<div class="alert alert-warning" role="alert">Ingrese Login</div>').show(500).delay(3000).hide(500);
               //colocar el foco
               $('#inputUsuario').focus();
               //Interrumpir
               return false;
           }
           var pass=$('#inputPassword').val();//leer la caja de texto y pasarlo a la variable
           //preguntamos por el contenido de la variable
           if(pass.length==0)
           {
               //mostrar mensaje
               $('#msg_error').html('<div class="alert alert-warning" role="alert">Ingrese Password</div>').show(500).delay(3000).hide(500);
               //colocar el foco
               $('#inputPassword').focus();
               //Interrumpir
               return false;
           }
           
           //si los datos son los correctos
           validarAdministrador(login,pass);  
}

function validarAdministrador(Log, Pas)
{
    //alert(Log+'/'+Pas);
    var url='../controller/CManagementC.php';
    
    //envio de datos con ajax
    $.ajax({
        type:'POST',
        url:url,
        data:'inputUsuario='+Log+'&inputPassword='+Pas,        
        success:function(data)
        {          
            //evaluar la respuesta
           // alert(data);            
            if (data=='OK')
                document.location.href='../management/index.php';
            else
            {
                $('#frm-login')[0].reset();
                $('#inputUsuario').focus();
                $('#msg_error').html('<div class="alert alert-danger" role="alert">Datos Incorrectos</div>').show(500).delay(3000).hide(500);
                
            }
                
        }
    });  
    return false;
}


