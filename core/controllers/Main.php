<?php

namespace core\controllers;

use core\classes\Functions;

class Main {

    //================================================================
    public function index (){

        $dados = [
            'titulo'        => 'Este eh o título',
            'clientes'      => ['joao', 'ana', 'carlos'],
        ];

        Functions::Layout([
            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',
        ], $dados);
    }

    //================================================================
    public function loja (){
        echo 'loja';
    }
}