<?php

class AgendaDAO {

// irá receber uma conexão
    public $p = null;

// construtor
    public function AgendaDAO() {
        $this->p = new Conexao();
    }

// realiza uma inserção
    public function Insere($agenda) {
        try {
            $stmt = $this->p->prepare("INSERT INTO tb_tb_agenda (nome, email, telefone) VALUES (?, ?, ?)");
            $stmt->bindValue(1, $agenda->getNome());
            $stmt->bindValue(2, $agenda->getEmail());
            $stmt->bindValue(3, $agenda->getTelefone());
            $stmt->execute();
// fecha a conexão
            $this->p = null;
// caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

// realiza um Update
    public function Update($agenda, $condicao) {
        try {
            
// prepara a query de update – Prepare Statement
            $stmt = $this->p->prepare("UPDATE tb_agenda SET nome=?, email=?, telefone=? WHERE id=?");
            $this->p->beginTransaction();
            $stmt->bindValue(1, $agenda->getNome());
            $stmt->bindValue(2, $agenda->getEmail());
            $stmt->bindValue(3, $agenda->getTelefone());
            $stmt->bindValue(4, $condicao);
            
// executa a query preparada
            $stmt->execute();
            $this->p->commit();
            
// fecha a conexão
            $this->p = null;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

// remove um registro
    public function Deleta($id) {
        try {
            $num = $this->p->exec("DELETE FROM tb_agenda WHERE id=$id");
            
// caso seja execuado ele retorna o número de rows que foram afetadas.
            if ($num >= 1) {
                return $num;
            } else {
                return 0;
            }
            
// caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    public function Lista($query = null) {
        try {
            if ($query == null) {
                $stmt = $this->p->query("SELECT * FROM tb_agenda");
            } else {
                $stmt = $this->p->query($query);
            }
            $this->p = null;
            return $stmt;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

}

?>