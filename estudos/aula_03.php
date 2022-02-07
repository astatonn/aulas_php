<?php 

# MATCH 
/* match (*var) {
    'parm' => 'value',
    ...
    default => 'value'
}

compara valor e tipo (===)
*/

# NAMED ARGUMENTS
/* Permite passar os parâmetros opcionais através de nomes durante a chamada da função
Ex.:
    function adcionar ($a, $b = 10, $c){
        ...
    }

    adcionar (c: 1000, a: 10);
    # ATENTAR QUE NÃO EH NECESSÁRIO O CIFRÃO ($) PARA OS PARÂMETROS.

*/

# VARIADIC PARAMETER
/* Cria-se uma elipse (...) e dá-se o nome de uma varável para criar um grupo de argumentos
Ex.: 
function minha_func (...$argumentos) {
    foreach ($argumentos as $a){
        ....
    }
}

minha_func (10, 20, 30, 40, 50);

# FUNÇÃO ANÔNIMA

/* São funções que não possuem nome e podem ser definidas como um valor atribuído à uma variável

Ex.:
    $a = function (){
        ....
        return "retorno"
    };

    Atentar para o ;

    echo $a ('parametro');

# CLOSERUES E ARROW FUNCTIONS

/* São funções anõnimas que podem ser usadas variáveis do escopo global

Ex.:
    $x = 20; # VARIÁVEL 

    $minhaClosure = function ($z) use ($x) {
        ...
        # NÃO ALTERA O VALOR DAS VARIÁVEIS GLOBAIS
    };

    $minhaClosure (10);

Ex.:
    # ARROW FUNCTION SÃO FUNÇÕES CLOSURE POREM ESCRITO DE FORMA MAIS SIMPLES E QUE JÁ CAPTURAM AUTOMATICAMENTE OS VALORES DAS VARIÁVEIS GLOBAIS
    $x = 20;

    $minhaFuncao = fn($z) => "$x - $z";

    Não necessita de um retorno nem das chaves

# GENERATORS

/* Função que gera valores em série.
Cada chamada da execução da função executa um estado da mesma

É retornado pela palavra reserva 'yield' que guarda o estado da função permitindo que a mesma continue de sua última execução

Ex.: 
    function buscarNumero(){
        for ($i = 0; $i < 10; $i++){
            yield $i;
        }
    }

    # É um iterador até que não haja mais possibilidade de execução da função

    yield from ['nome1', 'nome2', 'nome3'];

    # É otimizado para devolver um valor por vez e economizar memória