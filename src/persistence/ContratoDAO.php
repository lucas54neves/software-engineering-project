<?php
    class ContratoDAO {
        function __construct() {}

        function salvar($contrato, $conexao) {
            $sql = "INSERT INTO `Contrato`(`idContrato`, `cpfCliente`, `idImovel`, `cpfProprietario`, `cpfFuncionario`, `aluguelContrato`) VALUES ('" .
                $contrato->getIdContrato()."','".
                $contrato->getCpfCliente()."','".
                $contrato->getIdImovel()."','".
                $contrato->getCpfProprietario()."','".
                $contrato->getCpfFuncionario()."',".
                $contrato->getAluguelContrato().")";
            if ($conexao->query($sql) == TRUE) {
                echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Contrato salvo!')
				window.location.href='../view/AreaFuncionario.php';
				</SCRIPT>");
            } else {
                echo "Erro ao cadastrar o contrato: <br>".$conexao->error;
            }
        }

        function consultar($id, $conexao) {
            $sql = "SELECT Cl.nome AS nomeCliente, Cl.cpf AS cpfCliente, P.nome AS nomeProprietario, P.cpf AS cpfProprietario, I.id AS idImovel
                    	FROM Contrato AS C
                        	JOIN Proprietario AS P ON C.cpfProprietario = P.cpf
                            JOIN Cliente AS Cl ON C.cpfCliente = Cl.cpf
                            JOIN Funcionario AS F ON C.cpfFuncionario = F.cpf
                            JOIN Imovel AS I ON C.idImovel = I.id
                    	WHERE C.idContrato = '" . $id . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function atualizar($idContrato, $novoAluguel, $cpfNovoCliente, $conexao) {
            $sql = "UPDATE `Contrato`
                SET
                    `aluguelContrato` = " . $novoAluguel . ",
                    `cpfCliente` = '" . $cpfNovoCliente . "'
                WHERE `idContrato` = '" . $idContrato . "'";

            if ($conexao->query($sql) == TRUE) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Contrato Atualizado!')
    				window.location.href='../view/RemoverContrato.php';
    				</SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('O Contrato não existe, verifique o ID!')
    				window.location.href='../view/RemoverContrato.php';
    				</SCRIPT>");
            }
        }

        function remover($nomeFuncionario, $nomeProprietario, $nomeCliente, $conexao) {
            $sql = "DELETE FROM Contrato
                    	WHERE Contrato.idContrato IN (
                            SELECT Contrato.idContrato
                            	FROM Contrato
                            		INNER JOIN Funcionario ON Funcionario.cpf = Contrato.cpfFuncionario
                            		INNER JOIN Proprietario ON Proprietario.cpf = Contrato.cpfProprietario
                            		INNER JOIN Cliente ON Cliente.cpf = Contrato.cpfCliente
                            WHERE
                            	Funcionario.nome = '" . $nomeFuncionario . "' AND
                            	Proprietario.nome = '" . $nomeProprietario . "' AND
                            	Cliente.nome = '" . $nomeCliente . "')";
            
            if ($conexao->query($sql) == TRUE) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Contrato Removido!')
    				window.location.href='../view/RemoverContrato.php';
    				</SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Contrato não foi removido!')
    				window.location.href='../view/RemoverContrato.php';
    				</SCRIPT>");
            }
        }
    }
 ?>
