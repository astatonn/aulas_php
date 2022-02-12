<?php

# COLEÇÃO DE ROTAS

$routes = [
    'home'              => 'main@index',
    'loja'              => 'main@loja',
    'carrinho'          => 'main@carrinho',
];

# DEFINIR AÇÃO PADRÃO
$action = 'home'; #SE NÃO FOR APRESENTADO NENHUM VALOR NO GET ELE MANDA PARA A PÁGINA INICIAL

# VERIFICA SE EXISTE A AÇÃO NA QUERY STRING
if(isset($_GET['action'])){
    if (!key_exists($_GET['action'], $routes)){
        $action = 'home';
    }
    else {
        $action = $_GET['action'];
    }

}

# TRATAR A DEFINIÇÃO DA ROTAS
$partes = explode('@', $routes[$action]);

$controller = 'core\\controllers\\' . ucfirst($partes[0]);
$method = $partes[1];

$ctr = new $controller();
$ctr->$method();

