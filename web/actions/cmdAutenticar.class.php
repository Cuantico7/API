<?php

class cmdAutenticar
{

    public function execute()
    {
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->autenticar($email, $password);

        if (is_array($result)) {
            $response = [
                "result" => "success",
                "data" => $result,
                "message" => "Usuario Valido",
                "view" => "home"
            ];
            //require "vista/home.php";   ///<-----------
        }
        if ($result == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos",
                "view" => "login"
            ];

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario Invalido",
                "view" => "login"
            ];
            // require "vista/login.php"; ///<-----------
        }
        return $response;
    }
}
