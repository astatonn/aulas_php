<?php 
use core\classes\Store; 
?>

<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <a href="?action=home">
                <h3><?= APP_NAME ?></h3>
            </a>
        </div>
        <div class="col-6 text-end p-3">
            <a href="?action=inicio">início</a>
            <a href="?action=loja">Loja</a> 
            <!-- VERIFICA SE EXISTE CLIENTE NA SESSAO -->
            <?php

                    

            if (Store::clienteLogado()):?>
                <a href="?action=logout">Logout</a>
                <a href="?action=conta">Minha Conta</a>

                
            <?php else: ?>

                <a href="?action=login">Login</a>
                <a href="?action=cadastro">Criar Conta</a>
                
            <?php endif;?>

            <a href="?action=carrinho"><i class="fas fa-shopping-cart"></i></a>
            <span class="badge bg-warning">10</span>
        </div>
    </div>
</div>