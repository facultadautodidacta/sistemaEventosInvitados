<?php
    include "Conexion.php";

    class Eventos extends Conexion {
        public function mostrarEventos($id_usuario) {
            $conexion = Conexion::conectar();
            $sql = "SELECT id_evento,
                            evento,
                            DATE_FORMAT(hora_inicio, '%H:%i:%s') AS hora_inicio, 
                            DATE_FORMAT(hora_fin, '%H:%i:%s') AS hora_fin,
                            DATE_FORMAT(fecha, '%d-%m-%Y') AS fecha
                    FROM 
                        t_eventos 
                    WHERE id_usuario = '$id_usuario'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function editarEvento($id_evento) {
            $conexion = Conexion::conectar();
            $sql = "SELECT id_evento,
                            evento,
                            DATE_FORMAT(hora_inicio, '%H:%i:%s') AS hora_inicio, 
                            DATE_FORMAT(hora_fin, '%H:%i:%s') AS hora_fin,
                            fecha
                    FROM 
                        t_eventos 
                    WHERE id_evento = '$id_evento'";
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

        public function eliminarEvento($id_evento) {
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM t_eventos WHERE id_evento = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $id_evento);
            return $query->execute();
        }

        public function actualizarEvento($data) {
            $conexion = Conexion::conectar();
            $sql = "UPDATE t_eventos SET id_usuario = ?,
                                        evento = ?,
                                        hora_inicio = ?,
                                        hora_fin = ?, 
                                        fecha = ? 
                    WHERE id_evento = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('issssi', $data['id_usuario'], 
                                            $data['evento'],
                                            $data['hora_inicio'],
                                            $data['hora_fin'],
                                            $data['fecha'],
                                            $data['id_evento']);
            return $query->execute();
        }

        public function mostrarInvitadosEvento($id_evento) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM v_invitados 
                    WHERE idEvento = '$id_evento'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function hayInvitados($id_evento) {
            $conexion = Conexion::conectar();
            $sql = "SELECT 
                        COUNT(*) as total
                    FROM
                        t_invitados
                    WHERE
                        id_evento = '$id_evento'";
            $respuesta = mysqli_query($conexion, $sql);
            
            return mysqli_fetch_array($respuesta)['total'];
        }

        public function fullCalendar($id_usuario) {
            $conexion = Conexion::conectar();
            $sql = "SELECT 
                        id_evento AS id,
                        evento AS title,
                        hora_inicio AS start,
                        hora_fin AS end
                    FROM
                        t_eventos 
                    WHERE id_usuario = '$id_usuario'";

            $respuesta = mysqli_query($conexion, $sql);
            $eventos = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);

            return json_encode($eventos);
        }
    }
