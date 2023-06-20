<?php session_start();
    $id_usuario = $_SESSION['id_usuario'];
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    echo $Eventos->fullCalendar($id_usuario);
?>