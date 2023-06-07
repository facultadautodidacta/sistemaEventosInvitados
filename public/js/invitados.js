$(document).ready(function(){
    $('#tablaInvitados').load('listados/tabla_invitados.php');
});

function agregarInvitado() {
    $.ajax({
        type:"POST",
        data:$('#frmAgregarInvitado').serialize(),
        url:"../servidor/invitados/agregar.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaInvitados').load('listados/tabla_invitados.php');
                $('#frmAgregarInvitado')[0].reset();
                Swal.fire({
                    title: 'Exito!',
                    text: 'Agregado',
                    icon: 'success'
                })
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Fallo con ' + respuesta,
                    icon: 'error'
                })
            }
        }
    });

    return false;
}

function eliminarInvitado(id_invitado) {
    Swal.fire({
        title: 'Estas seguro de eliminar este invitado?',
        text: "Una vez eliminado, no podra ser recuperado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '!Eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type:"POST",
                data:'id_invitado=' + id_invitado,
                url:"../servidor/invitados/eliminar.php",
                success:function(respuesta) {
                    if (respuesta == 1) {
                        $('#tablaInvitados').load('listados/tabla_invitados.php');
                        Swal.fire({
                            title: 'Exito!',
                            text: 'Eliminado',
                            icon: 'success'
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Fallo con ' + respuesta,
                            icon: 'error'
                        })
                    }
                }
            });
        }
      })
}

function editarInvitado(id_invitado){
    $.ajax({
        type: "POST",
        url: "../servidor/invitados/editar.php",
        data: "id_invitado=" + id_invitado,
        success : function(respuesta) {
            respuesta = jQuery.parseJSON( respuesta );

            $('#emailu').val(respuesta[0].email);
            $('#id_eventoe').val(respuesta[0].id_evento);
            $('#id_invitado').val(respuesta[0].id_invitado);
            $('#nombre_invitadou').val(respuesta[0].nombre_invitado);
            
        }
    });
}


function actualizarInvitado() {
    $.ajax({
        type:"POST",
        data:$('#frmEditarInvitado').serialize(),
        url:"../servidor/invitados/actualizar.php",
        success:function(respuesta) {
            
            if (respuesta == 1) {
                $('#tablaInvitados').load('listados/tabla_invitados.php');
                
                Swal.fire({
                    title: 'Exito!',
                    text: 'Actualizado',
                    icon: 'success'
                })
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Fallo con ' + respuesta,
                    icon: 'error'
                })
            }
        }
    });
    return false;
}