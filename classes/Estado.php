<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estado
 *
 * @author Cleber
 */
class Estado {
    //put your code here
    private $id;
    private $nome;
    private $uf;
    
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

    public function getUf() {
        return $this->uf;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }
    
    public function persistirEstado($estado){
        
        $insertProdutos = mysql_query("insert into produtos values
                                             (null,'$estado->,
                                              '$this->valor', 
                                              '$this->quantidade',
                                              '$this->categoria')");

        if($insertProdutos){
            $resposta="Inserido com sucesso";
        }else{
            $resposta ="Erro ao inserir";
        }
        
    }

    
}

?>
