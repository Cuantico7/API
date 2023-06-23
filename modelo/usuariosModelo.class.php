<?php


class usuariosModelo
{
    var $conexion;

    function __construct()
    {
        $con = new mysql();
        $this->conexion = $con->getConexion();
    }

    public function getAllUsuarios()
    {
        $sql = "SELECT * FROM usuarios";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function validarUsuario($email, $password)
    {
        $sql = "SELECT * 
                FROM usuarios 
                WHERE email = '$email' 
                AND   password='$password'";
        //print_r($sql);
        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getByEmail($email)
    {
        $sql = "SELECT * 
                FROM usuarios 
                WHERE email = '$email'";

        $result = $this->conexion->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($nombre, $email, $password, $estado)
    {
        $sql = "INSERT 
                INTO usuarios 
                VALUES (null,'$nombre','$email','$password',$estado)";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function actualizar($id, $nombre, $email, $estado)
    {
        $sql = "UPDATE  usuarios
                SET nombre = '$nombre',
                    email ='$email',
                    estado = $estado
                WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result;
    }

    public function actualizarPassword($id, $password)
    {
        $sql = "UPDATE  usuarios
                SET password ='$password',
                WHERE id = $id";

        $result = $this->conexion->query($sql);

        return $result;
    }
}
