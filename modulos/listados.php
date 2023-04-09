<?php 
  include "header.php";
  include "menu.php"; 
?>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          <h2>Listados de invitados</h2>
          <span class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modal_agregar_invitado">
            Listado nuevo
          </span>
          <hr>
          <div id="tablaInvitados"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include "footer.php";
  include "listados/modal_agregar.php";
  include "listados/modal_editar.php";
?>
<script src="../public/js/invitados.js"></script>
    