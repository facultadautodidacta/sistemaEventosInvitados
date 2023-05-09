<?php 
    include "Conexion.php";

    class Auth extends Conexion {
        public function registrar($usuario, $password) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO t_usuarios (usuario, password) 
                    VALUES (?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $usuario, $password);
            return $query->execute();
        }

        public function logear($usuario, $password) {
            $conexion = parent::conectar();
            $data_usuario = "";
            $password_usuario = "";
            $sql = "SELECT * FROM t_usuarios 
                    WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $data_usuario = mysqli_fetch_array($respuesta);
                $password_usuario = $data_usuario['password'];
                
                if (password_verify($password, $password_usuario)) {
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['id_usuario'] = $data_usuario['id_usuario'];
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }   
    }

?>