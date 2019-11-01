<?php
class Cliente {
    private $cpf;
    private $nome;
    private $nascimento;
    private $salario;

    function __construct($cpf, $nome, $nascimento, $salario) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->salario = $salario;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getSalario() {
        return $this->salario;
    }
}

?>
