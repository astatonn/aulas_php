<?php

namespace core\models;

use core\classes\Database;
use core\classes\Store;

class Clientes {

    //================================================================
    public function verificar_email_existe ($email){
        # VERIFICA SE JÁ EXISTE OUTRA CONTA COM O MESMO EMAIL
        $bd = new Database();
        $parametros = [
            ':email'        => strtolower(trim($email)),
        ];
        $resultados = $bd->select("SELECT email FROM clientes WHERE email = :email", $parametros);

        if (count($resultados) != 0) {
            return true;
        } else {
            return false;
        }
    }

    //================================================================
    public function registrar_cliente(){
        $bd = new Database();

        # purl => PERSONAL URL | CONSISTE EM UM HASH
        $purl = Store::criarHash();

        $params = [
            ':email'            => strtolower(trim($_POST['text_email'])),
            ':senha'            => password_hash(trim($_POST['text_senha_1']), PASSWORD_DEFAULT),
            ':nome_completo'    => trim($_POST['text_nome_completo']), 
            ':endereco'         => trim($_POST['text_endereco']),
            ':cidade'           => trim($_POST['text_cidade']), 
            ':telefone'         => trim($_POST['text_telefone']), 
            ':purl'             => $purl,
            ':ativo'            => 0
        ];

        $bd->insert("
            INSERT INTO clientes VALUES (
                0,
                :email,
                :senha,
                :nome_completo,
                :endereco,
                :cidade,
                :telefone,
                :purl,
                :ativo,
                NOW(),
                NOW(),
                NULL
            )
        ", $params);

        return $purl;

    }
}
