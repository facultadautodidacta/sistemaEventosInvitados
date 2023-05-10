<?php session_start();
    include "../../clases/Invitados.php";
    $Invitados = new Invitados();
    $id_invitado = $_POST['id_invitado'];
    echo $Invitados->eliminarInvitado($id_invitado);
?>