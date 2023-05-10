<?php session_start();
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $id_evento = $_POST['id_evento'];
    echo $Eventos->eliminarEvento($id_evento);
?>