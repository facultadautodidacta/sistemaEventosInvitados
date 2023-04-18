<?php
    include "Conexion.php";

    class Invitados extends Conexion {
        public function mostrarInvitados() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM v_invitados";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }
    }
