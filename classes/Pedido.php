<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author Cleber
 */
class Pedido {
    //put your code here
    private $id;
    private $cliente;
    private $funcionario;
    private $pizza;
    private $produto;
    private $data;
    private $hora;
    
    function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getFuncionario() {
        return $this->funcionario;
    }

    public function setFuncionario($funcionario) {
        $this->funcionario = $funcionario;
    }

    public function getPizza() {
        return $this->pizza;
    }

    public function setPizza($pizza) {
        $this->pizza = $pizza;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    
}

?>
