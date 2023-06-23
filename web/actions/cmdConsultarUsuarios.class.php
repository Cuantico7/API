<?php

class cmdConsultarUsuarios
{
    public function execute()
    {
        $u = new usuariosControl();

        $result = $u->listarUsuarios();


        print_r(json_encode($result));
    }
}
