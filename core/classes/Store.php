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

    //=====================================
    public static function criarHash ($num_caracteres = 12){

        # CRIAR HASHES
        $chars = '01234567890123456789abcdefghijklmnopqrstuvxwyzabcdefghijklmnopqrstuvxwyzABCDEFGHIJKLMNOPQRSTUVXWYZABCDEFGHIJKLMNOPQRSTUVXWYZ01234567890123456789abcdefghijklmnopqrstuvxwyzabcdefghijklmnopqrstuvxwyzABCDEFGHIJKLMNOPQRSTUVXWYZABCDEFGHIJKLMNOPQRSTUVXWYZ';
        return substr   (str_shuffle($chars), 0, $num_caracteres);

        
    }
}