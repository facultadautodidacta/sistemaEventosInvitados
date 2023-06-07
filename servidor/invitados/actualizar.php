<?php session_start();

    include "../../clases/Invitados.php";
    $Invitados = new Invitados();

    $data = array(
        "id_invitado" => $_POST['id_invitado'],
        "id_evento" => $_POST['id_eventoe'],
        "nombre_invitado" => $_POST['nombre_invitadou'],
        "email" => $_POST['emailu']
    );

    echo $Invitados->actualizarInvitado($data);


?>
