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
                "result" => "ok",
                "data" => $result,
                "message" => "Usuario Valido"
            ];
            //require "vista/home.php";   ///<-----------
        }
        if ($result == 0) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Faltan Datos"
            ];

            //require "vista/login.php"; ///<-----------
        }
        if ($result == 1) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario Invalido"
            ];
            // require "vista/login.php"; ///<-----------
        }

        print_r(json_encode($response));
    }
}
