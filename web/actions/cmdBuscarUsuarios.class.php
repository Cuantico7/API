<?php

class cmdBuscarUsuarios
{

    public function execute($params)
    {
        //print_r($params);
        extract($_REQUEST);
        $id = $params[0];
        $u = new usuariosControl();
        $result = $u->buscarUsuario($id);
        if (is_array($result)) {
            $response = [
                "result" => "ok",
                "data" => $result,
                "message" => "Usuario Encontrado"
            ];
        }
        if ($result == 0) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Faltan Datos"
            ];
        }
        if ($result == 1) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario No Encontrado"
            ];
        }

        print_r(json_encode($response));
    }
}
