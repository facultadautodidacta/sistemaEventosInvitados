<?php session_start(); 
    include "../../clases/Invitados.php";
    $Invitados = new Invitados();
    $items = $Invitados->mostrarInvitados($_SESSION['id_usuario']);
?>

<table class="table table-sm table-hover" id="tabla_invitados_load">
    <thead>
        <tr>
            <th>Invitado</th>
            <th>Email</th>
            <th>Evento</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key):?>
        <tr>
            <td><?php echo $key['nombre'] ?></td>
            <td><?php echo $key['email'] ?></td>
            <td><?php echo $key['nombreEvento'] ?></td>
            <td><?php echo $key['fechaEvento'] ?></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" 
                data-bs-target="#modal_editar_invitado" 
                onclick="editarInvitado('<?php echo $key['idInvitado'] ?>')">
                    <i class="fa-solid fa-user-pen"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger" 
                onclick="eliminarInvitado('<?php echo $key['idInvitado'] ?>')">
                    <i class="fa-solid fa-user-xmark"></i>
                </span>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_invitados_load').DataTable({
            "language": {
                "url": "../public/librerias/datatables/Spanish.json"
            }
        });
    });
</script>