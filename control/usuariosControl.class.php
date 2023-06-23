<?php

class usuariosControl
{
    var $modelo;

    function __construct()
    {
        $this->modelo = new usuariosModelo();
    }

    public function autenticar($email, $password)
    {
        if (
            !empty($email) && $email != "" && $email != NULL &&
            !empty($password) && $password != "" && $password != NULL
        ) {
            $result = $this->modelo->validarUsuario($email, md5($password));

            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else {
            return 0;
        }
    }


    public function listarUsuarios()
    {
        return $this->modelo->getAllUsuarios();
    }

    public function buscarUsuario($id)
    {
        if (!empty($id) && $id != "" && $id != NULL) {
            $result = $this->modelo->getById($id);
            if (is_array($result) && count($result) > 0) {
                return $result;
            } else
                return 1;
        } else
            return 0;
    }

    public function registrar($nombre, $email, $password, $estado)
    {
        if (
            !empty($nombre) && $nombre != "" && $nombre != NULL &&
            !empty($email) && $email != "" && $email != NULL &&
            !empty($password) && $password != "" && $password != NULL &&
            !empty($estado) && $estado != "" && $estado != NULL
        ) {
            $result = $this->modelo->getByEmail($email);
            if (is_array($result) && count($result) == 0) {
                $result = $this->modelo->insertar($nombre, $email, md5($password), $estado);
                if ($result)
                    return 3; // Usuario creado
                else
                    return 2; //Usuario no creado

            } else
                return 1; //Usuario ya existe con el mismo email
        } else
            return  0; //Falta Datos
    }

    public function modificar($id, $nombre, $email, $estado)
    {
        if (
            !empty($id) && $id != "" && $id != NULL &&
            !empty($nombre) && $nombre != "" && $nombre != NULL &&
            !empty($email) && $email != "" && $email != NULL &&
            !empty($estado) && $estado != "" && $estado != NULL
        ) {
            $result = $this->modelo->getById($id);
            if (!is_array($result) && count($result) > 0) {
                $result = $this->modelo->actualizar($id, $nombre, $email, $estado);
                if ($result)
                    return 3; // Usuario actualizado
                else
                    return 2; //Usuario no actualizado

            } else
                return 1; //Usuario No existe con ese Id
        } else
            return  0; //Falta Datos
    }
}
