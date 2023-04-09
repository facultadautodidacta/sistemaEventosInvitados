<table class="table table-sm table-hover" id="tabla_invitados_load">
    <thead>
        <tr>
            <th>Invitado</th>
            <th>Evento</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_invitado">
                    <i class="fa-solid fa-user-pen"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger">
                    <i class="fa-solid fa-user-xmark"></i>
                </span>
            </td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_invitados_load').DataTable();
    });
</script>