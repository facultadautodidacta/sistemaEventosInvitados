<?php session_start();

    include "../../clases/Invitados.php";
    $Invitados = new Invitados();
    $data = array(
        "id_evento" => $_POST['id_evento'],
        "nombre_invitado" => $_POST['nombre_invitado'],
        "email" => $_POST['email']
    );

    echo $Invitados->agregarInvitado($data);


?>