<?php
    include "Conexion.php";

    class Eventos extends Conexion {
        public function mostrarEventos() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_eventos";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function agregar($data) {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO t_eventos (id_usuario,
                                            evento,
                                            hora_inicio,
                                            hora_fin,
                                            fecha) 
                            VALUES (?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('issss', $data['id_usuario'],
                                        $data['evento'],
                                        $data['hora_inicio'],
                                        $data['hora_fin'],
                                        $data['fecha']);
            return $query->execute();
        }
    }
