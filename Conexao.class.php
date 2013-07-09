<?php

//ela herdará os métodos e atributos do PDO através da palavra-chave extends
class Conexao extends PDO {

    private $dsn = 'pgsql:host=localhost;port=5432;dbname=agenda';
    private $user = 'root';
    private $password = '';
    public $handle = null;

    function __construct() {
        try {
//aqui ela retornará o PDO em si, veja que usamos parent::_construct()
            if ($this->handle == null) {
                $dbh = parent::__construct($this->dsn, $this->user, $this->password);
                $this->handle = $dbh;
                return $this->handle;
            }
        } catch (PDOException $e) {
            echo 'Conexão falhou. Erro: ' . $e->getMessage();
            return false;
        }
    }

//aqui criamos um objeto de fechamento da conexão
    function __destruct() {
        $this->handle = NULL;
    }

}

?>