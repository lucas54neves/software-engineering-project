<?php
    require_once('..\src\model\Cliente.php');

    class TesteCliente extends PHPUnit\Framework\TestCase {
        public function testAtributos() {
            // ($cpf, $nome, $email, $renda, $nascimento, $senha)
            $cliente = new Cliente("123", "Lucas", "lucas@gmail.com", 505.3, "1995-03-14", "senha");
            $this->assertEquals("123", $cliente->getCpf())
            $this->assertEquals("Lucas", $cliente->getNome())
            $this->assertEquals("lucas@gmail.com", $cliente->getEmail())
            $this->assertEquals(505.3, $cliente->getRenda())
            $this->assertEquals("1995-03-14", $cliente->getNascimento())
            $this->assertEquals("senha", $cliente->getSenha())
        }
    }
?>
