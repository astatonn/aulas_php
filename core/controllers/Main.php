<?php

namespace core\controllers;

use core\classes\EnviarEmail;
use core\classes\Database;
use core\classes\Store;
use core\models\Clientes;

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

    //================================================================
    public function novo_cliente (){

        # VERIFICA SE JÁ EXISTE SESSÃO ABERTA
        if (Store::clienteLogado()){
            $this->index();
            return ;
        }


        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ]);

    }

    //================================================================
    public function criar_cliente (){

        # VERIFICA SE JÁ EXISTE SESSÃO
        if(Store::clienteLogado()){
            $this->index();
            return ;
        }

        # VERIFICA SE HOUVE SUBMISSÃO DO FORMULÁRO
        if ($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return ;
        }

        # CRIAR O NOVO CLIENTE 
        # IGUALDADE DAS SENHAS
        if ($_POST['text_senha_1'] != $_POST['text_senha_2']){
            $_SESSION['erro'] = 'As senhas não estão iguais';
            $this->novo_cliente();
            return ;
        }

        # VERIFICAR SE JÁ EXISTE CONTA COM O EMAIL PASSADO      
        $cliente = new Clientes();
        if ($cliente->verificar_email_existe($_POST['text_email'])){
            $_SESSION['erro'] = 'Já existe email cadastrado';
            $this -> novo_cliente();
            return ;
        }

        # CLIENTE PRONTO PARA SER REGISTRADO NO BANCO DE DADOS
        $purl = $cliente->registrar_cliente();

        # LINK UTILZIADO PARA CONFIRMAR O EMAIL DO USUÁRIO
        $email = new EnviarEmail();
        $email_cliente = strtolower(trim($_POST['text_email']));
        $resultado = $email->enviar_email_confirmacao_novo_cliente($email_cliente, $purl);

        if($resultado){
            echo 'email enviado';
        } else {
            echo 'aconteceu um erro';
        }



        

    }

}