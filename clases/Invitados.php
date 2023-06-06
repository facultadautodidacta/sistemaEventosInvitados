<?php
    include "Conexion.php";

    class Invitados extends Conexion {
        public function mostrarInvitados() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM v_invitados";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function agregarInvitado($data) {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO t_invitados (id_evento, 
                                            nombre_invitado, 
                                            email) 
                            VALUES (?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('iss', $data['id_evento'],
                                        $data['nombre_invitado'],
                                        $data['email']);
            return $query->execute();
        }

        public function eliminarInvitado($id_invitado) {
            $conexion = Conexion::conectar();
            $sql = "DELETE FROM t_invitados WHERE id_invitado = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $id_invitado);
            return $query->execute();
        }

        public function selectEventos() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_eventos";
            $respuesta = mysqli_query($conexion, $sql);
            $select = '<label for="id_evento">Selecciona un evento</label>
                        <select name="id_evento" id="id_evento" class="form-select" required>';

            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $select .= '<option 
                            value='. $mostrar['id_evento'] . '>' . 
                                $mostrar['evento'] .
                            '</option>'; 
            }

            return $select .= '</select>';
        }

        public function selectEventosEditar() {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_eventos";
            $respuesta = mysqli_query($conexion, $sql);
            $select = '<label for="id_eventoe">Selecciona un evento</label>
                        <select name="id_eventoe" id="id_eventoe" class="form-select" required>';

            while ($mostrar = mysqli_fetch_array($respuesta)) {
                $select .= '<option 
                            value='. $mostrar['id_evento'] . '>' . 
                                $mostrar['evento'] .
                            '</option>'; 
            }

            return $select .= '</select>';
        }

        public function editarInvitado($id_invitado) {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM t_invitados  
                    WHERE id_invitado = '$id_invitado'";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }
    }
