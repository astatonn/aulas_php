<?php
/*

# CLASSES - INTRODUÇÃO À POO

- É UM MODELO A PARTIR DE UM OBJETO

# MÉTODO CONSTRUTOR
Ex.:
    class Humano {
        private $nome;
        private $apelido;

        function __construct ($n, $a){
                $this->nome = $n;
                $this->apelido = $a;
        }

        public function nomeCompleto(){
            return $this-nome . ' ' . $this->apelido;
        }
    }

    $homem = new Humano('Lucas', 'Lima');

    echo $homem->nomeCompleto();
    
    # PARA AS CLASSES QUE POSSUEM UM MÉTODO CONSTRUTOR SEM PARÂMETROS, PODEM SE INSTANCIAR OS OBJETOS SEM OS PARÊNTESES

# PROPERTY PROMOTION

Access modifiers no construtor

Ex.:
    class Humano {
        function __construct(public $nome, public $apelido){
            $this->nome = $nome;
            $this->apelido = $apelido;
        }
    }

##### CLASSES NÃO SÃO CASE SENSITIVE #####

# CLASSE ANONIMA
- Uma classe que é instanciada apenas para uma variável
- Poupa memória pois não há necessidade de  reservar memória para instanciar um objeto

Ex.:
    $b = new class {
        function teste(){
            echo 'teste';
        }
    }; # ENCERRA COM ;

# HERANÇA

Herda as propriedades de outra classe com a palavra reservada extends

Ex.:
    class Animais {
        ...
    }
    class Mamifero extends Animais {
        ...
    }

# OVERRIDING

Permite que uma classe derivada reescreva uma função

para usar a função da classe pai usando a palavra reservada parent ou o nome da Classe base

Ex.:
    parent::nomeDaFunao();
    Animais::nomeDaFunao();

# IMPEDIR HERANÇA COM A EXPRESSÃO FINAL

Impedir que códigos alternativos sejam criados ao método

Ex.:
    class Veiculo {
        final function mover (){
            ...
        }
    }

    class Automovel extends Veiculo{
        function mover(){
            ...
        }
    }

Impedir que as classes sejam extendidas


Ex.:
    final class Veiculo {
        function mover (){
            ...
        }
    }

    class Automovel extends Veiculo{
        function mover(){
            ...
        }
    }

# NÍVEIS DE ACESSO 

- PUBLIC
    pode ser acessado pelo objetos livremente

- PROTECTED
    pode ser acessado dentro da classe ou qualquer extensão da classe

- PRIVATE
    Só pode ser acessado dentro da própria classe
    O objeto instanciado pode ser passado como parãmtro para o método 


