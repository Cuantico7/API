<?php
require_once ".autoloader";
require_once ".frontController";

$proccess = new frontController();

$proccess->proccessRequest();
