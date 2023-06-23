<?php

class cmdBuscarUsuarios
{

    public function execute($params)
    {
        //print_r($params);
        extract($_REQUEST);
        if (count($params) == 0)
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Parametros"
            ];

        else {

            $id = $params[0];

            $u = new usuariosControl();
            $result = $u->buscarUsuario($id);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "Usuario Encontrado"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan Datos"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Usuario No Encontrado"
                ];
            }
        }
        if (!CALL_API == true)  // Debe mostrar un pantalla HTML
            $response["view"] = "usuarios/edit";

        return $response;


        //print_r(json_encode($response));
    }
}
