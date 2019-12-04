<?php
    //inicia sessões
    session_start();

    class ImovelDAO {
        function __construct() {}

        function salvar($imovel, $conexao) {
            $sql = "INSERT INTO `Imovel`(`id`, `logradouro`, `numero`, `bairro`, `cpfProprietario`, `aluguel`) VALUES ('".
                $imovel->getId()."','".
                $imovel->getLogradouro()."','".
                $imovel->getNumero()."','".
                $imovel->getBairro()."','".
                $imovel->getCpfProprietario()."',".
                $imovel->getAluguel().")";

            if ($conexao->query($sql) == TRUE) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Imóvel cadastrado com Sucesso!')
    				window.location.href='../view/AreaProprietario.php';
    				</SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Imóvel cadastrado com Sucesso!')
    				window.location.href='../view/CadastrarImovel.php';
    				</SCRIPT>");
            }
        }

        function consultar($bairro, $conexao) {
            $sql = "SELECT * FROM `Imovel` WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND bairro = '" . $bairro . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function consultarID($id, $conexao) {
            $sql = "SELECT * FROM `Imovel` WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND id = '" . $id . "'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function atualizar($conexao, $id, $logradouro, $numero, $bairro, $aluguel, $cpfProprietario) {
            $sql = "UPDATE `Imovel`
                SET
                    `logradouro`='" . $logradouro . "',
                    `numero`='" . $numero . "',
                    `bairro`='" . $bairro . "',
                    `aluguel`=" . $aluguel . ",
                    `cpfProprietario`='" . $cpfProprietario . "'
                WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND `id`='" . $id ."'";

            if ($conexao->query($sql) == TRUE) {
                echo "<script>alert('Imovel atualizado')</script>";
            } else {
                echo "Erro ao atualizar o imovel: <br>".$conexao->error;
            }
        }

        function remover($conexao, $bairro) {
            $resultadoTemImovel = $this->consultar($bairro, $conexao);

            if ($resultadoTemImovel->num_rows > 0) {
                $sql = "DELETE FROM `Imovel` WHERE cpfProprietario = '" . $_SESSION['cpfproprietario'] . "' AND bairro = '" . $bairro . "'";

                if ($conexao->query($sql) == TRUE) {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Imovel(eis) removido(s)!')
    				window.location.href='../view/RemoverImovel.php';
    				</SCRIPT>");
                } else {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Erro ao remover imovel!')
    				window.location.href='../view/RemoverImovel.php';
    				</SCRIPT>");
                }
            } else {
                echo "<script>alert('Você não tem imóveis cadastrado nesse bairro')</script>";
            }
        }
    }
 ?>
