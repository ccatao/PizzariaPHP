<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcao
 *
 * @author Cleber
 */
class Funcao {
    //put your code here
    
    private $id;
    private $nome;
    private $descricao;
    private $salario;
    private $comissao;
    
    function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getComissao() {
        return $this->comissao;
    }

    public function setComissao($comissao) {
        $this->comissao = $comissao;
    }

    
}

?>
