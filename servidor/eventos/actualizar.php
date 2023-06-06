<?php session_start();
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $data = array(
        "id_evento" => $_POST['id_evento'],
        "evento" => $_POST['nombre_eventou'],
        "hora_inicio" => $_POST['fechau']. " " .$_POST['hora_iniciou'],
        "hora_fin" => $_POST['fechau']. " " .$_POST['hora_finu'],
        "fecha" => $_POST['fechau'],
        "id_usuario" => $_SESSION['id_usuario']
    );

    echo $Eventos->actualizarEvento($data);

?>
