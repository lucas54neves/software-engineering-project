# software-engineering-project
<p align="center">
  <img src="src/images/logo.png" width="170" height="170" align="center" />
</p>

Repositório para o projeto final da disciplina de Engenharia de Software do curso de Ciência da Computação da Universidade Federal de Lavras.
# Descrição do Projeto
O sistema faz o controle da Imobiliária JLS. O gerente da imobiliária pode cadastrar, excluir e atualizar o banco de dados dos imóveis, dos proprietários e dos inquilinos. O inquilino pode consultar o histórico de aluguéis pagos. O usuário pode consultar imóveis vagos.
No sistema, as seguintes informações dos imóveis são armazenadas: tipo do imóvel (casa ou apartamento), endereço, proprietário e valor de aluguel. Para os proprietários, as seguintes informações são armazenadas: nome, CPF, telefone de contato e imóveis cuja propriedade são deles. Para os inquilinos, as seguintes informações são armazenadas: nome, CPF, telefone de contato e imóvel que alugou.
## Tecnologias Utilizadas
* [PHP](https://www.php.net/) - linguagem para o back-end
* [HTML](https://www.w3schools.com/html/) e [CSS](https://www.w3schools.com/css/) - linguagens para o front-end
* [Astah](http://astah.net/) - ferramenta para criar diagramas
* [MariaBD](https://mariadb.org/) - banco de dados
* [XAMPP](https://www.apachefriends.org/pt_br/index.html) - servidor
## Estrutura de Diretórios
```
gerenciadorJLS
  -> docs
    -> banco-dados
      -> banco-dados.mwb
      -> script-criacao.sql
    -> diagrama-sequencial
    -> diagrama-classe
      -> diagrama-classe.asta
      -> diagrama-classe.png
    -> documento-requisitos
      -> documento-requisitos.pdf
    -> padroes-adotados
      -> boas-praticas-programacao.txt
      -> regras-commits.txt
      -> regras-requisitos.txt
  -> src
    -> view
    -> controller
    -> model
    -> persistence
  -> test
```
