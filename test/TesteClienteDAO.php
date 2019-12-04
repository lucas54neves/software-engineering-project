<?php
    require_once('../src/model/Cliente.php');
    require_once('../src/persistence/ClienteDAO.php');
    include_once('../src/persistence/Connection.php');

    class TesteClienteDAO extends PHPUnit\Framework\TestCase {
        public function testSalvarRecuperar() {
            $conexao = new Connection();
            $conexao = $conexao->getConnection();
            $cliente = new Cliente("123", "Lucas", "lucas@gmail.com", 505.3, "1995-03-14", "senha");
            $clienteDAO = new ClienteDAO();
            $clienteDAO->salvar($cliente, $conexao);
            $resultado = $clienteDAO->consultar("123", $conexao);
            if ($resultado->num_rows > 0) {
                while ($linha = $resultado->fetch_assoc()) {
                    $this->assertEquals("123", $linha['cpf'], "Verificação do CPF");
                    $this->assertEquals("Lucas", $linha['nome'], "Verificação do nome");
                    $this->assertEquals("lucas@gmail.com", $linha['email'], "Verificação do email");
                    $this->assertEquals(505.3, $linha['renda'], "Verificação da renda");
                    $this->assertEquals("1995-03-14", $linha['nascimento'], "Verificação da data de nascimento");
                    $this->assertEquals("senha", $linha['senha'], "Verificação da senha");
                }
            }

        }
    }
?>
