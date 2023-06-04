<?php 
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $items = $Eventos->mostrarEventos();
?>

<table class="table table-sm table-hover" id="tabla_eventos_load">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Hora inicio</th>
            <th>Hora fin</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $key ) : ?>
        <tr>
            <td><?php echo $key['evento'] ?></td>
            <td><?php echo $key['hora_inicio'] ?></td>
            <td><?php echo $key['hora_fin'] ?></td>
            <td><?php echo $key['fecha'] ?></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_evento" 
                    onclick="editarEvento('<?php echo $key['id_evento'] ?>')">
                    <i class="fa-solid fa-pen-to-square"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger" onclick="eliminarEvento('<?php echo $key['id_evento'] ?>')">
                    <i class="fa-solid fa-calendar-xmark"></i>
                </span>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_eventos_load').DataTable();
    });
</script>