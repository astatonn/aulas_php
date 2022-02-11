<?php

namespace core\classes;

use Exception;

class Store {

    # FUNÇÕES GERAIS 
    //=====================================
    public static function Layout ($structures, $dados = null){
        # APRESENTAR AS VIEWS DA APLICAÇÃO

        # VERIFICA SE A ESTRUTURA EH UM ARRAY
        if (!is_array($structures)){
            throw new Exception ("Coleção de dados inválida");
        }

        # VARIÁVEIS
        if (!empty($dados) && is_array($dados)){
            extract($dados);
        }


        # APRESENTAR RESULTADOS
        foreach ($structures as $structure){
            include ("../core/views/$structure.php");
        }
    }

    //=====================================
    public static function clienteLogado (){

        return (isset($_SESSION['cliente']));
    }
}