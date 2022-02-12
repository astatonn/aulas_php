<?php

namespace core\classes;

use Exception;
use PDO;
use PDOException;

class Database {

    private $connection;

    //======================================================================
    private function connect(){
        # CONEXÃO AO BANCO DE DADOS
        $this->connection = new PDO(
            'mysql:'.
            'host='.MYSQL_SERVER.';'.
            'dbname='.MYSQL_DATABASE.';'.
            'charset='.MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASSWORD,
            // TODA VEZ QUE UMA LIGAÇÃO FOR FEITA, ELA FICARÁ SALVA NA MEMÓRIA AGILIZANDO UMA NOVA CONEXÃO
            array(PDO::ATTR_PERSISTENT => true)
            
        );
        

        # DEBUG
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //======================================================================
    private function desconect(){
        $this->connection = null;
    }

    //======================================================================
    public function select ($sql, $par = null){
        
        $sql = trim($sql);

        # VERIFICA SE EH UMA INSTRUÇÃO SELECT
        if (!preg_match("/^SELECT/i", $sql)){
            throw new Exception ('Base de dados - Não é uma instrução SELECT');
        }
        
        # EXECUTA FUNÇÃO DE PESQUISA DE SQL

        $this->connect ();
        
        $result = null;

        try {
           
            # COMUNICAÇÃO COM O BANCO
            if (!empty ($par)){
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ($par);
                $result = $exec->fetchAll (PDO::FETCH_CLASS);
                

            } else {
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ();
                $result = $exec->fetchAll (PDO::FETCH_CLASS);
            }

        } catch (PDOException $e) {
            
            return false;
        }

        $this->desconect();
        
        return $result;
    }

    //======================================================================
    public function insert ($sql, $par = null){
        
        $sql = trim($sql);

        # VERIFICA SE EH UMA INSTRUÇÃO INSERT
        if (!preg_match("/^INSERT/i", $sql)){
            throw new Exception ('Base de dados - Não é uma instrução INSERT');
        }
        
        # EXECUTA FUNÇÃO DE PESQUISA DE SQL

        $this->connect ();
        
        try {
           
            # COMUNICAÇÃO COM O BANCO
            if (!empty ($par)){
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ($par);
                
            } else {
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ();
                
            }

        } catch (PDOException $e) {
            
            return false;
        }

        $this->desconect();

    }

    //======================================================================
    public function update ($sql, $par = null){
        
        $sql = trim($sql);
        
        # VERIFICA SE EH UMA INSTRUÇÃO UPDATE
        if (!preg_match("/^UPDATE/i", $sql)){
            throw new Exception ('Base de dados - Não é uma instrução UPDATE');
        }
        
        # EXECUTA FUNÇÃO DE PESQUISA DE SQL

        $this->connect ();
        
        try {
           
            # COMUNICAÇÃO COM O BANCO
            if (!empty ($par)){
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ($par);
                
            } else {
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ();
                
            }

        } catch (PDOException $e) {
            
            return false;
        }

        $this->desconect();

    }

    //======================================================================
    public function delete ($sql, $par = null){
        
        $sql = trim($sql);
        
        # VERIFICA SE EH UMA INSTRUÇÃO DELETE
        if (!preg_match("/^DELETE/i", $sql)){
            throw new Exception ('Base de dados - Não é uma instrução DELETE');
        }
        
        # EXECUTA FUNÇÃO DE PESQUISA DE SQL

        $this->connect ();
        
        try {
           
            # COMUNICAÇÃO COM O BANCO
            if (!empty ($par)){
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ($par);
                
            } else {
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ();
                
            }

        } catch (PDOException $e) {
            
            return false;
        }

        $this->desconect();

    }

    //======================================================================
    // GENÉRICA
    //======================================================================
    public function statement ($sql, $par = null){
        
        $sql = trim($sql);
        
        # VERIFICA SE EH UMA INSTRUÇÃO diferente das anteriores
        if (preg_match("/^(DELETE|INSERT|UPDATE|DELETE)/i", $sql)){
            throw new Exception ('Base de dados - Não é uma instrução válida');
        }
        
        # EXECUTA FUNÇÃO DE PESQUISA DE SQL

        $this->connect ();
        
        try {
           
            # COMUNICAÇÃO COM O BANCO
            if (!empty ($par)){
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ($par);
                
            } else {
                
                $exec = $this->connection->prepare ($sql);
                $exec->execute ();
                
            }

        } catch (PDOException $e) {
            
            return false;
        }

        $this->desconect();

    }


}
