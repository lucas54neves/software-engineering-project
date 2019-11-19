<?php
    class ImovelDAO {
        function __construct() {}

        function salvar($imovel, $conexao) {
            $sql = "INSERT INTO `imovel`(`idImovel`, `cpfProprietario`, `logradouro`, `numero`, `bairro`, `aluguel`) VALUES ('".
                $imovel->getIdImovel()."','".
                $imovel->getCpfProprietario()."','".
                $imovel->getLogradouro()."','".
                $imovel->getNumero()."','".
                $imovel->getBairro()."',".
                $imovel->getAluguel().")";

            if ($conexao->query($sql) == TRUE) {
                echo "Imovel salvo";
            } else {
                echo "Erro ao cadastrar o imovel: <br>".$conexao->error;
            }
        }

        function consultarCPF($cpf, $conexao) {
            $sql =
                "SELECT i.idImovel, i.cpfProprietario, i.aluguel, i.logradouro, i.numero, i.bairro
                    FROM imovel AS i
                        INNER JOIN inquilino AS inq
                        ON inq.imovelAlugado = i.idImovel AND inq.cpf = ".$cpf;
            $resultado = $conexao->query($sql);
            return $resultado;
        }

        function consultarBairro($bairro, $conexao) {
            $sql = "SELECT * FROM `imovel` WHERE bairro = '".$bairro."'";
            $resultado = $conexao->query($sql);
            return $resultado;
        }
    }

 ?>
