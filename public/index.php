<?php

use core\classes\Database;

session_start();

# LOAD CONFIG
require_once ('../config.php');

# CARREGA TODAS AS CLASSES DO PROJETO
require_once ('../vendor/autoload.php');

$bd = new Database();
$clientes = $bd->select("SELECT * FROM clientes");
echo '<pre>';
print_r($clientes);