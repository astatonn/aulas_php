<?php
echo 'Disponível em: https://www.youtube.com/watch?v=CJtBXYHm8gI&list=PLXik_5Br-zO9wODVI0j58VuZXkITMf7gZ&index=20';
echo '<br>';
# SRTLEN            -> Retorna a quantidade de caracteres da página.
# SUBSTR            -> Retorna as letras a partir da posição x até a posição y. substr($frase, 0, 8)
# STRTOUPPER        -> Converte a string para letras maiúsculas.
# STRTOLOWER        -> Conveter a string para letras minúsculas.
# STR_REPLACE       -> Substitui uma letra por outra. str_replace('a', 'e', $frase)
# STRPOS            -> Verificar qual a posição de um caracter. strpos ($frase, 'a')
# STR_CONTAINS      -> Verifica se uma string está dentro de outra string. str_contains ($frase, 'palavra')
# STR_STARTS_WITH   -> Verifica se uma string começa com outra string. str_starts_with ($frase, 'palavra')
# STR_ENDS_WITH   -> Verifica se uma string termina com outra string. str_ends_with ($frase, 'palavra')

# EXERCÍCIO 1 -> DEFINIR UM NOME E UM SOBRENOME EM DUAS VARIÁVEIS, APRESENTAR EM UMA TAG H3 'O MEU NOME É:' E APRESENTAR O NOME E EM UMA TAG H1, O NOME COMPLETO

# EXERCÍCIO 2 -> APRESENTAR UM PARÁGRAFO COM O TEXTO: 'O MEU NOME TEM X CARACTERES'

# EXERCÍCIO 3 -> APRESENTAR O NOME COMPLETO EM LETRAS MAIÚSCULAS A PARTIR DE LETRAS VARIÁVEIS COM VALORES EM LETRAS MINÚSCULAS
$nome       = 'Lucas';
$sobrenome  = 'Lima';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>O meu nome é:</h3>
    <h1><?= "$nome $sobrenome" ;?>
    <p>O meu nome tem <?= strlen($nome)+strlen($sobrenome) ?> caracteres</p>
    <p>O meu nome é <?= strtoupper($nome) ?> e o meu sobrenome é <?= strtoupper($sobrenome) ?> </p>
</body>
</html>