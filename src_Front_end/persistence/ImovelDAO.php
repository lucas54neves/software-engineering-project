<?php
    class ImovelDAO {
        function __construct() {}

        function salvar($imovel, $conexao) {
            $sql = "INSERT INTO `imovel`(`logradouro`, `numero`, `bairro`, `idImovel`, `aluguel`) VALUES ('".
                $imovel->getLogradouro()."','".
                $imovel->getNumero()."','".
                $imovel->getBairro()."','".
                $imovel->getIdImovel()."',".
                $imovel->getAluguel().")";

            if ($conexao->query($sql) == TRUE) {
                echo "Imovel salvo";
            } else {
                echo "Erro ao cadastrar o imovel: <br>".$conexao->error;
            }
        }
    }

 ?>
