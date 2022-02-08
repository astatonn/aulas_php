<?php

# INICIAR A SESSÃO
session_start();

# LOAD CONFIG
require_once ('../config.php');

# CARREGA TODAS AS CLASSES DO PROJETO
require_once ('../vendor/autoload.php');


#CARREGAR ROTAS
require_once ('../core/routes.php');