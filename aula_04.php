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

# STATIC

Permite usar os métodos e valores sem que seja necessário instanciar um objeto

Ex.:
    class Operacoes {
        static $valor1;
        static $valor2;

        static function adcionar (){
            return self::$valor1 + self::$valor2;
        }

        # Melhor aplicação:
        static function adcionarOptimized ($valor1, $valor2){
            return $valor1 + $valor2;
        }
    }

    Operacoes::$valor1 = 10;
    Operacoes::$valor2 = 20;

    echo Operacoes::adcionar();
    echo Operacoes::adcionarOptimized(10,20);

# CONSTANT, DEFINE, DEFINED

Constantes globail e locais fora do contexto da classe

Ex.:
    define('APP_NAME', 'Meu site'); # SEMPRE EM LETRAS MAIÚSCULAS
                                    # ACEITA VETOR, INT, STRING, FLOAT, BOOL
    defined ('CONSTANTE') or define ('CONSTANTE', 'valor');
    
# CONSTANTE MÁGICA
    - São 8 e variam automaticamente.

    echo __LINE__ . '<br>' # indica o número da linha de código no script;
    echo __FILE__ . '<br>' # identifica o caminho completo
    echo __DIR__ . '<br>' # identifica a pasta onde o script está localizado
    echo __FUNCTION__ . '<br>' # identifica o nome da função
    echo __CLASS__ . '<br>' # identifica o nome da classe
    echo __METHOD__ . '<br>' # identifica o nome do método
    echo __NAMESPACE__ . '<br>' # identifica o namespace

# CLASSES ABSTRATAS
    Implementação parcial para outras implementações crescerem a classe original

# TRAITS
    Grupo de métodos que podem ser inseridos dentro de uma classe.

Ex.:
    trait MinhasFuncoes {
        public function fun1 ($foo){
            ....
        }

        public function fun2 ($foo){
            ...
        }
    }

    class Classe {
        use MinhasFuncoes;
    }

    $v = new Classe();
    $v->fun1('valor');

# INCLUDE

Substitui uma linha de código por todo o outro script


# REQUIRE

Impede a execução do aplicativo caso haja algum problema na importação de um arquivo