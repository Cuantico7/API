<?php

class View
{

    public static function render($params = [])
    {
        $d = json_decode(json_encode($params));

        if (!is_dir(VIEWS)) {
            //die("LE directorio de vista no existe :(");
            showError("El directorio de vistas no existe:(", true);
        }
        $filename = VIEWS . $params["view"] . "View.php";
        if (!is_file($filename))
            //die("la Vista no existe :(");
            showError("la Vista no existe :(", true);

        require_once  $filename;
    }
}
