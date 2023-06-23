<?php

class mysql
{
    var $conexion;

    function __construct()
    {
        $this->conexion = new mysqli(
            apache_getenv("DBSERVER"),
            apache_getenv("DBUSER"),
            apache_getenv("DBPASSWORD"),
            apache_getenv("DBDATABASE"),
        );
        // Check connection
        if ($this->conexion->connect_error) {
            die("Connection failed: " . $this->conexion->connect_error);
        }
        //echo "Connected successfully";
    }

    public function getConexion()
    {
        return $this->conexion;
    }
}
