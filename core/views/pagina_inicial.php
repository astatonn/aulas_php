<h1><?= $titulo; ?></h1>
<h2><?= $titulo; ?></h2>
<h3><?= $titulo; ?></h3>
<h4><?= $titulo; ?></h4>
<h5><?= $titulo; ?></h5>
<h6><?= $titulo; ?></h6>


<?php foreach ($clientes as $client):?>

    <li><?= $client; ?></li>
    <i class="far fa-trash-alt"></i>

<?php endforeach;?>