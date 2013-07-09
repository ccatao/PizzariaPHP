<?php

include_once 'Conexao.class.php';
include_once 'AgendaDAO.php';
include_once 'Agenda.class.php';



// instancia a classe Agenda
$agenda = new Agenda();
//setando os dados de contato
$agenda->setNome("Cleber");
$agenda->setEmail("ccatao@bol.com.br");
$agenda->setTelefone("8899-6655");


// instancia a classe Data Access Object para Agenda
$DAO = new AgendaDAO();

// inserir contato na agenda
$DAO->Insere($agenda);

// apagar registro por id
$DAO->Deleta(1);

//para listar nome e email de todos os contatos
foreach ($DAO->Lista() as $contato) {
    echo $contato->nome . ' – ' . $contato->email . '<br/>';
}
//para listar contato por nome
$a = 'Cleber';
foreach ($DAO->Lista('SELECT * FROM agenda WHERE nome = $a') as $row) {
    echo $row->nome . ' – ' . $row->email . '<br>';
}