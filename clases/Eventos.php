<?php
    include "Conexion.php";

    class Eventos extends Conexion {
        public function mostrarEventos() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_eventos";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }
    }
