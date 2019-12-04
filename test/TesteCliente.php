<?php
    require_once('../src/model/Cliente.php');

    class TesteCliente extends PHPUnit\Framework\TestCase {
        public function testAtributos() {
            $cliente = new Cliente("123", "Lucas", "lucas@gmail.com", 505.3, "1995-03-14", "senha");
            $this->assertEquals("123", $cliente->getCpf(), "Verificação do CPF");
            $this->assertEquals("Lucas", $cliente->getNome(), "Verificação do nome");
            $this->assertEquals("lucas@gmail.com", $cliente->getEmail(), "Verificação do email");
            $this->assertEquals(505.3, $cliente->getRenda(), "Verificação da renda");
            $this->assertEquals("1995-03-14", $cliente->getNascimento(), "Verificação da data de nascimento");
            $this->assertEquals("senha", $cliente->getSenha(), "Verificação da senha");
        }
    }
?>
