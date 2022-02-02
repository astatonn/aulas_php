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