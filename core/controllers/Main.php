<?php

namespace core\controllers;

use core\classes\Store;

class Main {

    //================================================================
    public function index (){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    //================================================================
    public function loja (){

        # APRESENTA A PÁGINA DA LOJA 


        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    //================================================================
    public function carrinho (){

        # APRESENTA A PÁGINA DO CARRINHO 


        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }
}