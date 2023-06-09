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
          <h2>Eventos</h2>
          <span class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modal_agregar_evento">
          <i class="fa-regular fa-calendar-plus"></i> Nuevo evento
          </span>
          <hr>
          <div id="tablaEventos"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
  include "eventos/modal_agregar.php";
  include "eventos/modal_editar.php";
  include "footer.php";
?>

<script src="../public/js/eventos.js"></script>
    