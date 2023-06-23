<?php

class cmdConsultarUsuarios
{
    public function execute()
    {
        $u = new usuariosControl();

        $result = $u->listarUsuarios();
        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "Listado Generado"
        ];

        if (!CALL_API == true)  // Debe mostrar un pantalla HTML
            $response["view"] = "usuarios/index";

        return $response;
    }
}
