$(document).ready(function(){
    $('#tablaEventos').load('eventos/tabla_eventos.php');
});

function agregarEvento(){

    $.ajax({
        type:"POST",
        data:$('#frmAgregarEvento').serialize(),
        url:"../servidor/eventos/agregar.php",
        success:function(respuesta) {
            if (respuesta == 1) {
                $('#tablaEventos').load('eventos/tabla_eventos.php');
                $('#frmAgregarEvento')[0].reset();
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