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

        <div class="col-6 text-end">
            <a href="?action=inicio" class="nav-item">início</a>
            <a href="?action=loja" class="nav-item">Loja</a> 
            <!-- VERIFICA SE EXISTE CLIENTE NA SESSAO -->
            <?php
                    

            if (Store::clienteLogado()):?>
                <a href="?action=logout" class="nav-item">Logout</a>
                <a href="?action=minha_conta" class="nav-item">Minha Conta</a>

                
            <?php else: ?>

                <a href="?action=login" class="nav-item">Login</a>
                <a href="?action=novo_cliente" class="nav-item">Criar Conta</a>
                
            <?php endif;?>

            <a href="?action=carrinho"><i class="fas fa-shopping-cart"></i></a>
            <span class="badge bg-warning">10</span>
        </div>
    </div>
</div>